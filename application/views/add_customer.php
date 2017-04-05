<?php include('upper.php');?>
    <section class="content-header">
      <h1> Add Customer </h1>
      <ol class="breadcrumb">
        <li><a href="#"> Customers </a></li>
        <li class="active">Add Customer</li>
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
		  //var_dump($customer);
		  //die();
	  ?>
      
      <div class="body_contener_box">
        <div class="transactions_form">
          <form action="<?php echo base_url('index.php/customers').(isset($customer) ? '/update_customer/'.$id : '/add_customer_data');?>" method="post">
            <table cellspacing="0" width="100%" align="center" class="ex1">
              <tr>
                <td colspan="" width="100" align="right">Name </td>
                <td colspan=""><input type="text" name="customer[first_name]" placeholder="Name" value="<?php echo isset($customer['first_name'])? $customer['first_name']:'';?>" class="form-control" required/>
                <td width="100" colspan="" align="right">Sex </td>
                <td colspan="">
                	<select id="customer_sex" name="customer[sex]" class="form-control" >
                    	<option value="" >Sex</option>
                        <option value="F" <?php echo isset($customer['status']) && $customer['sex']=='F' ? 'selected':'';?> >Female</option>
                        <option value="M" <?php echo isset($customer['status']) && $customer['sex']=='M' ? 'selected':'';?>>Male</option>
                    </select>
                </td>
              </tr>
              <?php /*?><tr>
              	<td width="100" colspan="" align="right">Surname </td>
                <td colspan=""><input type="text" name="customer[surname]" placeholder="Surname" value="<?php echo isset($customer['surname'])? $customer['surname']:'';?>" class="form-control" /></td>
    			<td width="100" colspan="" align="right">Sex </td>
                <td colspan="">
                	<select id="customer_sex" name="customer[sex]" class="form-control" >
                    	<option value="" >Sex</option>
                        <option value="F" <?php echo isset($customer['status']) && $customer['sex']=='F' ? 'selected':'';?> >Female</option>
                        <option value="M" <?php echo isset($customer['status']) && $customer['sex']=='M' ? 'selected':'';?>>Male</option>
                    </select>
                </td>
              </tr><?php */?>
              <tr>
              	<td width="100" colspan="" align="right">Email </td>
                <td><input type="text" id="customer_email" name="customer[email]" value="<?php echo isset($customer['email'])? $customer['email']:'';?>" placeholder="Email" class="form-control" /></td>
    			<td width="100" colspan="" align="right">Fax </td>
                <td><input type="text" id="customer_fax" name="customer[fax]" value="<?php echo isset($customer['fax'])? $customer['fax']:'';?>" placeholder="Fax" class="form-control" /></td>
              </tr>
              <tr>
              	<td width="100" colspan="" align="right">Company </td>
                <td> <input type="text" id="customer_company" name="customer[company]" value="<?php echo isset($customer['company'])? $customer['company']:'';?>" placeholder="Company" class="form-control" /></td>
                <td width="100" colspan="" align="right">Website </td>
                <td> <input type="text" id="customer_website" name="customer[website]" value="<?php echo isset($customer['website'])? $customer['website']:'';?>" placeholder="Website" class="form-control" /></td>
              </tr>
              <tr>
                <td width="100" colspan="" align="right">Mobile </td>
                <td><input type="text" id="customer_mobile" name="customer[mobile]" value="<?php echo isset($customer['mobile'])? $customer['mobile']:'';?>" placeholder="Mobile" class="form-control" /></td>
                <td width="100" colspan="" align="right">Telephone </td>
                <td><input type="text" id="customer_telephone" name="customer[telephone]" value="<?php echo isset($customer['telephone'])? $customer['telephone']:'';?>" placeholder="Telephone" class="form-control" /></div></td>
              </tr>
              <tr>
                <td width="100" colspan="" align="right">Skype </td>
                <td><input type="text" id="customer_skype" name="customer[skype]" value="<?php echo isset($customer['skype'])? $customer['skype']:'';?>" placeholder="Skype" class="form-control" /></td>
                <td width="100" colspan="" align="right">Status </td>
                <td>
                	<select id="customer_status" name="customer[status]" class="form-control" >
                    	<option value="" >Status</option>
                        <option value="Y" <?php echo isset($customer['status']) && $customer['status']=='Y' ? 'selected':'';?> >Active</option>
                        <option value="N" <?php echo isset($customer['status']) && $customer['status']=='N' ? 'selected':'';?>>Inactive</option>
                    </select>
                 </td>
              </tr>
              <tr>
    			<td width="100" colspan="" align="right">Address </td>
                <td><input type="text" id="customer_address" name="customer[address]" value="<?php echo isset($customer['address'])? $customer['address']:'';?>" placeholder="Address" class="form-control" /></td>
              	<td width="100" colspan="" align="right">City </td>
                <td><input type="text" id="customer_city" name="customer[city]" value="<?php echo isset($customer['city'])? $customer['city']:'';?>" placeholder="City" class="form-control" /></td>
    		   </tr>
               <tr>
                <td width="100" colspan="" align="right">State </td>
                <td><input type="text" id="customer_state" name="customer[state]" value="<?php echo isset($customer['state'])? $customer['state']:'';?>" placeholder="State" class="form-control" /></td>
                <td width="100" colspan="" align="right">Country </td>
                <td>
                	<select id="customer_country" name="customer[country_id]" class="form-control" >
    					<option value="" >Country</option>
                        <?php
                            $return = '';
                            foreach($countries as $country) {
                                
								if(!isset($customer['country_id'])) {
                                    $selected = '';
                                } else {
                                    $selected = ($country['country_id'] == $customer['country_id']) ? 'selected' : '';
                                }
                          
                                $return .='<option value="' . $country['country_id'] . '"' . $selected . '>' . $country['countries_name'] . "</option>\n";
                            }
                            echo $return;
                        ?>
                	</select></td>
              </tr>
              <tr>
                 <td colspan="6">
                   <a href="<?php echo base_url('index.php/customers'); ?>"><button class="btn btn-success" type="button">Cancel</button></a>
                   <button style="float:right;" class="btn btn-success" type="submit">Save Customer</button>
                 </td>
              </tr>
             </table>
             </td>
           </tr>
         </table>
          </form>
        </div>
      </div>
      
      <!-- /.row (main row) --> 
      
    </section>
    <!-- /.content -->
    <?php include('lower.php');?>