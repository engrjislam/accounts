<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><head>
<meta charset="UTF-8">
<title><?php echo $web_info['com_name'];?></title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- Bootstrap 3.3.1 -->
<link href="<?php echo base_url(); ?>asset/dist/css/style_1.css" rel="stylesheet" type="text/css" />
<!-- FontAwesome 4.2.0 -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="<?php echo base_url(); ?>asset/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<!-- datatable plugings -->
<link href="<?php echo base_url(); ?>asset/dist/dataTables/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>asset/dist/dataTables/css/dataTables.jqueryui.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/dataTables.jqueryui.js" type="text/javascript"></script>
<!--/datatable plugings -->

<script>
	$(document).ready(function() {
		// 
		$("a.dropdown-toggle").mouseover(function(){
			  $("a.dropdown-toggle").trigger('click');
		});
	} );
</script>
<style>
	.h3, .p, h4 {
		padding-left: 30px;
	}
    ol, ul {
      padding-left: 75px;
    }
</style>
</head>

<body class="skin-blue">
<div class="wrapper">
  <?php include_once('common/header.php')?>
  <?php include_once('common/left_bar.php');?>
  <div class="content-wrapper" style="min-height: 585px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"> Dashboard</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) --> 
      <h3 class="h3">Instructions:</h3>
      <hr></hr>

      <p class="p">There are two different sections. They are - </p>
      <ol>
        <li>Customers ; and</li>
        <li>Users</li>
      </ol>

      <h4>Customers</h4>
      <p class="p">This sub section includes - </p>
      <ul>
        <li>List of customers with pagination,</li>
        <li>Add a new customer,</li>
        <li>Edit a customer,</li>
        <li>View details of a customer,</li>
        <li>Delete a customer from the list; and</li>
        <li>Search customers.</li>
      </ul>

      <h4>Users</h4>
      <p class="p">This sub section includes (if you are superadmin) - </p>
      <ul>
        <li>List of users with pagination,</li>
        <li>Add a new user,</li>
        <li>Edit a user,</li>
        <li>View details of a user,</li>
        <li>Delete a user from the list; and</li>
        <li>Search user.</li>
      </ul>
      <strong class="p">Your login attempts are keep tracking and stored into the database (see table login_history).</strong>
      <p class="p"><strong>N.B:</strong> You can also reset your password. Your login credentials will sent to your email.</p>
      <!-- /.row (main row) --> 
    </section>
    <!-- /.content -->
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js" type="text/javascript"></script>
<!-- iCheck --> 
<script src="<?php echo base_url(); ?>asset/plugins/iCheck/icheck.min.js" type="text/javascript"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) --> 
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js" type="text/javascript"></script>
</body>
</html>