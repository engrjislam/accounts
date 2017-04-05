<?php include('upper.php');?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Users</h1>
          <ol class="breadcrumb">
              <li><a href="#">Users</a></li>
              <li class="active">Add User</li>
          </ol>
        </section>
        <?php 
		  if(isset($user_list) && $user_list != NULL) {
			  foreach($user_list as $user) {
			  }
		  };
	  	?>
        <!-- Main content -->
        <section class="content">
			<div class="body_contener_box">
                    <div class="transactions_form">
                    	<form action="<?php echo base_url('index.php/users'). (isset($user) ? '/edit_user/'.$user['id'] : '/add_user'); ?>" method="post">
                    		<table cellspacing="0" width="100%" align="center" class="ex1">
                            	<tr>
                                	<th>Full Name</th>
                                    <th>UserName</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td align="center"><input class="form-control" type="text" name="user[full_name]" value="<?php echo isset($user['full_name'])? $user['full_name']:'';?>" placeholder="Full Name" required/></td>
                                    <td align="center"><input type="text" <?php echo isset($user['user_name'])? "readonly":"";?> class="form-control" name="user[user_name]" value="<?php echo isset($user['user_name'])? $user['user_name']:'';?>" placeholder="UserName" required/></td>
                                    <td align="center"><input class="form-control" type="text" name="user[password]" value="<?php echo isset($user['password'])? $user['password']:'';?>" placeholder="Password" required/></td>
                                    <td align="center"><input class="form-control" type="text" name="user[email]" value="<?php echo isset($user['email'])? $user['email']:'';?>" placeholder="Email"/></td>
                                    <td><button class="btn btn-info" type="submit" ><strong><?php echo isset($user)? 'Edit':'ADD';?></strong></button></td>
                                    </tr>
                            </table>  
                         </form>
                    </div>  
            </div>
          <!-- /.row (main row) -->
        </section><!-- /.content -->
<?php include('lower.php');?>