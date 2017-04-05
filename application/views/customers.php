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
    $('#customers').dataTable( {
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
		"language": {
            "lengthMenu": "Show _MENU_ customers per page",
			"searchPlaceholder": "Search",
            "zeroRecords": "Sorry, no customer found",
            "info": "Showing _START_ to _END_ of _TOTAL_ customers",
            "infoEmpty": "No customer found",
            "infoFiltered": "(from _MAX_ customers)"
        },
		"pagingType" : "full_numbers",
		"aaSorting" : []
    } );
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
  <section class="content-header">
	<h1>Customers</h1>
    <ol class="breadcrumb">
    <li><a href="#">Customers</a></li>
    <li class="active">Customers List</li>
    </ol>
</section>
    <section class="content">
    <div class="body_top_list">
    <ul>
        <li><a href="<?php echo base_url('index.php/customers/add_customer'); ?>"><button class="btn btn-info" type="button"> <strong>+ Add Customer</strong> </button></a></li>
    </ul>
</div>
      <div class="body_contener_box">
        <div class="">
          <table id="customers" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Skype</th>
                <th>Telephone</th>
                <th>Mobile </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
				if(!empty($customers_list)) {
					foreach ($customers_list as $customers) {
			?>
				<tr>
					<td><?php echo $customers['company'];?></td>
					<td><?php echo $customers['surname']? $customers['surname']: $customers['first_name'].' '.$customers['last_name'];?></td>
					<td><?php echo $customers['email'];?></td>
					<td><?php echo strlen(trim($customers['skype'])) > 0 ? $customers['skype']: "&nbsp;";?></td>
                    <td><?php echo $customers['telephone'];?></td>
                    <td><?php echo $customers['mobile'];?></td>
					<td>
                    <?php if($user_info['username']=='superadmin'){ ?>  
                    	&nbsp;<a href="<?php echo base_url('index.php/customers/edit_customer/'.$customers['customer_id']); ?>" title="Edit"><img src="<?php echo base_url();?>asset/dist/img/edit.png" alt="Edit" width="16" height="16" border="0"/></a>
                    	&nbsp;<a href="<?php echo base_url('index.php/customers/delete_customer/'.$customers['customer_id']); ?>" title="Delete" onClick="return confirm(&#039;Are you sure you want to delete this?&#039;);"><img src="<?php echo base_url();?>asset/dist/img/delete.png" alt="Delete" width="16" height="16" border="0"/></a>
                    <?php } ?>
                    &nbsp;<a href="<?php echo base_url('index.php/customers/detail_customer/'.$customers['customer_id']); ?>" title="Details"><img src="<?php echo base_url();?>asset/dist/img/detail.png" alt="Move" width="16" height="16" border="0"/></a>
                	</td>
				</tr>
				<?php
				 }
				}
				?>
           </tbody>
          </table>
        </div>
      </div>
    </section>
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