<div class="span2 offset1">
<ul class="nav nav-pills nav-stacked">
 <?php  if($type=="examinee") : ?>
 <li class="text-center">
<a href="<?php echo $this->config->base_url("account/taketest"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/tt.jpg" width=50 height=50/><br><br>Take Test</a>
</li>
<!--<li><a href="<?php echo $this->config->base_url("account/taketest"); ?>">Take Test</a></li>-->
<hr><li class="text-center"><a href="<?php echo $this->config->base_url("account/pasttest"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/penclchk.jpg" width=50 height=50/><br><br>Past Performance</a></li>
<!--<li class="text-center"><a href="<?php echo $this->config->base_url("account/pasttest"); ?>">Past Performance</a></li>-->
</ul>

</div>
		 
		<?php ELSE: ?>                    
		<?php endif; ?>
 
 <?php  if($type=="examiner") : ?>
 
 <li class="text-center"><a href="<?php echo $this->config->base_url("account/addquestion"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/editQuestion.jpg" width=50 height=50/><br><br>Edit Questions</a></li>
  <!--<li><a href="<?php echo $this->config->base_url("account/addquestion"); ?>">Edit Questions</a></li>-->
  
  
  <hr><li class="text-center"><a href="<?php echo $this->config->base_url("account/addquestionbank"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/edit.jpg" width=50 height=50/><br><br>Edit Question Bank</a></li>
  <!--<li><a href="<?php echo $this->config->base_url("account/addquestionbank"); ?>">Edit Question bank</a></li>--> 
  
  
  <hr><li class="text-center"><a href="<?php echo $this->config->base_url("account/addtest"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/add.jpg" width=50 height=50/><br><br>Add Test</a></li>
  <!--<li><a href="<?php echo $this->config->base_url("account/addtest"); ?>">Add Test</a></li>-->
  
  
  <hr><li class="text-center"><a href="<?php echo $this->config->base_url("account/addquestionbycsv"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/upload.jpg" width=50 height=50/><br><br>Upload Questions</a></li>
  <!--<li><a href="<?php echo $this->config->base_url("account/addquestionbycsv"); ?>">Upload</a></li>-->
  
  <hr> 
  <li class="text-center"><a href="<?php echo $this->config->base_url("account/allresult"); ?>" data-toggle="tooltip" title="SEE Results"><img src="<?php echo $this->config->base_url(); ?>assets/Images/edit.jpg" width=50 height=50/><br><br>Check Results</a></li>
  	
  </ul>

</div>		 
		<?php ELSE: ?>                    
		<?php endif; ?>
 		
		 <?php  if($type=="student") : ?>
		<li class="text-center">
		<a href="<?php echo $this->config->base_url("account/taketest"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/tt.jpg" width=50 height=50/><br><br>Take Test</a>
		</li>
<hr>
		<li class="text-center"><a href="<?php echo $this->config->base_url("account/pasttest"); ?>"><img src="<?php echo $this->config->base_url(); ?>assets/Images/penclchk.jpg" width=50 height=50/><br><br>Past Performance</a></li>
			</ul>

</div>
	<?php ELSE: ?>                    
		<?php endif; ?>
          
