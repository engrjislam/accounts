<?php include('upper.php');?>
    <section class="content-header">
      <h1> Customer Detail</h1>
      <ol class="breadcrumb">
        <li><a href="#"> Customers </a></li>
        <li class="active">Customer Detail</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content"> 
      
      <!-- Small boxes (Stat box) -->
      <?php 
		  if(isset($customer_info) && $customer_info != NULL) {
			  foreach($customer_info as $customer) {
				  // do not anything
			  }
		  }
		  if(isset($countries) && $countries != NULL) {
			  foreach($countries as $country) {
				  // do not anything
				  if($country['country_id'] == $customer['country_id']){
					$customer_country = $country['countries_name'];
					break;
				  }
			  }
		  }
		  //var_dump($customer);
		  //die();
	  ?>
      
      <div class="body_contener_box">
        <div class="transactions_form">
            <table cellspacing="0" width="100%" align="center" class="ex1">
              <tr>
                <td colspan="" width="150" align="right">First Name </td>
                <td colspan=""><?php echo isset($customer['first_name'])? $customer['first_name']:'';?></td>
                <td width="150" colspan="" align="right">Last Name </td>
                <td colspan=""><?php echo isset($customer['last_name'])? $customer['last_name']:'';?></td>
              </tr>
              <tr>
              	<td width="150" colspan="" align="right">Surname </td>
                <td colspan=""><?php echo isset($customer['surname'])? $customer['surname']:'';?></td>
                <td width="150" colspan="" align="right">Sex </td>
                <td><?php echo isset($customer['sex'])? $customer['sex']=='F'?'Female':'Male':'';?></td>
              </tr>
              <tr>
              	<td width="150" colspan="" align="right">Email </td>
                <td><?php echo isset($customer['email'])? $customer['email']:'';?></td>
    			<td width="150" colspan="" align="right">Fax </td>
                <td><?php echo isset($customer['fax'])? $customer['fax']:'';?></td>
              </tr>
              <tr>
                <td width="150" colspan="" align="right">Company </td>
                <td> <?php echo isset($customer['company'])? $customer['company']:'';?></td>
                <td width="150" colspan="" align="right">Website </td>
                <td> <?php echo isset($customer['website'])? $customer['website']:'';?></td>
              </tr>
              <tr>
                <td width="150" colspan="" align="right">Mobile </td>
                <td><?php echo isset($customer['mobile'])? $customer['mobile']:'';?></td>
                <td width="150" colspan="" align="right">Telephone </td>
                <td><?php echo isset($customer['telephone'])? $customer['telephone']:'';?></td>
              </tr>
              
              <tr>
              	<td width="150" colspan="" align="right">Skype </td>
                <td><?php echo isset($customer['skype'])? $customer['skype']:'';?></td>
                <td width="150" colspan="" align="right">Status </td>
                <td><?php echo isset($customer['status'])? ($customer['status']=='Y'? 'Active':'Inactive') : '';?></td>
              </tr>
              <tr>
              	<td width="150" colspan="" align="right">Address </td>
                <td><?php echo isset($customer['address'])? $customer['address']:'';?></td>
              	<td width="150" colspan="" align="right">City </td>
                <td><?php echo isset($customer['city'])? $customer['city']:'';?></td>
              </tr>
              <tr>
              	<td width="150" colspan="" align="right">State </td>
                <td><?php echo isset($customer['state'])? $customer['state']:'';?></td>
                <td width="150" colspan="" align="right">Country </td>
                <td><?php echo isset($customer['country_id'])? $customer_country :'';?></td>
              </tr>
              <tr>
                 <td colspan="6">
                   <a href="<?php echo base_url('index.php/customers'); ?>"><button class="btn btn-success" type="button">Customers List</button></a>
                   <?php if($user_info['username']=='superadmin'){ ?>
                   		<a href="<?php echo base_url('index.php/customers/edit_customer/'.$customer['customer_id']); ?>"><button class="btn btn-success" type="button" style="float:right">Edit This Customer</button></a>
                   <?php } ?>
                 </td>
              </tr>
             </table>
             </td>
           </tr>
         </table>
        </div>
      </div>
      
      <!-- /.row (main row) --> 
      
    </section>
    <!-- /.content -->
    <?php include('lower.php');?>