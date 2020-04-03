<div class="container">
    <div class="row">
        <div class="col-md-8 col-xl-8 col-lg-8 col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar_brand_custom" href="<?php echo base_url() ?>">
                            <img id="artgoobi_header_image_logo" class="header_logo_image_text" src="<?php echo base_url() ?>logo.png" height="105"/>
                            <span id="artgoobi_header_image_text" class="header_logo_image_text">Artgoobi</span>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="left_navbar_cusom_width" class="nav navbar-nav">
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li><a href="<?php echo base_url('welcome/about_us'); ?>">About</a></li>
                            <li><a href="<?php echo base_url('welcome/exhibition_list'); ?>">Exhibition</a></li>
                            <li><a href="<?php echo base_url('welcome/event_list'); ?>">Event</a></li>
                            <li><a href="<?php echo base_url('welcome/gallery_list'); ?>">Artgoobi Gallery</a></li>
                            <li><a href="<?php echo base_url('welcome/faq'); ?>">FAQ</a></li>
                            <li><a href="<?php echo base_url('welcome/contact_us'); ?>">Contact Us</a></li>
                        </ul>                        
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="col-md-4 col-xl-4 col-lg-4 col-sm-12">
            <div class="artgoobi_search_box_container">
                <div class="search_box_container_separation">
                    <div class="form-group">
                        <input type="text" class="form-control search_input_style" placeholder="Search" id="artworksearching">
                        <button type="button" class="search_button" onclick="searchArtistArtworks();"><i class="glyphicon glyphicon-search"></i></button> 
                    </div>
                </div>
                <div class="search_box_container_separation">                                    
                    <ul id="top_section_profile_access_desktop" class="top_section_profile_access_desktop_style">
                        <li>
                            <div class="custom_search" onclick="openAdvanceCustomSearch();" title="advance search"><i class="fa fa-search-plus" aria-hidden="true"></i> Custom search</div>
                        </li>
                        <li>                        
                            <?php
                                $user_logged_in = $this->session->userdata('user_logged_in_status');
                                if (isset($user_logged_in) && !empty($user_logged_in)) {
                            ?>
                            <a href="#" data-toggle="modal" data-target="#modal_user_logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            <?php
                            }
                                if (!isset($user_logged_in) && empty($user_logged_in)) {
                            ?>
                                <a href="#" data-toggle="modal" data-target="#modal_userloggin"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Login</a>
                                <!--<a id="signup_link" class="btn btn-default btn-flat btn-xs profile_link_style" data-toggle="modal" data-target="#modal_signup">SIGN UP</a>-->
                            <?php } ?>
                        </li>
                            <?php                                
                                if (isset($user_logged_in) && !empty($user_logged_in)) {
                                    $logged_in_id = $this->session->userdata('user_logged_id');
                            ?>
                        <li style="margin-top: -2px;">
                            <div class="profile_left_panel_desktop_view">
                                <a href="<?php echo base_url() ?>welcome/user_profile">
                                    <img src="<?php echo base_url(); ?>images/default_avater.png" class="user-image" alt="User Image" width="25" title="<?php echo $this->session->userdata('user_logged_name'); ?>">
                                    <span class="text-success bg-success"><?php echo $this->session->userdata('user_logged_name'); ?></span>
                                </a>
                            </div>
                            <div class="profile_left_panel_mobile_view">
                                <a href="javascript:void(0)" onclick="open_artist_profile('<?php echo $logged_in_id; ?>','profile_left_panel_id_section');">
                                    <img src="<?php echo base_url(); ?>images/default_avater.png" class="user-image" alt="User Image" width="25" title="<?php echo $this->session->userdata('user_logged_name'); ?>">
                                    <span class="text-success bg-success"><?php echo $this->session->userdata('user_logged_name'); ?></span>
                                </a>
                            </div>                            
                        </li>
                            <?php } ?>
                        
                        <?php
                        if (!isset($user_logged_in) && empty($user_logged_in)) {
                            ?>
                            <li>
                                <a id="signup_link" href="#" data-toggle="modal" data-target="#modal_signup"><i class="fa fa-sign-in" aria-hidden="true"></i> Signup</a>
                            </li>
                    <?php } ?>                        
                    </ul>
                </div>            
            </div>            
        </div>     
    </div>
</div>
