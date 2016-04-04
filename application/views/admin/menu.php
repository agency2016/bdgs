
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?php echo base_url('dashboard')?>">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/users')?>">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Events <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="<?php echo base_url('dashboard/event')?>">Event</a></li>
                    <li><a href="#">Event Image</a></li>
                    <li><a href="#">Event Video</a></li>
                   
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Focus Events <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>Focus Event</li>
                  <li>Focus Event Image</li>
                  
                </ul>
                  <li>
                  <a href="<?php echo base_url('dashboard/next_event')?>">
                  <i class="fa fa-user fa-lg"></i> Next Event
                  </a>
                  </li>
                 <li>
                  <a href="<?php echo base_url('dashboard/contact_us')?>">
                  <i class="fa fa-user fa-lg"></i> Contact Us
                  </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url('dashboard/about-us')?>">
                  <i class="fa fa-user fa-lg"></i> About us
                  </a>
                  </li>
                 <li>
                  <a href="<?php echo base_url('dashboard/leaflet')?>">
                  <i class="fa fa-users fa-lg"></i> Leaf let
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/postar')?>">
                  <i class="fa fa-users fa-lg"></i> Poster
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/donate')?>">
                  <i class="fa fa-users fa-lg"></i> Donate
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/constitution')?>">
                  <i class="fa fa-users fa-lg"></i> Constitution
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/central_committee')?>">
                  <i class="fa fa-users fa-lg"></i> Central Committee
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/banner')?>">
                  <i class="fa fa-users fa-lg"></i> Banner
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('dashboard/analysis')?>">
                  <i class="fa fa-users fa-lg"></i> Analysis
                  </a>
                </li>
            </ul>
     </div>
</div>