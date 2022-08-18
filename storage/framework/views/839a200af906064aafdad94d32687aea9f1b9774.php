<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($data['title']); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
   
        <table width="100%" border="0" style="font-size: 14px;font-family: 'Poppins', sans-serif;color:#000;" style="border-collapse: collapse;">
              <tr>
                 <td>
                    <center><img class="logo-pic-one" src="<?php echo e(env('APP_URL')); ?>public/assest/login/images/tos-LOGO-new.png" alt="" height="80px" width="170px"></center> 
                 </td>
             </tr>
             <tr>
                <td colspan="3">
                    <h4 style="margin:25px 0 0 0;padding:6px;text-align:justify;">
                       Dear <?php echo e($data['name']); ?>

                    </h4>
                </td>
            </tr>
            <tr>
                <td>
                    Trendy Online Solution ,
                </td>
            </tr>
            <br/>
            <tr>
                <td>
                   has allotted you <?php echo e($data['project']); ?> on Start date <?php echo e($data['start_date']); ?> which has to End on <?php echo e($data['end_date']); ?>.
                </td>
            </tr>
             <br/>
            <tr>
                <td>
                    Project Description is:  <?php echo e($data['description']); ?>

                </td>
            </tr>
             <br/>
            <tr>
                <td>
                    We Request you to please login to your panel and take command of the project.
                </td>
            </tr>
             <br/>
            <tr>
                <td>
                    We wish you good luck for the same.
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Regards</h3>
                    
                </td>
                
            </tr>
            <tr>
                <td>
                    TOS Administrator
                </td>
            </tr>
          
    </table>
</body>
</html><?php /**PATH /home2/tossamba/public_html/resources/views/emails/EmployeeAssignProject.blade.php ENDPATH**/ ?>