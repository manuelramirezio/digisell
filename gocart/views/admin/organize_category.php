<div class="row">
	<div class="col-md-12">
		

		<div class="alert alert-info">
			<?php echo lang('drag_and_drop');?>
		</div>
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title ">
					<?php echo lang('organize') ?>
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
								<th><?php echo lang('sku');?></th>
								<th><?php echo lang('name');?></th>
								<th><?php echo lang('price');?></th>
								<th><?php echo lang('sale');?></th>
							</tr>
						</thead>
						<tbody id="category_contents">
							<?php foreach ($category_products as $product):?>
								<tr id="product-<?php echo $product->id;?>">
									<td><?php echo $product->sku;?></td>
									<td><?php echo $product->name;?></td>
									<td><?php echo format_currency($product->price);?></td>
									<td><?php echo format_currency($product->saleprice);?></td>
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
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
	create_sortable();
});

// Return a helper with preserved width of cells
var fixHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};

function create_sortable()
{
	$('#category_contents').sortable({
		scroll: true,
		helper: fixHelper,
		axis: 'y',
		update: function(){
			save_sortable();
		}
	});	
	$('#category_contents').sortable('enable');
}

function save_sortable()
{
	serial=$('#category_contents').sortable('serialize');

	$.ajax({
		url:'<?php echo site_url($this->config->item('admin_folder').'/categories/process_organization/'.$category->id);?>',
		type:'POST',
		data:serial
	});
}
//]]>
</script>