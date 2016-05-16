
 

    <!-- ==================start content body section=============== -->
    <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->
          <div class=" col-sm-12 col-md-8 col-lg-8">
            <div class="row">
              <div class="leftbar_content">
                <h2>The New Events</h2>          

                <!-- start single stuff post -->
               <div class="singlepost_area">
                <?php  for($x= 0;$x<=5 ;$x++){ ?>
                 <div class="singlepost_content">
                  
                   <span class="stuff_date">Nov <strong>17</strong></span>
                   <h2><a href="#">Duis quis erat non nunc fringilla</a></h2>
                    <a href="#" class="stuff_category"> Category:Events</a>
                   <div class="row" style="margin-top: 20px;">
                       <div class="col-md-5" >
                           <img class="" src="<?php echo base_url('resources/img/hot_img1.jpg')?>" alt="img">
                       </div>
                       <div class="col-md-7" style="margin-top: 20px;">
                             
                                    <p> roin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum 
                                        tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus.
                                       
                                        consectetur quis consequat quis, blandit a nunc.
                                        roin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum 
                                        tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus.
                                       
                                        consectetur quis consequat quis, blandit a nunc.
                                        Sed orci erat, placerat ac interdum ut, suscipit eu augue.
                                        Nunc vitae mi tortor. Ut vel justo quis lectus elementum  <a href="<?php echo base_url('Event/single')?>">READ MORE</a></p>
                                     
                       </div>
                   </div>
                   
                  <div class="author">
                   
                      <h3><a href="#"> BY Author Name</a></h3>
                     
                    
                  </div>
                   <hr>
                 </div>
                <?php }?>
               </div>
                <!-- End single stuff post -->    
                <div class="stuffpost_paginatinonarea wow slideInLeft" style="margin:10px 0px;">
                  <ul class="newstuff_pagnav">
                    <li><a class="active_page" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                </div>

             <!-- start similar post -->
             <div class="similar_post_area">
               <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
               <ul class="featured_nav similarpost_nav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                  <li>
                    <a href="#" class="featured_img"><img alt="img" src="<?php echo base_url('resources/img/featured_img1.jpg')?>"></a>
                    <div class="featured_title">
                      <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="featured_img"><img alt="img" src="<?php echo base_url('resources/img/featured_img1.jpg')?>"></a>
                    <div class="featured_title">
                      <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="featured_img"><img alt="img" src="<?php echo base_url('resources/img/featured_img1.jpg')?>"></a>
                    <div class="featured_title">
                      <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                </ul>
             </div>
              </div>
            </div>  
          </div>
          <!-- End left bar content -->

       

          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="row">
              <div class="rightbar_content">
              <!-- start featured post -->
                <div class="single_blog_sidebar">
                <h2>The Featured Stuff</h2>  
                <ul class="featured_nav wow fadeInDown">
                  <li>
                    <a class="featured_img" href="#"><img src="<?php echo base_url('resources/img/featured_img1.jpg')?>" alt="img"></a>
                    <div class="featured_title">
                      <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                  <li>
                    <a class="featured_img" href="#"><img src="<?php echo base_url('resources/img/featured_img1.jpg')?>" alt="img"></a>
                    <div class="featured_title">
                      <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                  <li>
                    <a class="featured_img" href="#"><img src="<?php echo base_url('resources/img/featured_img1.jpg')?>" alt="img"></a>
                    <div class="featured_title">
                      <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                    </div>
                  </li>
                </ul>
                </div>
                <!-- End featured post -->

                <!-- start Popular Posts -->
                <div class="single_blog_sidebar">
                <h2>Popular Posts</h2>  
                <ul class="middlebar_nav wow fadeInDown">
                  <li>
                    <a href="#" class="mbar_thubnail"><img alt="img" src="<?php echo base_url('resources/img/hot_img1.jpg')?>"></a>
                    <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                  </li>
                   <li>
                    <a href="#" class="mbar_thubnail"><img alt="img" src="<?php echo base_url('resources/img/hot_img2.jpg')?>"></a>
                    <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                  </li>
                   <li>
                    <a href="#" class="mbar_thubnail"><img alt="img" src="<?php echo base_url('resources/img/hot_img1.jpg')?>"></a>
                    <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                  </li>
                   <li>
                    <a href="#" class="mbar_thubnail"><img alt="img" src="<?php echo base_url('resources/img/hot_img1.jpg')?>"></a>
                    <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                  </li>
                </ul>
                </div>
                <!-- End Popular Posts -->   

                <!-- start Popular Posts -->
                <div class="single_blog_sidebar">
                <h2>Popular Tags</h2>  
                <ul class="poplr_tagnav wow fadeInDown">
                  <li><a href="#">Arts</a></li>
                  <li><a href="#">Games</a></li>
                  <li><a href="#">Nature</a></li>
                  <li><a href="#">Comedy</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Tourism</a></li>
                  <li><a href="#">Videos</a></li>
                </ul>
                </div>
                <!-- End Popular Posts -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  