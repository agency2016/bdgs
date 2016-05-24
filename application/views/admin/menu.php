<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<script src="<?php echo base_url('resources/js/tinymce.min.js'); ?>"></script>

  <script>
  
  tinymce.init({
  selector: '.textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
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
       $('.trumbo').trumbowyg();
    var dateToday = new Date();
    $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    });
    });
  </script>
<div class="nav-side-menu">
   
   
        <div class="menu-list">
  
            <ul id="li" class="menu-content list list-unstyled">
                <li>
                  <a href="<?php echo base_url('dashboard')?>">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li>
                      <a href="<?php echo base_url('dashboard/about-us')?>">
                  <i class="fa fa-lg fa-smile-o"></i> About us
                  </a>
                  </li>
                 <li>
                  <a href="<?php echo base_url('dashboard/analysis')?>">
                  <i class="fa fa-lg fa-signal"></i> Analysis
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Banner/banner_list')?>">
                    <i class="fa fa-lg  fa-picture-o"></i> Banner
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Centrl/centrl_list')?>">
                  <i class="fa fa-lg fa-wrench"></i> Central Committee
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Constitution/c_list')?>">
                  <i class="fa fa-users fa-lg"></i> Constitution
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Contact/c_list')?>">
                  <i class="fa fa-envelope-o fa-lg"></i> Contact Us
                  </a>
                </li>
                 <li>
                  <a href="<?php echo base_url('Event/event_list')?>">
                  <i class="fa fa-calendar fa-lg"></i>  Event
                  </a>
                </li>
                 <li>
                  <a href="<?php echo base_url('Focus_event/focus_event_list')?>">
                  <i class="fa fa-bookmark fa-lg"></i> Focus Event
                  </a>
                </li>
                
                <li>
                  <a href="<?php echo base_url('Leaflet/leaflet_list')?>">
                  <i class="fa fa-list fa-lg"></i> Leaf let
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Next_event/next_event_list')?>">
                  <i class="fa fa-bullhorn fa-lg"></i> Next Event
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('Poster/poster_list')?>">
                  <i class="fa fa-camera fa-lg"></i> Poster
                  </a>
                </li>
                
                <li>
                  <a href="<?php echo base_url('dashboard/users')?>">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
                
               
                <li>
                  <a href="<?php echo base_url('dashboard/donate')?>">
                  <i class="fa fa-usd fa-lg"></i> Donate
                  </a>
                </li>
              
               
            </ul>
     </div>
</div>