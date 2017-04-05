<html>
<head>
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
    $('#bills').dataTable();
	// 
	$("a.dropdown-toggle").mouseover(function(){
		  $("a.dropdown-toggle").trigger('click');
	});
} );
</script>
</head>

<body class="skin-blue">
<div class="wrapper">
<?php include_once('common/header.php')?>
<?php include_once('common/left_bar.php');?>
<div class="content-wrapper" style="min-height: 585px;"> 
  
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Users </h1>
    <ol class="breadcrumb">
      <li><a href="#"> Users</a></li>
      <li class="active">Users List</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
  
  <!-- Small boxes (Stat box) -->
  
  <div class="body_top_list">
    <ul>
      <li><a href="<?php echo base_url('index.php/users/add_user'); ?>">
        <button class="btn btn-info" type="button"> <strong>+ Add New User</strong> </button>
        </a></li>
    </ul>
  </div>
  <?php 
	if(isset($vendor_info) && $vendor_info != NULL) {
	  foreach($vendor_info as $vendor) {
		  // do not anything
		  $ven[$vendor['vendor_id']] = $vendor;
	  }
	}
	//var_dump($ven);
	//die();
	?>
  <div class="body_contener_box">
    <div class="">
        <table id="bills" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Full Name</th>
              <th>UserName</th>
              <th>Password</th>
              <th>Email</th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
				if(!empty($user_list)) {
				foreach ($user_list as $user) {
			?>
            <tr>
              <td><?php echo $user['full_name'];?></td>
              <td><?php echo $user['user_name'];?></td>
              <td><?php echo $user['password'];?></td>
              <td><?php echo $user['email'];?></td>
              <td>&nbsp;<a href="<?php echo base_url('index.php/users/edit_user/'.$user['id']); ?>" title="Edit"><img src="<?php echo base_url();?>asset/dist/img/edit.png" alt="Edit" width="16" height="16" border="0"/></a> &nbsp;<?php if($user['user_name']!="superadmin"){ ?><a href="<?php echo base_url('index.php/users/delete_user/'.$user['id']); ?>" title="Delete" onClick="return confirm(&#039;Are you sure you want to delete this?&#039;);"><img src="<?php echo base_url();?>asset/dist/img/delete.png" alt="Delete" width="16" height="16" border="0"/></a> <?php } ?>&nbsp;</td>
            </tr>
            <?php
				}
			}
			?>
          </tbody>
        </table>
      </div>
    </div>
    
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