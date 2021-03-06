<div class="page-header">
	<h1><?php echo $this->lang->line('system_system_name');
	?></h1>
</div>
<p><?php echo $this->lang->line('encode_instruction_1');
?></p>
<p>*1920x1080 max-res*</p>
<?php echo validation_errors(); ?>
<?php if (isset($success) && $success == true) : ?>
<div class="alert alert-success">
	<strong><?php echo $this->lang->line('common_form_elements_success_notifty'); ?></strong>
	<?php echo $this->lang->line('encode_upload_now_success'); ?>
</div>
<?php endif; ?>
<?php if (isset($fail) && $fail == true) : ?>
<div class="alert alert-danger">
	<strong><?php echo $this->lang->line('common_form_elements_error_notifty'); ?> </strong>
	<?php echo $this->lang->line('encode_encode_now_error'); ?>
	<?php echo $fail ; ?>
</div>
<?php endif ; ?>
<?php echo form_open_multipart('create/do_upload');?>
<div class="form-group">
<input type="file" name="userfile" size="20" class="btn btn-default" />
<br />
<input type="submit" class="btn btn-default" value="Upload" />
</div>
<?php echo form_close() ; ?>
<br />
<?php if (isset($result) && $result == true) : ?>
<div class="alert alert-info">
	<strong><?php echo $this->lang->line('encode_upload_url'); ?> </strong>
	<?php echo anchor($result, $result) ; ?>
</div>
<?php endif ; ?>

<br>