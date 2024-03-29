<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
			function areyousure()
			{
				return confirm('<?php echo lang('confirm_delete_giftcard');?>');
			}
		</script>

		<div class="row">
			<div class="btn-group" style="float:right">

				<?php if ($gift_cards['enabled']):?>

					<a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/giftcards/form'); ?>"><i class="icon-plus-sign"></i> <?php echo lang('add_giftcard')?></a>

					<a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/giftcards/settings'); ?>"><i class="icon-cog"></i> <?php echo lang('settings');?></a>

					<a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/giftcards/disable'); ?>"><i class="icon-ban-circle icon-white"></i> <?php echo lang('disable_giftcards');?></a>

				<?php else: ?>
					<a class="btn btn-primary" href="<?php echo site_url($this->config->item('admin_folder').'/giftcards/enable'); ?>"><i class="icon-ok icon-white"></i> <?php echo lang('enable_giftcards');?></a>
				<?php endif; ?>
			</div>
		</div>
		<br>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('giftcards') ?>
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
					<table class="table table-striped">
						<thead>
							<tr>
								<th><?php echo lang('code');?></th>
								<th><?php echo lang('to');?></th>
								<th><?php echo lang('from');?></th>
								<th><?php echo lang('total');?></th>
								<th><?php echo lang('used');?></th>
								<th><?php echo lang('remaining');?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php echo (count($cards) < 1)?'<tr><td style="text-align:center;" colspan="7">'.lang('no_giftcards').'</td></tr>':''?>
							<?php foreach ($cards as $card):?>
								<tr>
									<td><?php echo  $card['code']; ?></td>
									<td><?php echo  $card['to_name']; ?></td>
									<td><?php echo  $card['from']; ?></td>
									<td><?php echo (float) $card['beginning_amount'];?></td>
									<td><?php echo (float) $card['amount_used']; ?></td>
									<td><?php echo (float) $card['beginning_amount'] - (float) $card['amount_used']; ?></td>
									<td>
										<a class="btn btn-danger" style="float:right;" href="<?php echo site_url($this->config->item('admin_folder').'/giftcards/delete/'.$card['id']); ?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
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