<div class="page-header">
<h1 class="text-center"><?php echo $this->lang->line('system_system_name');?></h1>
</div>
<?php if (isset($result) && $result == true) : ?>
<div class="text-center" >
<strong><?php echo $this->lang->line('encode_upload_url'); ?></strong>
<?php echo anchor($result, $result, array('target'=>'_blank','class' => 'btn btn-link')); ?>
</div><br />
<img src="<?php echo base_url() . 'upload/' . $img_dir_name . '/' . $file_name ;?>" class="img-responsive center-block" alt="Image share"/>
<?php endif; ?>