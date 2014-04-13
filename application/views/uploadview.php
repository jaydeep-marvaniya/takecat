<div class="well span10 offset1">

<?php echo $error;?>

<?php echo form_open_multipart('account/do_upload_qb');?>
<h3> UPLOAD QUESTIONS IN A QUESTION BANK</h3>

<select name="qbid">

<?php foreach ($qbid as $qbid):?>

<option value="<?php echo $qbid['qbid'];  ?>"><?php echo $qbid['qbid']; ?>-<?php echo $qbid['qbName'];  ?></option>
<?php endforeach ?>
</select>
<br>
<input type="file" name="questionfile" size="20" />

<br /><br />

<input class="btn btn-primary" type="submit" value="upload" />

</form>





<a class="offset7" href=" <?php echo $this->config->base_url("assets/user123.txt"); ?>">Sample excel/.csv file</a>
</div>

