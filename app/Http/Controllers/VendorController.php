<?php

namespace App\Http\Controllers;

use Auth;
use \App\User;
use \App\Package;
use \App\Booking;
use \App\Event;
use \App\State;
use \App\DailySatus;
use \App\AssignEvent;
use \App\BlackDate;
use \App\PackageTest;
use \App\TestAssignPackage;
use \App\EventParticipate;
use \App\Feedback;
use \App\AssignProduct;

use \App\City;
use \App\Dc;

use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \App\Http\Requests\UsersRequest;
use \App\Http\Requests\PasswordRequest;
use \App\Http\Requests\DailyStatusRequest;

use Illuminate\Support\Facades\Hash;
class VendorController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        //$userId= =auth()->user()->id;
        $this->paginate = 10;
    }
    public function login()
    {
        auth()->logout();
        //echo "asdfasdf";die;
        if(isset(Auth::user()->id)){
            if(Auth::user()->is_admin==0){
                return redirect()->route('hr.home');
            } else if(Auth::user()->is_admin==1){
                return redirect()->route('admin.home');
            } else if(Auth::user()->is_admin==2){
                return redirect()->route('employee.home');
            } else if(Auth::user()->is_admin==4){
                return redirect()->route('employee.home');
            }
        } else {
            return view('vendor.login');
        }
        
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/vendor/login');
    }


    public function index(){

       
        return view('vendor.home');
    }
    public function updateProfile(){

        $loginUser = Auth::user()->id;
        $states =State::where('is_deleted',0)->pluck('name','id');
        $result  =  User::where('id',$loginUser)->first();

        $companyName  =  User::where('id',$result->company_id)->first();
      //  print_r($result);

        return view('employee.updateProfile', compact('result','states'));
    }

    public function updateProfileSave(UsersRequest $request){
    

        $image = $request->file('image');

        $data = User::where('id',Auth::user()->id)->first();
        //echo '<pre>';print_r($data);die;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        
        if(isset($image) && !empty($image)){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/company');
            $image->move($destinationPath, $imageName);
            $imagePath = 'public/uploads/company/'.$imageName;
            $data->image=$imagePath;
        }
        if($data->save()){
            return redirect()->route('employee.updateProfile')->with('success','Profile Updated successfully');
        } else {
            return redirect()->back()->with('failed','Profile Update Faild successfully');
        }


    }

    public function updatePassword(PasswordRequest $request){


        $data = User::where('id',Auth::user()->id)->first();
        $data->password = Hash::make($request->password);
        if($data->save()){
            return redirect()->route('employee.updateProfile')->with('success','Change Password successfully');
        } else {
            return redirect()->back()->with('failed','Change Password Faild successfully');
        }

    }








    public function addDailyStatus(){
        $pageName = 'Daily Status';
        $method = 'Add New';
        
       
        $projectAll =AssignProduct::leftJoin('products', 'assign_products.project_id', '=', 'products.id')
         ->whereRaw("find_in_set('".Auth::user()->id."',assign_products.employee_ids)")->pluck('products.name as projectName','assign_products.project_id');
         
         
        $result =DailySatus::leftJoin('products', 'daily_satuses.project_id', '=', 'products.id')->where('daily_satuses.is_deleted',0)->where('daily_satuses.employee_id',Auth::user()->id);
        $result=$result->orderBy('daily_satuses.id','desc')->select('daily_satuses.*','products.name as projectName');
        $total=$result->count();
        $result=$result->paginate($this->paginate);
         $page=$result->perPage()*($result->currentPage()-1);

        return view('employee.daily_status.add',compact('pageName','method','result','page','total','projectAll'));
    }
  

    public function saveDailyStatus(DailyStatusRequest $request){
            $data = new DailySatus;
            $data->date = date("Y-m-d");
            $data->project_id = $request->project_id;
            $data->description = $request->description;
            $data->status = $request->status;
            $data->reason = $request->reason;
            $data->employee_id = Auth::user()->id;
    
            if($data->save()){
                return redirect()->route('user.new.status')->with('success','Daily Status Added successfully');
            
        } else {
            return redirect()->back()->with('failed','you can add depended only 6 ');
        }

        
    }
    
    
    
    
public function projectDetail(Request $request){

    $id = $request->id;
    $html = "";
    
     $data = AssignProduct::leftJoin('products', 'assign_products.project_id', '=', 'products.id')
                            ->leftJoin('users', 'products.company_id', '=', 'users.id')
                            ->where('assign_products.id',$id)->select('assign_products.*','products.name as projectName','products.status as projectStatus','users.company as companyName')
                            ->first();
    
   if(!empty($data->image)){
       $url = env('APP_URL').$data->image;
   }else{
       $url = "";
   }
  $html = ' <table class="table table-striped">
  
  <tr>
    <th width="30%">Project Alloated Date</th>
      <td>'.date("d/m/Y", strtotime($data->created_at) ).'</td>
      </tr>

  <tr>
    <th width="30%">Project Name</th>
      <td>'.$data->projectName.'</td>
      </tr>
      <tr>
        <tr>
    <th width="30%">Project Status</th>
      <td>'.$data->projectStatus.'</td>
      </tr>
      <tr>
    <th width="30%">Project Company Name</th>
      <td>'.$data->companyName.'</td>
      </tr>
      <tr>
            <th width="30%">Description</th>
            <td>'.$data->description.'
            </td>
        </tr>
        <tr>
            <th width="30%">Document</th>
            
            <td>';
            if(!empty($data->image)){
               $html .= '<a href="'.$url.'" download>
                                                  <i class="fa fa-download"></i>
                                                </a>
            </td>
        </tr>
        ';
            }
            
        
        
      
     

        

 

$html .= '</table>';
return $html;
}

}
