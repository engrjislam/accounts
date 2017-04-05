	<meta charset="UTF-8">
    <title><?php echo $web_info['com_name'];?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.1 -->
    <link href="<?php echo base_url(); ?>asset/dist/css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.2.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>asset/dist/css/style_3.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url(); ?>asset/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>asset/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url(); ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>asset/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    
    <!-- fancybox-->
	<link href="<?php echo base_url(); ?>asset/fancybox/source/jquery.fancybox.css" rel="stylesheet" media="screen" type="text/css" />
    
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/fancybox/source/jquery.fancybox.pack.js"></script>
    <!-- /fancybox-->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- datatable plugings -->
    <link href="<?php echo base_url(); ?>asset/dist/dataTables/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>asset/dist/dataTables/css/dataTables.jqueryui.css" rel="stylesheet" type="text/css" />
    
    <!--script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery-1.11.1.min.js" type="text/javascript"></script-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>asset/dist/dataTables/js/dataTables.jqueryui.js" type="text/javascript"></script>
    <!--/datatable plugings -->
    <style>
	.left {
		float: left;
		width: 50%;
	}
	.right {
		float: right;
		width: 50%;
	}
	.group:after {
		content:"";
		display: table;
		clear: both;
	}
	img {
		max-width: 100%;
		height: auto;
	}
	@media screen and (max-width: 480px) {
		.left, 
		.right {
			float: none;
			width: auto;
		}
	}
	</style>
    <script>	
		// Datepicker Popups calender to Choose date.
		$(function() {
			$("#date").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#invoice_date").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#due_date").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#fromDate").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#toDate").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#delevary_date").datepicker({ dateFormat: 'yy-mm-dd' });
			$("a.dropdown-toggle").mouseover(function(){
				  $("a.dropdown-toggle").trigger('click');
			});
		});	
    </script>
    
    <script>
		$(document).ready(function() {
	
		/* This is basic - uses default settings */
		
		$("a#single_image").fancybox();
		
		/* Using custom settings */
		
		$("a#inline").fancybox({
			'hideOnContentClick': true
		});
	
		/* Apply fancybox to multiple items */
		
		$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
		});
		
	});	
	</script>