<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title ">
                    <?php echo lang('payment_modules') ?>
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
                    <?php if(count($payment_modules) >0): ?>
    <table class="table table-striped">
        <tbody>
        <?php foreach($payment_modules as $module=>$enabled): ?>
            <tr>
                <td><?php echo humanize($module); ?></td>
                <td>
                    <span class="btn-group pull-right">
                <?php if($enabled): ?>
                    <a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/payment/settings/'.$module);?>"><i class="icon-wrench"></i> <?php echo lang('settings');?></a>
                    <a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/payment/uninstall/'.$module);?>" onclick="return areyousure();"><i class=" icon-minus icon-white"></i> <?php echo lang('uninstall');?></a>
                <?php else: ?>
                    <a class="btn btn-success" href="<?php echo site_url($this->config->item('admin_folder').'/payment/install/'.$module);?>"><i class="icon-ok"></i> <?php echo lang('install');?></a>
                <?php endif; ?>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
                </div>
                
            </div>

            <!-- /panel body -->
        </div>


    </div>
</div>