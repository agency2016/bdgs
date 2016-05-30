<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<script src="<?php echo base_url('resources/js/tinymce.min.js'); ?>"></script>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="<?php echo base_url('resources/js/locationpicker.jquery.js') ?>"></script>
  <script>

  tinymce.init({
  selector: '.trumbo',
  height: 300,
  theme: 'modern',
 paste_data_images: true,
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons |image',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
   $(function () {


       $('.textarea').trumbowyg();
        var dateToday = new Date();
        $(".datepicker").datepicker({
        dateFormat: "yy-mm-dd",
        });
        //add more image section

        $('.image_add_more').click(function(e){
            e.preventDefault();
            var count= parseInt($(this).attr('data-count'));
            count++;
            $(this).attr('data-count',count);
            var html = '<div class="e_image_single" data-count="'+count+'">'+
                                    '<div class="form-group">'+
                                            '<label for="" class="required">Image</label>'+
                                            '<input type="file" data-count="'+count+'" name="images[]" id="image_'+count+'"/>'+

                                     '</div>'+
                                    '<div class="form-group">'+
                                           ' <label for="" class="required">Title</label>'+
                                            '<input type="text" data-count="'+count+'" name="titles[]" id="title_'+count+'"/>'+

                                     '</div>'+
                                    '<div class="form-group">'+
                                           ' <label for="" class="required">Make this cover image</label>'+
                                            '<input type="radio" data-count="'+count+'" value="'+count+'" name="cover" id="cover_'+count+'"/>'+

                                     '</div>'+

                                '</div>';
                 $('.e_image_wrapper').append(html);

        });
        //add more image section
        $('.video_add_more').click(function(e){
            e.preventDefault();
            var count= parseInt($(this).attr('data-count'));
            count++;
            $(this).attr('data-count',count);
            var html = '<div class="e_video_single" data-count="'+count+'">'+
                                    '<div class="form-group">'+
                                            '<label for="" class="required">Link</label>'+
                                            '<input type="text" data-count="'+count+'" name="links[]" id="image_'+count+'"/>'+

                                     '</div>'+
                                    '<div class="form-group">'+
                                           ' <label for="" class="required">Title</label>'+
                                            '<input type="text" data-count="'+count+'" name="v_titles[]" id="title_'+count+'"/>'+

                                     '</div>'+


                                '</div>';
                 $('.e_video_wrapper').append(html);

        });
        //add more image section

    });
  </script>
<div class="nav-side-menu">


        <div class="menu-list">

            <ul id="li" class="menu-content list list-unstyled">
                <li>
                  <a href="<?php echo base_url('dashboard')?>">
                  <i class="fa fa-dashboard fa-lg"></i> ড্যাশবোর্ড
                  </a>
                </li>
                <li>
                      <a href="<?php echo base_url('dashboard/about-us')?>">
                  <i class="fa fa-lg fa-smile-o"></i> ামাদের সম্পর্কে
                  </a>
                  </li>
                 <li>
                  <a href="<?php echo base_url('dashboard/analysis')?>">
                  <i class="fa fa-lg fa-signal"></i> এনালাইসিস
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Banner/banner_list')?>">
                    <i class="fa fa-lg  fa-picture-o"></i> ব্যানার
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Centrl/centrl_list')?>">
                  <i class="fa fa-lg fa-wrench"></i> সেন্ট্রাল কমিটি
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Constitution/c_list')?>">
                  <i class="fa fa-users fa-lg"></i> কন্সটিটিউশন
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Contact/c_list')?>">
                  <i class="fa fa-envelope-o fa-lg"></i>যোগাযোগ করুন
                  </a>
                </li>
                 <li>
                  <a href="<?php echo base_url('Event/event_list')?>">
                  <i class="fa fa-calendar fa-lg"></i>  ইভেন্ট
                  </a>
                </li>
                 <li>
                  <a href="<?php echo base_url('Focus_event/focus_event_list')?>">
                  <i class="fa fa-bookmark fa-lg"></i> ফোকাস ইভেন্ট
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url('Leaflet/leaflet_list')?>">
                  <i class="fa fa-list fa-lg"></i> লিফলেট
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Next_event/next_event_list')?>">
                  <i class="fa fa-bullhorn fa-lg"></i> পরবর্তী ইভেন্ট
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Poster/poster_list')?>">
                  <i class="fa fa-camera fa-lg"></i>পোস্টার
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url('dashboard/users')?>">
                  <i class="fa fa-users fa-lg"></i> িউজার
                  </a>
                </li>


                <li>
                  <a href="<?php echo base_url('dashboard/donate')?>">
                  <i class="fa fa-usd fa-lg"></i> ডোনেশন
                  </a>
                </li>


            </ul>
     </div>
</div>