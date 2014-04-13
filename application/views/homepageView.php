
<!DOCTYPE html>
<html lang="en">

   
  <head>
    <meta charset="utf-8">
    <title>Take CAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $this->config->base_url("assets/bootstrap/css/style.css"); ?>" rel="stylesheet">
    <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">

    
    <style type="text/css">
      body {
        background:url(<?php echo $this->config->base_url(); ?>assets/Images/lol.jpg);
        background-size:2000px 1200px;
        background-repeat:no-repeat;
        padding-top:40px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    
    
    <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap-responsive.css"); ?>" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  
  </head>

  <body>
  <div class="row">
    <div class="span3 offset1" >
    <h1 class="heading">  <img src="<?php echo $this->config->base_url(); ?>/assets/Images/Take.jpg"/></h1></div>
      <div class="span7 pull-right">
      
        <?php echo validation_errors(); ?> 
   			 
      <form class="form-inline offset1" action="<?php echo $this->config->base_url("VerifyLogin");?>" method="post">
        <input name="username" type="text" class="input-small" placeholder="username">
        <input name="password" type="password" class="input-small" placeholder="password">
        <button class="btn btn-primary"  type="submit">Login</button>
                <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal" >do you have the pass key??</a>
        
      </form>
      <div class="offset4">
        <a href="<?php echo $this->config->base_url("login/forgot_password"); ?>"  >forgot password?</a>
      </div>
      </div>
      
      
      
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel">ENTER DETAILS</h3>
			  </div>
			  <div class="modal-body">
			   <form class="form-inline offset1" action="<?php echo $this->config->base_url("VerifyLogin/passkey");?>" method="post">
        <input name="email" type="text" class="input-small" placeholder="email">
        <input name="passkey" type="text" class="input-small" placeholder="passkey">
        <button class="btn btn-primary"  type="submit">Login</button>
      </form>
			  </div>
			  <div class="modal-footer">
			    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			
			  </div>
			</div> 
      
      
      
      
      
  
  
  </div>

<hr> 
<div class="row"> 
  <div class="container span3 offset1">
    <div id="mainwrapper">
    <!-- Image Caption 3 -->
     <div id="box-3" class="box">
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/5.jpg"/>
        <span class="caption fade-caption">
        <h3>Professor</h3>
        <p>Test evaluation is now easier and more time efficient with TakeCAT. Conduct tests and graphical results are waiting for you!!</p>
        </span>
      </div>
    </div>
  </div>

  <div class="container span3">
    <div id="mainwrapper">
    <!-- Image Caption 4 -->
    <div id="box-4" class="box">
      <img src="<?php echo $this->config->base_url(); ?>assets/Images/4.jpg"/>
      <span class="caption slide-caption">
      <h3>Student</h3>
      <p> Bored of usual tests? Have an experience of adaptive test with us - less time, great results!!</p>
      </span>
    </div>
  </div>
  </div>
  <div class="container span3">
    <div id="mainwrapper">
    <!-- Image Caption 5 -->
    <div id="box-5" class="box">
      <div class="rotate">
       <img src="<?php echo $this->config->base_url(); ?>assets/Images/3.jpg"/>
       <span class="caption rotate-caption">
        <h3>Group Test</h3>
        <p>Limiting the test is now easier and more compatible with TakeCAT. Form groups, conduct test, view the results.</p>
        </span>
      </div>
    </div>
    </div>
  </div>

      <div class="container span3">
      <form class="form-signin" action="<?php echo $this->config->base_url("login/signup");?>" method="post" >
        <h2 class="form-signin-heading">Sign up</h2>
        <input name="first_name" type="text" class="input-block-level" placeholder="First name" required>
        <input name="last_name" type="text" class="input-block-level" placeholder="Last name" required>
       <input name="username" type="text" class="input-block-level" placeholder="User name" required>
        <input name="email" type="email" class="input-block-level" placeholder="Email address" required>
        <input name="password"  pattern=".{5,32}" title="5 to 32 characters" type="password" class="input-block-level" placeholder="New Password" required>
        <input name="re_password" type="password" class="input-block-level" placeholder="Re-enter Password" required>
	
	
		<select name="type" >
		<option value="examiner">Examiner</option>
		<!--  <option value="examinee">Examinee </option>-->
		<option value="student">Student</option>
		</select>
		 
        <button class="btn btn-large btn-primary" type="submit">Sign up</button>
        
             </form>
    </div>
    </div> 
    <div class="row"></div>

</div>



    <!-- /container -->
        <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $this->config->base_url("assets/bootstrap/js/bootstrap.js") ?>"></script> 
 <script src="<?php echo $this->config->base_url("assets/bootstrap/jquery.min.js") ?>"></script> 
 
 </body>

</html>
