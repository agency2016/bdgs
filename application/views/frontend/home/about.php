<style>
    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #203558 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #203558; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 15px 0; }
.tab-content{padding:20px}

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }

</style>
<div class="container-fluid bredcram">
    <div class="row">
        <div class="col-md-12">
            হোম <i class="fa fa-arrow-circle-o-right"></i> আমাদের সম্পর্কে
        </div>
    </div>
</div>
<div class="container-fluid about-w">
    <section id="contentbody" style="padding-top: 20px;">
      <div class="container-fluid">

        <div class="row" style="min-height: 600px;padding: 10px;">

            <div class="col-md-10 col-md-offset-1 about-head">
               <div class="row">
                   <h1 class="">   গণ  সংহতি সম্পর্কে
                    </h1>
               </div>
           </div>
            
            <div class="col-md-10 col-md-offset-1 about-con">
                <div class="row" style="padding:7px;">
                    
                   
                        <div class="card">
                               <ul class="nav nav-tabs" role="tablist">
                                   <li role="presentation" class="active" style="width:20%;"><a href="#home" style="width:100%;" aria-controls="home" role="tab" data-toggle="tab">গঠনতন্ত্র</a></li>
                                   <li role="presentation" style="width:20%;"><a href="#profile" aria-controls="profile" style="width:100%;" role="tab" data-toggle="tab">ঘোষোণাপ্ত্র</a></li>
                                </ul>

                               <!-- Tab panes -->
                               <div class="tab-content">
                                   <div role="tabpanel" class="tab-pane active twocol" id="home">
                                       <?php if ($about) echo $about->row()->a_desc ;?></div>
                                      <div role="tabpanel" class="tab-pane twocol" id="profile">
                                       <?php if ($con) echo $con->row()->c_desc ;?>
                                      </div>
                                     </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
