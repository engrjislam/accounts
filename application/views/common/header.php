<!-- header logo: style can be found in header.less -->
<header class="main-header">
	<!-- Logo -->
    <a href="<?php echo base_url();?>" target="_blank" class="logo"><?php echo $web_info['com_name'];?></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation"> 
        <!-- Sidebar toggle button--> 
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            
                <!-- Notifications: style can be found in dropdown.less --> 
                
                <!-- Tasks: style can be found in dropdown.less --> 
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu"> 
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    	<img src="<?php echo base_url();?>asset/dist/img/avatar5.png" class="user-image" alt="User Image"/> 
                        <span class="hidden-xs"><?php echo $user_info['fullname']; ?> </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image --> 
                        
                        <!-- Menu Body --> 
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
                            <div class="pull-right"> <a href="<?php echo base_url('index.php/login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a> </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>