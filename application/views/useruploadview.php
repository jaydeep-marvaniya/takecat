<div class="well span10 offset1">
<h3> UPLOAD USERS FOR TEST</h3>
<?php echo $error;?>

<?php echo form_open_multipart('account/do_upload_user');?>
<input  type="file" name="userfile" size="20" />

<br /><br />

<input class="btn btn-primary " type="submit" value="upload" />


</form>



<a class="offset7" href="<?php echo $this->config->base_url("assets/user123.txt"); ?>">Sample excel/.csv file</a>
</div>

