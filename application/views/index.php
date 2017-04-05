<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DataTbles Server Side</title>
<!-- datatable plugings -->
<link href="<?php echo base_url(); ?>asset/dist/dataTables/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>asset/dist/dataTables/css/dataTables.jqueryui.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/dist/dataTables/js/dataTables.jqueryui.js" type="text/javascript"></script>
<!--/datatable plugings -->
<script>
$(document).ready(function() {
    $("#example").dataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/server_processing.php"
    } );
} );
</script>
</head>

<body>

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Skype</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Skype</th>
            </tr>
        </tfoot>
</table>

</body>
</html>