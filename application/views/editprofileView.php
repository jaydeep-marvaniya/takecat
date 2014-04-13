<form action= "<?php echo $this->config->base_url("account/save_details");?>" method="post"> 


<!--
<div id="modal-from-dom" class="modal hide fade">
<div class="modal-header">
  <a href="#" class="close">&times;</a>
  <h3>Delete URL</h3>
</div>
<div class="modal-body">
  <p>You are about to delete one track url, this procedure is irreversible.</p>
  <p>Do you want to proceed?</p>
</div>
<div class="modal-footer">
  <a href=# class="btn danger">Yes</a>
  <a href=# class="btn secondary">No</a>
</div>
</div>
-->


<div class="container">
      <div class="span8 offset1">
        <div class="well">
      
      <div class="row">
 	         <div class="span2">
            First Name
            </div>
            <div class=span3>
            <input name="first_name"  value="<?php echo $user[0]['first_name'];?>" type="text"   required>
    
          </div>
          </div>
          
    
          
    <div class="row">
    <div class="span2">
            Last Name:</div>
            <div class="span2">
              <input name="last_name"  value="<?php echo $user[0]['last_name'];?>" type="text"   required>
              </div>
       </div>   
		
 
    <div class="row">
    <div class="span2">
           User Name:</div>
            <div class="span2">
              <input name="username"  value="<?php echo $user[0]['userName'];?>" type="text"   required>
              </div>
              </div>
          
           <div class="row">
    <div class="span2">
           Email</div>
            <div class="span2">
<input name="email"  value="<?php echo $user[0]['email'];?>" type="email" required>
            
            </div>
            </div>
          
          
  
 
       
     <div class="row">
    <div class="span2">
      Password      
    </div>
            <div class="span2">
 <input name="password"  value="<?php echo $user[0]['password'];?>" type="password" required>
            </div>
       </div>                
 	
    <div class="row">
    <div class="span2">
            Re-type password:
    </div>
            <div class="span2">
<input name="re_password"  type="password" placeholder="Retype password" required>
            </div>
       </div>

          
          
    <div class="row"><div class="span2">
            Account type: 
           <select name="type" >
		<option value="examiner">Examiner</option>
		<option value="student">Student</option>
		</select>
      
          </div>
          <hr class="span8">

          <div class="span4">
            <p>Account Management:</p>
          </div> 
          <div class="span3">
     	   <!-- <a href="#" class="confirm-delete" data-id="54">Delete</a> -->
   <a href="#myModal" role="button" class="btn btn-danger" data-toggle="modal">delete profile</a>
          </div>
          
          
      
 
<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">REALLY DELETE PROFILE?</h3>
			  </div>
			  <div class="modal-body">
			    <p>Are you sure you really want to delete your profile? All data created by your profile will be lost.</p>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			      <a href="<?php echo $this->config->base_url('account/delete'); ?>"> <button class="btn btn-primary">DELETE PROFILE</button></a>
			  </div>
			</div> 
          
   
          
          	<div class="span8">
            <p><input  class="btn" type="submit">
            </p>
          </div>
          
        </div>
      </div>

      </div>
      </div>
      </form>