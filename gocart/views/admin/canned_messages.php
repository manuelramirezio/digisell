<div class="row">
   <div class="col-md-12">    
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title ">
                <?php echo lang('canned_messages') ?>
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
            <div class="col-md-12">
                <div class="button_set pull-right">
                    <a class="btn btn-info" href="<?php echo site_url($this->config->item('admin_folder').'/settings/canned_message_form/');?>"><i class="icon-plus-sign"></i> <?php echo lang('add_canned_message');?></a>
                </div> 
                <div class="table-responsive">
                    <?php if(count($canned_messages) > 0): ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo lang('message_name');?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($canned_messages as $message): ?>
                                    <tr class="gc_row">
                                        <td><?php echo $message['name']; ?></td>
                                        <td>
                                            <span class="btn-group pull-right">
                                                <a class="btn btn-warning" href="<?php echo site_url($this->config->item('admin_folder').'/settings/canned_message_form/'.$message['id']);?>"><i class="icon-pencil"></i> <?php echo lang('edit');?></a>
                                                <?php if($message['deletable'] == 1) : ?>   
                                                    <a class="btn btn-danger" href="<?php echo site_url($this->config->item('admin_folder').'/settings/delete_message/'.$message['id']);?>" onclick="return areyousure();"><i class="icon-trash icon-white"></i> <?php echo lang('delete');?></a>
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


        <script type="text/javascript">
            function areyousure()
            {
                return confirm('<?php echo lang('confirm_are_you_sure');?>');
            }
        </script>
    </div>
</div>
</div>