<div ng-controller="loginCtrl">
    <div class="modal-dialog">
        <div id="logbox" class="grey lighten-3 z-depth-2" style="padding: 30px;">
            <form id="contact-form" name="update_password_form" class="form" ng-submit="updatePassword(update_password_form)" ng-validate="validationPasswordCahnge" required>
                
                <h6 class="drives_header center">Please change your password </h6>
                <p class="text-center" id="errorpasswordset" style="color:red"></p>
                
                <input type="hidden" name="update_email" id="update_email" 
                       ng-model="forgot.email" ng-init="forgot.email='<?php echo $user_mail;?>'" value="<?php echo $user_mail;?>" />
                
                <input name="forgot_password" 
                       id="forgot_password" ng-model="forgot.password" ng-init="forgot.password=''" 
                       type="password" autocomplete="off" placeholder="Enter your password" class="adbd_input"  
                       required="required"/>
                <input name="forgot_repassword" 
                       id="forgot_repassword" ng-model="forgot.repassword"
                       ng-init="forgot.repassword=''" 
                       type="password" autocomplete="off" 
                       placeholder="Enter your password again" 
                       required="required" class="adbd_input"/>
                
                <p class="text-center"><button type="submit" class="changepassword btn adbd-btn-blue">Change Password</button></p>
            </form>
        </div>
    </div>
</div>


