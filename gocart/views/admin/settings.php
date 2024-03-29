<div class="row">
    <div class="col-md-12">
        <?php echo form_open_multipart(config_item('admin_folder').'/settings','class="form-horizontal"');?>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title ">
                    Settings
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


                    <legend><?php echo lang('shop_details');?></legend>
                    <div class="form-group">
                       <label class="col-sm-2 control-label"><?php echo lang('company_name');?></label>
                       <div class="col-sm-4">
                          <?php echo form_input(array('class'=>'form-control', 'name'=>'company_name', 'value'=>set_value('company_name', $company_name)));?>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo lang('theme');?></label>
                    <div class="col-sm-4">
                       <?php echo form_dropdown('theme', $themes, set_value('theme', $theme), 'class="form-control col-sm-6 drp"');?>
                   </div>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('cart_email');?></label>
                <div class="col-sm-4">
                  <?php echo form_input(array('class'=>'form-control', 'name'=>'email', 'value'=>set_value('email', $email)));?>
              </div>
          </div>                    




          <legend><?php echo lang('ship_from_address');?></legend>
          <div class="form-group">
           <label class="col-sm-2 control-label"><?php echo lang('address1');?></label>
           <div class="col-sm-4">
              <?php echo form_input(array('name'=>'address1', 'class'=>'form-control','value'=>set_value('address1',$address1)));?>
          </div>
      </div>
      <div class="form-group">
       <label class="col-sm-2 control-label"><?php echo lang('address2');?></label>
       <div class="col-sm-4">
          <?php echo form_input(array('name'=>'address2', 'class'=>'form-control','value'=> set_value('address2',$address2)));?>
      </div>
  </div>
  <div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('city');?></label>
   <div class="col-sm-4">
      <?php echo form_input(array('name'=>'city','class'=>'form-control', 'value'=>set_value('city',$city)));?>
  </div>
</div>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('country');?></label>
   <div class="col-sm-4">
      <?php echo form_dropdown('country_id', $countries_menu, set_value('country_id', $country_id), 'id="country_id" class="form-control drp"');?>
  </div>
</div>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('state');?></label>
   <div class="col-sm-4">
      <?php echo form_dropdown('zone_id', $zones_menu, set_value('zone_id', $zone_id), 'id="zone_id" class="form-control drp"');?>
  </div>
</div>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('zip');?></label>
   <div class="col-sm-4">
      <?php echo form_input(array('maxlength'=>'10', 'class'=>'form-control', 'name'=>'zip', 'value'=> set_value('zip',$zip)));?>
  </div>
</div>



<legend><?php echo lang('locale_currency');?></legend>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('locale');?></label>
   <div class="col-sm-4">
      <?php echo form_dropdown('locale', $locales, set_value('locale', $locale), 'class="form-control drp"');?>
  </div>
</div>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('currency');?></label>
   <div class="col-sm-4">
      <?php echo form_dropdown('currency_iso', $iso_4217, set_value('currency_iso', $currency_iso), 'class="form-control drp"');?>
  </div>
</div>





<legend><?php echo lang('security');?></legend>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('admin_folder');?></label>
   <div class="col-sm-4">
      <?php echo form_input(array('name'=>'admin_folder', 'class'=>'form-control','value'=>set_value('admin_folder',$admin_folder)));?>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('ssl_support', '1', set_value('ssl_support',$ssl_support));?> <?php echo lang('ssl_support');?>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('require_login', '1', set_value('require_login',$require_login));?> <?php echo lang('require_login');?>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('new_customer_status', '1', set_value('new_customer_status',$new_customer_status));?> <?php echo lang('new_customer_status');?>
  </div>
</div>




<legend><?php echo lang('package_details');?></legend>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('weight_unit');?></label>
   <div class="col-sm-4">
      <?php echo form_input(array('name'=>'weight_unit', 'class'=>'form-control','value'=>set_value('weight_unit',$weight_unit)));?>    
  </div>
</div>
<div class="form-group">
   <label class="col-sm-2 control-label"><?php echo lang('dimension_unit');?></label>
   <div class="col-sm-4">
      <?php echo form_input(array('name'=>'dimension_unit', 'class'=>'form-control','value'=>set_value('dimension_unit',$dimension_unit)));?>
  </div>
</div>




    <legend><?php echo lang('order_inventory');?></legend>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo lang('order_status');?></th>
                    <th><?php echo lang('order_statuses');?></th>
                    <th style="text-align:right;">
                        
                            <input type="text" value="" class="form-control" id="new_order_status_field" style="margin:0px;" placeholder="<?php echo lang('status_name');?>"/>
                        
                        
                        <button type="button" class="btn" onclick="add_status()"><i class="fa fa-plus"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody id="order_statuses">
                <?php
                $statuses = json_decode($order_statuses, true);

                if(!is_array($statuses))
                {
                    $statuses = array();
                }
                foreach($statuses as $os):?>
                <tr>
                    <td><input type="radio" value="<?php echo htmlentities($os);?>" name="order_status" <?php echo set_radio('order_status', $os, ($os == $order_status)?true:false)?>></td>
                    <td><?php echo htmlentities($os);?></td>
                    <td style="text-align:right;">
                        <button type="button" onclick="if(confirm('<?php echo lang('confirm_delete_order_status');?>')){ delete_status($(this).parent().siblings().first().html()); $(this).parent().parent().remove();}" class="btn btn-danger">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
    <?php echo form_textarea(array('name'=>'order_statuses', 'value'=>set_value('order_statuses',$order_statuses), 'id'=>'order_statuses_json'));?>   
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('inventory_enabled', '1', set_value('inventory_enabled',$inventory_enabled));?> <?php echo lang('inventory_enabled');?>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('allow_os_purchase', '1', set_value('allow_os_purchase',$allow_os_purchase));?> <?php echo lang('allow_os_purchase');?>
  </div>
</div>
    


    <legend><?php echo lang('tax_settings');?></legend>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label"><?php echo lang('tax_address');?></label>
    <div class="col-sm-10">
      <?php $address_options = array('ship'=>lang('shipping_address'), 'bill'=>lang('billing_address'));?>
      <?php echo form_dropdown('tax_address', $address_options, set_value('tax_address',$tax_address), 'class="form-control"');?>
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <?php echo form_checkbox('tax_shipping', '1', set_value('tax_shipping',$tax_shipping));?> <?php echo lang('tax_shipping');?>
  </div>
</div>

 

<input type="submit" class="btn btn-primary" value="<?php echo lang('save');?>" />

</form>


<script>
    var order_statuses = <?php echo $order_statuses;?>;

    function add_status()
    {
        var status = $('#new_order_status_field').val();


        order_statuses[htmlEntities(status)] = htmlEntities(status);

        var os_submission = JSON.stringify(order_statuses);
        $('#order_statuses_json').val(os_submission);

        var row = '<tr><td><input type="radio" value="'+htmlEntities(status)+'" name="order_status"></td><td>'+htmlEntities(status)+'</td><td style="text-align:right;"><button type="button" onclick="if(confirm(\'<?php echo lang('confirm_delete_order_status');?>\')){delete_status($(this).parent().siblings().first().html()); $(this).parent().parent().remove();}" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td></tr>';
        $('#order_statuses').append(row);

        $('#new_order_status_field').val('')

    }

    function delete_status(status)
    {
        order_statuses[status] = undefined;
        var os_submission = JSON.stringify(order_statuses);
        $('#order_statuses_json').val(os_submission);
    }

    $(document).ready(function(){
        $('#country_id').change(function(){
            $.post('<?php echo site_url(config_item('admin_folder').'/locations/get_zone_menu');?>',{id:$('#country_id').val()}, function(data) {
              $('#zone_id').html(data);
          });
        });
    });

    function htmlEntities(str) {
     return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
 }      
</script>
<style type="text/css">
    #order_statuses_json {
     display:none;
 }
</style>

</table>

</div>


<!-- /panel body -->
</div>


</div>
</div>