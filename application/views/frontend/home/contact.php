

<section class="main-body-content">
    
    <div class="container grey lighten-4 z-depth-2"  style="margin-top:20px ;padding: 20px;" ng-controller="emailAdmin">
       
        <div class="row">
            <div class="col m12">
                <div class="">
                    <h3 class="center light-blue-text text-darken-3">Contact Us
                        <small>if you have any query</small>
                    </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col m6 offset-m3">
                <div class="errors" data-ng-show="error==true" ng-bind-html="errormsg"></div>
                <div class="errors" data-ng-show="success==true" ng-bind-html="successmsg"></div>
                <form id="contact-form" name="contact_form" class="form" ng-submit="emailFormSubmit(contact_form)" ng-validate="validationOptions" required>
                      
                    <div class="input-field">
                        <input name="name" ng-model="email.name" ng-init="email.name=''" class="form-control adbd_input" type="text" id="inputname" placeholder="Name">
                          
                    </div>
                    <div class="input-field">
                        <input name="email" ng-model="email.emailAddress" ng-init="email.emailAddress=''" class="form-control adbd_input" type="text" id="inputmail" placeholder="Email">
                        
                    </div>

                    <div class="input-field">
                        <input name="subject" ng-model="email.subject" ng-init="email.subject=''" class="form-control adbd_input" type="text" id="email_subject" placeholder="Subject">
                               
                    </div>

                    <div class="input-field">
                        <textarea id="message" ng-model="email.msg_body" ng-init="email.msg_body=''" class="form-control" rows="6" placeholder="Message..." name="msg_body" value=""></textarea>
                                  
                    </div>

                    <div class="input-field">
                        <button type="submit"  style="" class="btn right adbd-btn-orange"><i class="fa fa-envelope"></i> <strong>Send Message</strong></button>
                                
                    </div>
                </form>
            </div>
            <!-- col-md-12 end -->
        </div>
        <!-- row end     -->

    </div>
    <!--    CONTAINER-->

</section>


