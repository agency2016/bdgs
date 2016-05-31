<div class="container-fluid bredcram">
    <div class="row">
        <div class="col-md-12">
           হোম > যোগাযোগ করুন        </div>
    </div>
</div>
<div class="container-fluid about-w">
    <section id="contentbody" style="padding-top: 20px;">
      <div class="container-fluid">

        <div class="row" style="min-height: 600px;">

            <div class="col-md-10 col-md-offset-1 about-head">
               <div class="row">
                   <h1 class="">   যোগাযোগের ঠিকানা
                    </h1>
               </div>
           </div>

            <div class="col-md-10 col-md-offset-1 about-con" style="background-color: white;">
                <div class="row">
                    <div class="col-md-6" style="padding:30px;border-right:2px dotted #ddd;">
                               <form id="contact-form" name="contact_form" class="form-horizontal" method="post"
                      action="<?php echo base_url('Home/email_admin') ?>">
                    <div class="form-group">
                        <input name="inputname" class="form-control customfield" type="text" id="inputname"
                               placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="inputmail" class="form-control customfield" type="email" id="inputmail"
                               placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input name="email_subject" class="form-control customfield" type="text" id="email_subject"
                               placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea id="message" class="form-control customfield" rows="6" placeholder=""
                                  name="email_message" value=""></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right"><i
                                class="fa fa-envelope"></i> <strong>Submit</strong></button>
                    </div>
                </form>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center"><?php if ($contact) echo $contact->row()->c_desc ;?></p>
                    </div>

                   
                </div>
            </div>

                </div>
    </div>
</section>
</div>



