<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	Manage Products &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;Add New Product
		    	<span class="panel-options">
					<a href="#" class="panel-minimize">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a href="#" class="panel-close">
						<i class="fa fa-times"></i>
					</a>
				</span>
		    </h3>
		  </div>
		  <div class="panel-body">
		    <form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Product Public Status</label>
			    <div class="col-sm-4">
			      <?php 
			      	if($product)
			      	{
			      		$selected = $product->product_status;
			      	} 
			      	else
			      	{
			      		$selected = '';
			      	}
			      	$status =array(
			      					'public'	=>	($selected=='public') ? '* This is a public viewable product' : 'This is a public viewable product.',
			      					'private'	=>	($selected=='private') ? '* This is a private product' : 'This is a private product'
			      					);
			      	echo form_dropdown('status', $status, $selected, 'class="form-control drp"');
			      ?>

			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-5">
			      <input type="text"  name="product_name" value='<?php echo ($product) ? set_value('product_name', $product->product_name) : '' ?>' id="product_name" class="form-control" placeholder="Product Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Short Product Summary</label>
			    <div class="col-sm-5">
			      <textarea name="short_summary" id="short_summary" class="form-control drp" cols="3" rows="3">
			      	<?php echo ($product) ? set_value('short_summary', html_entity_decode($product->product_summary)) : '' ?>
			      </textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Full Product Description</label>
			    <div class="col-sm-5">
			      <textarea name="full_desc" id="full_desc" class="form-control drp" cols="3" rows="6">
			      	<?php echo ($product) ? set_value('full_desc', html_entity_decode($product->product_description)) : '' ?>
			      </textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-5">
			      <button type="submit" class="btn btn-success pull-right"><?php echo ($product) ? 'Update' : 'Add Product' ?></button>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-md-8">
			  		<div class="table-responsive">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class="active">
			  						<th>
			  							<span class='text-danger'>Product Licencing</span> &nbsp;Choose a Licensing Type
			  						</th>
			  						<td align='center'>
			  							<span class='text-danger'><b>Secret Pass-Phrase</b></span>
			  						</td>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							<input type="radio" name="license_type" id="license_type">
			  							This Product Has no License
			  						</td>
			  						<td align='center'>-</td>
			  					</tr>
			  					<?php foreach($licensing_types as $ltype){ ?>
									<tr>
										<td>
											<input type="radio" name="license_type" id="license_type">
											<?php echo $ltype->name; ?>
										</td>
										<td align='center'>-</td>
									</tr>
			  					<?php } ?>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered" >
			  				<thead>
			  					<tr class="active">
			  						<th>
			  							<span class='text-danger'>Downloads</span> &nbsp;Available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
		  						<?php foreach($downloads as $download){ ?>
									<tr>
										<td>
											<?php
												$data = array(
																	'name'        => 'dwn[]',
																	'id'		  => 'dwn',
																	'value'       => $download->did,
																	'checked'     => false,
																	'class'       => 'cb1',
			    											 );
												echo form_checkbox($data); 
											?>	
				  							<?php echo $download->file_name.nbs(1); ?>
				  							
				  						</td>
				  					</tr>
			  					<?php } ?>	
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Updates</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Upgrade Packages</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Support Packages</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Agreements</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<?php foreach($agreements as $agreement) { ?>
			  					<tr>
			  						<td>
			  							<?php
			  							if($product)
			  							{
			  								$i=0;
			  								$agrement = $product->agreement_array;
			  								$agrement = unserialize(html_entity_decode($agrement));
			  								foreach($agrement as $agr)
			  								{
			  									$data = array(
																'name'        => 'dwn[]',
																'id'		  => 'dwn',
																'value'       => $agreement->agreement_id,
																'checked'     => ($agreement->agreement_id==$agr) ? true : false,
																'class'       => 'cb1',
		    											 );
												echo form_checkbox($data);
			  									$i=$i+1;
			  								}
										}
										else
										{
											$data = array(
																'name'        => 'dwn[]',
																'id'		  => 'dwn',
																'value'       => $agreement->agreement_id,
																'checked'     => false,
																'class'       => 'cb1',
		    											 );
												echo form_checkbox($data);
										}	 
										?>
										<?php echo $agreement->agreement_name; ?>	
			  						</td>
			  					</tr>
			  					<?php } ?>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Addons</span>&nbsp;available for this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>
			  							content to be fixed as soon as possible.
			  						</td>
			  					</tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="table-responsive col-md-5">
			  			<table class="table table-bordered">
			  				<thead>
			  					<tr class='active'>
			  						<th>
			  							<span class='text-danger'>Coupon Code discounts</span>&nbsp;available to this product
			  						</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  				<tr><td>
			  					<?php  
			  						if($product)
			  						{
			  							$c=0;
			  							$copn = $product->coupon_array;
			  							$copn = unserialize(html_entity_decode($copn));
			  							foreach($copn as $cop)
			  							{
			  								$c++;
			  							}
			  							for($i=0; $i<$c; $i++)
			  							{
			  								echo $copn[$i].nbs(2);
			  							}
			  							echo br(1);
			  							
		  								foreach($coupons as $coupon)
			  							{

			  								$data = array(
																	'name'        => 'dwn[]',
																	'id'		  => 'dwn',
																	'value'       => $coupon->coupon_code,
																	'checked'     => false,
																	'class'       => 'cb1',
			    											 );
											echo form_checkbox($data);
											echo $coupon->coupon_code;
			  							}
			  						}
			  						else
			  						{
			  							$i=0;
			  							foreach($coupons as $coupon)
			  							{
			  								$data = array(
																'name'        => 'dwn[]',
																'id'		  => 'dwn',
																'value'       => $coupon->coupon_code,
																'checked'     => false,
																'class'       => 'cb1',
		    											 );
											echo form_checkbox($data);
											echo $coupon->coupon_code.nbs(2);
											$i++;
											if($i>2)
											{
												echo br(1);
											}
			  							}
			  						}
			  					?>
			  					</td></tr>
			  				</tbody>
			  			</table>
			  		</div>
			  	</div>
			  		<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-5">
					      <button type="submit" class="btn btn-success pull-right">Add Product</button>
					    </div>
					</div>
			  </div>
			</form>
		  </div>
		</div>
	</div>
</div>
<?php include('partials_admin/footer.php'); ?>