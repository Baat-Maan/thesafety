<table width="100%" class="table table-striped">
                                                <tr>
                                                    <th>
                                                        Feedback Form Please share your experience during the medical examination process as below
                                                    </th>
                                                    <th>
                                                        Excellent
                                                    </th>
                                                    <th>
                                                       Very Good
                                                    </th>
                                                    <th>
                                                        Good
                                                    </th>
                                                    <th>
                                                        Fair
                                                    </th><th>
                                                       Poor
                                                    </th>
                                                    
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        Overall Experience With the medical examination process
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="overall_expeirence[]" 
                                <?php echo e(in_array($feedback, explode(',',$val->overall_expeirence))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                       Medical Facility :(Ease of Locating, Set up, instruments, cleanliness, process

followed)
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="medical_facility[]" 
                                 <?php echo e(in_array($feedback, explode(',',$val->medical_facility))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                      Reception at Clinic / Hospital
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="reception[]" 
                                 <?php echo e(in_array($feedback, explode(',',$val->reception))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Behavior and cooperation of staff at reception
                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="behavior_of_staff[]" 
                                 <?php echo e(in_array($feedback, explode(',',$val->behavior_of_staff))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Courtesy and politeness of the doctor/medical staff for Technical Know

how, Behavior, Appearance etc

                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="courtesy_and_politeness[]" 
                                 <?php echo e(in_array($feedback, explode(',',$val->courtesy_and_politeness))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                                
                                                 <tr>
                                                    <td>
                                                        Experience with the waiting time before the test began

                                                    </th>
                                                    
                                                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td>
                                <input type="checkbox" name="waiting_time[]" 
                                <?php echo e(in_array($feedback, explode(',',$val->waiting_time))?"checked":null); ?> disabled
                                value="<?php echo e($feedback); ?>" id="inlineCheckbox<?php echo e($feedback); ?>">
                                 </td>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                   
                                                    
                                                </tr>
                                            </table><?php /**PATH /home4/avyukhl1/public_html/AHC/resources/views/feedback.blade.php ENDPATH**/ ?>