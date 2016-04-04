<style>
    .color_grey{
        color: grey;
    }
</style>
<div class="" ng-controller="display_record" ng-cloak>
    <div id="user_profile_view" ng-show="show == 1" class="ng-cloak ng-hide">
        <div class="container"  id="profileInfotable" ng-cloak >
            <a ng-click="show_edit()" class="right" style="cursor: pointer">Edit Profile</a>
            <div class="row">
                <div class="col m4">
                    <img src="<?php echo base_url('resources/images/u38.jpg') ?>" class="responsive-img circle" style="height: 230px;">

                </div>
                <div class="col m8">
                    <div class=" white lighten-4 z-depth-2 ng-scope" style="padding: 20px">
                        <h5 ng-cloak><span class="color_grey">First name:</span> {{record.fname}}</h5>
                        <h5 ng-cloak><span class="color_grey">Last name:</span> {{record.lname}}</h5>
                        <h5 ng-cloak><span class="color_grey">Email:</span> {{record.email}}</h5>
                        <h5 ng-cloak><span class="color_grey">Last login:</span> {{record.last_log_in}}</h5>
                        <h5 ng-cloak><span class="color_grey">Member since:</span> {{record.signup_date}}</h5>
                        <h5 ng-cloak><span class="color_grey">Phone:</span> {{record.phone}}</h5>
                        <h5 ng-cloak ng-if="record.gender == 1"><span class="color_grey">Gender:</span> male</h5>
                        <h5 ng-cloak ng-if="record.gender == 2"><span class="color_grey">Gender:</span> female</h5>
                        <h5 ng-cloak><span class="color_grey">license number:</span> {{record.lisence_number}}</h5>
                        <h5 ng-cloak><span class="color_grey">About me:</span> <br/><small style="color: green">{{record.about_me}}</small></h5>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--    view profile-->

    <div id="user_profile_edit" ng-show="show == 2" ng-cloak class="ng-cloak ng-hide">
        <div class="container" id="profileedittable" ng-cloak>
            <a ng-click="show_view()" class="right" >View Profile</a>
            <form ng-submit="sendPost()">
            

                <div class="row">
                    <div class="col m4">
                        <img src="<?php echo base_url('resources/images/u38.jpg') ?>" class="responsive-img circle" style="height: 230px;">
                    </div>
                    <div class="col m8">
                        <div class=" white lighten-4 z-depth-2 ng-scope" style="padding: 20px">


                            <div ng-cloak><span class="color_grey">First name:</span>
                                <input value="{{record.fname}}" ng-model="formDatax.fnamex" id="first_name" type="text" class="validate adbd_input">
                            </div>
                            <div ng-cloak><span class="color_grey">Last name:</span> 
                                <input value="{{record.lname}}" ng-model="formData.lname" id="first_name" type="text" class="validate adbd_input">

                            </div>


                            <div ng-cloak><span class="color_grey">Phone:</span>
                                <input value="{{record.phone}}" ng-model="formData.phone" id="first_name" type="text" class="validate adbd_input">

                            </div>
<!--                            <h5 ng-cloak ng-if="record.gender == 1"><span class="color_grey">Gender:</span> male</h5>
                            <h5 ng-cloak ng-if="record.gender == 2"><span class="color_grey">Gender:</span> female</h5>-->
                            <div ng-cloak><span class="color_grey">license number:</span> 
                                <input value="{{record.lisence_number}}" ng-model="formData.lisence_number" id="first_name" type="text" class="validate adbd_input">

                            </div>
                            <div ng-cloak><span class="color_grey">About me:</span> <br/><small>
                                    <textarea ng-model="formData.about_me">{{record.about_me}}</textarea>
                                </small>
                            </div>
                            
                            <div>
                                <button class="waves-effect waves-light btn">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </form>
            
        </div>

    </div>
    <!--    </div> edit profile-->
</div>


