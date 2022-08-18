<?php $__env->startSection('body'); ?>
<style>
    div#page-wrapper {
        background-color: #fff;
}.stat-list li {
    font-size: 16px;
}.stat-list li {
    font-size: 16px;
    padding: 3px 10px;
}.stat-list li {
    margin-top: 0;
}.stat-list li:nth-of-type(even) {
    background: #f9f9f9;
}li.lazur-bg a {
    color: white !important;
}.stat-list li a {
    color: #6c6c6c;
}
.stat-list li:nth-of-type(odd) {
    background: #1c84c6;
}
.btn.btn-danger {
    background-color: #3761d8 !important;
    border-color: #3761d8 !important;
}
.label-info{
    background-color: #ffff !important;
    border-color: #ffff !important;
    color: #0a76b5 !important;
}
.text-info {
    color: #0a76b5 !important;
}
.ibox-title{
    color: #ffff;
}
.ibox-content{
    background-color: #f4f5f7 !important;
    
}
button.btn.btn-xs.btn-white {
    color: #0a76b5;
}
.ibox{
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px !important;
}

.text-center.disabled_div {
    text-color: pink !important;
    background: #gray !important;
    background-color: #ececec;
}
</style>
<div class="wrapper wrapper-content">
    
    
    
    <?php if(Auth::user()->is_admin == 1): ?>
    <h1 class="title"><center>SSAS Healthcare Services</center></h1>
    <p style="font-size:15px; text-align:center; padding-bottom:0px;">SSAS Healthcare – We provide various healthcare services.</p>
    <div class="devider"></div>
    
<div class="row">
    <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Healthcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare_icon.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="<?php echo e(route('healthcare.home')); ?>"><h1 class="no-margins">Corporate Healthcare</h1></a>
                        <a href="<?php echo e(route('healthcare.home')); ?>"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Corporate Healthcare Plugin</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><i class="fa fa-syringe"></i><img src="https://ssashealthcare.com/Software/public/assest/img/syringe.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Vaccination</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Vaccination Panel</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Wellness</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Wellness Panel</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/self-improvement.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Image Makeover</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Image Makeover Panel</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/plant.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Plants</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Corporate Plants Panel</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/travel-and-tourism.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Tours</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Corporate Tours Panel</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/presentation.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Corporate Trainers</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Corporate Trainers Panel</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/doctor.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Occupational Healthcare(Medical)</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Occupational Healthcare Panel</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox icon_dashboard">
                    <div class="ibox-title">
                        <div class="ibox-tools">
                            <span class="label label-success float-right">SSAS Heathcare</span>
                        </div>
                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/web.png" alt="" width="30px" height="30px"/></h5>
                    </div>
                    <div class="ibox-content">
                        <a href="#"><h1 class="no-margins">Healthcare Customized Softwares</h1></a>
                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                        <p>Login Our Healthcare Softwares Panel</p>
                    </div>
                </div>
            </div>
			
            
             
           
        </div>
<?php endif; ?>
  <?php if(Auth::user()->is_admin == 0): ?>
  
  <div class="row">
               
               <div class="col-lg-12">

                  <div class="row">
                       <div class="col-lg-12">
                         <center> <button tabindex="-1" data-toggle="modal" data-target="#myAhcUrllModel" class="btn btn-warning  " type="button">Employee Registration URL</button>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  
                                   
                                    
                                   
                       </div>
                   </div>

               </div>


           </div>
           <h1><center><b>Employee Related Services</b></center></h1>
<div class="row">
						 
            <div class="col-lg-4"> 
                    <?php if(in_array('Corporate Healthcare', explode(',',Auth::user()->products))): ?>
                            <div class="ibox icon_dashboard">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-success float-right">SSAS Healthcare</span>
                                    </div>
                                    <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare_icon.png" alt="" width="30px" height="30px"/></h5>
                                </div>
                                <div class="ibox-content">
                                    <a href="<?php echo e(route('healthcare.home')); ?>"><h1 class="no-margins">Corporate Healthcare</h1></a>
                                    <a href="<?php echo e(route('healthcare.home')); ?>"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                    <p>Login Our Corporate Healthcare Plugin</p>
                                </div>
                            </div>
                    <?php else: ?>
                         <div class="ibox icon_dashboard disabled_div">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-success float-right">SSAS Healthcare</span>
                                    </div>
                                    <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare_icon.png" alt="" width="30px" height="30px"/></h5>
                                </div>
                                <div class="ibox-content">
                                    <a href="javascript:void(0);"><h1 class="no-margins">Corporate Healthcare</h1></a>
                                    <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                    <p>Login Our Corporate Healthcare Plugin</p>
                                </div>
                            </div>
                    <?php endif; ?>
                
            </div>
            <div class="col-lg-4">
                        <?php if(in_array('Corporate Vaccination', explode(',',Auth::user()->products))): ?>
                           <div class="ibox icon_dashboard">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-success float-right">SSAS Heathcare</span>
                                    </div>
                                    <h5><i class="fa fa-syringe"></i><img src="https://ssashealthcare.com/Software/public/assest/img/syringe.png" alt="" width="30px" height="30px"/></h5>
                                </div>
                                <div class="ibox-content">
                                    <a href="#"><h1 class="no-margins">Corporate Vaccination</h1></a>
                                    <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                    <p>Login Our Vaccination Panel</p>
                                </div>
                            </div>
                         <?php else: ?>
                            <div class="ibox icon_dashboard disabled_div">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-success float-right">SSAS Heathcare</span>
                                    </div>
                                    <h5><i class="fa fa-syringe"></i><img src="https://ssashealthcare.com/Software/public/assest/img/syringe.png" alt="" width="30px" height="30px"/></h5>
                                </div>
                                <div class="ibox-content">
                                    <a href="javascript:void(0);"><h1 class="no-margins">Corporate Vaccination</h1></a>
                                    <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                    <p>Login Our Vaccination Panel</p>
                                </div>
                            </div>
                         <?php endif; ?>
                      
              
            </div>
            <div class="col-lg-4">
               
                             <?php if(in_array('Corporate Wellness', explode(',',Auth::user()->products))): ?>
                                <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Corporate Wellness</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Wellness Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/healthcare.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Corporate Wellness</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Wellness Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                           
                       
                
            </div>
            
             <div class="col-lg-4">
                       
                             <?php if(in_array('Image Makeover', explode(',',Auth::user()->products))): ?>
                               <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/self-improvement.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Corporate Image Makeover</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Image Makeover Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/self-improvement.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Corporate Image Makeover</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Image Makeover Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                            
                
            </div>
            
             <div class="col-lg-4">
               
                       
                             <?php if(in_array('Corporate Plants', explode(',',Auth::user()->company_products))): ?>
                               <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/plant.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Corporate Plants</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Plants Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/plant.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Corporate Plants</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Plants Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                         
                       
            </div>
            
            
            
             <div class="col-lg-4">
                             <?php if(in_array('Corporate Tours', explode(',',Auth::user()->company_products))): ?>
                                <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/travel-and-tourism.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Corporate Tours</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Tours Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                 <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/travel-and-tourism.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Corporate Tours</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Tours Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                       
              
            </div>
            
             <div class="col-lg-4">
                       
                             <?php if(in_array('Corporate Trainers', explode(',',Auth::user()->company_products))): ?>
                                <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/presentation.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Corporate Trainers</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Trainers Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/presentation.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Corporate Trainers</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Corporate Trainers Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                       
            
            </div>
       
       
       <div class="col-lg-4">
                       
                             <?php if(in_array('Occupational Healthcare(Medical)', explode(',',Auth::user()->company_products))): ?>
                                <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/doctor.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Occupational Healthcare(Medical)</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Occupational Healthcare Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/doctor.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Occupational Healthcare(Medical)</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Occupational Healthcare Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                           
                
            </div>
            
            <div class="col-lg-4">
                       
                             <?php if(in_array('Healthcare Customized softwares', explode(',',Auth::user()->company_products))): ?>
                                <div class="ibox icon_dashboard">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/web.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="#"><h1 class="no-margins">Healthcare Customized Softwares</h1></a>
                                        <a href="#"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Healthcare Softwares Panel</p>
                                    </div>
                                </div>
                             <?php else: ?>
                                <div class="ibox icon_dashboard disabled_div">
                                    <div class="ibox-title">
                                        <div class="ibox-tools">
                                            <span class="label label-success float-right">SSAS Heathcare</span>
                                        </div>
                                        <h5><img src="https://ssashealthcare.com/Software/public/assest/img/web.png" alt="" width="30px" height="30px"/></h5>
                                    </div>
                                    <div class="ibox-content">
                                        <a href="javascript:void(0);"><h1 class="no-margins">Healthcare Customized Softwares</h1></a>
                                        <a href="javascript:void(0);"><div class="login-dashboard font-bold text-success"><i class="fa fa-sign-in"></i> Login</div></a>
                                        <p>Login Our Healthcare Softwares Panel</p>
                                    </div>
                                </div>
                             <?php endif; ?>
                            
                       
               
            </div>
             
           
        </div>
    <?php endif; ?>


</div>
                
                <script>
        $(document).ready(function() {

            let toast = $('.toast');

            setTimeout(function() {
                toast.toast({
                    delay: 5000,
                    animation: true
                });
                toast.toast('show');

            }, 2200);

            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["AHC","Pre" ],
                datasets: [{
                    data: ['<?=$data["bookings"]?>','<?=$data["prebookings"]?>'],
                    backgroundColor: ["#a3e1d4","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });

        $(window).bind("scroll", function () {
            let toast = $('.toast');
            toast.css("top", window.pageYOffset + 20);

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/ssashealthcare/public_html/Software/resources/views/admin/home.blade.php ENDPATH**/ ?>