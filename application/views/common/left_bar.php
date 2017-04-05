<?php include('functions.php');?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="<?php echo current_controller('dashboard') ? "active ": "";?> ">
                <a href="<?php echo base_url('index.php/dashboard'); ?>">
                	<i class="fa fa-share"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo current_controller('customers') ? "active treeview": "";?>">
                <a href="<?php echo base_url('index.php/customers'); ?>"> 
                    <i class="fa fa-share"></i> 
                    <span>Customers</span> 
                </a> 
            </li>
            <?php if($user_info['username']=='superadmin'){?>
            <li class="<?php echo current_controller('users') ? "active treeview": "";?>">
                <a href="<?php echo base_url('index.php/users'); ?>"> 
                    <i class="fa fa-share"></i> 
                    <span>Users</span> 
                </a> 
            </li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
