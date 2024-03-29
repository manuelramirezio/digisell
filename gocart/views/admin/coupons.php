<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_coupon');?>');
			}
		</script>
		
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success" style="float:right;" href="<?php echo site_url($this->config->item('admin_folder').'/coupons/form'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_new_coupon');?></a>				
			</div>
		</div>
		</br>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('coupons') ?>
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
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th><?php echo lang('code');?></th>
								<th><?php echo lang('usage');?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php echo (count($coupons) < 1)?'<tr><td style="text-align:center;" colspan="3">'.lang('no_coupons').'</td></tr>':''?>
							<?php foreach ($coupons as $coupon):?>
								<tr>
									<td><?php echo  $coupon->code; ?></td>
									<td>
										<?php echo  $coupon->num_uses ." / ". $coupon->max_uses; ?>
									</td>
									<td>
										<div class="btn-group" style="float:right;">
											<a class="btn btn-primary" href="<?php echo site_url($this->config->item('admin_folder').'/coupons/form/'.$coupon->id); ?>"><i class="icon-pencil"></i> <?php echo lang('edit');?></a>
											<a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/coupons/delete/'.$coupon->id); ?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

			<!-- /panel body -->
		</div>

		
	</div>
</div>