
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
    <h1 class="heading"><img src="<?php echo $this->config->base_url(); ?>assets/Images/Take.jpg"/></h1></div>
      <div class="span7 pull-right">
      
        <?php echo validation_errors(); ?> 
   			 
      <form class="form-inline offset1" action="<?php echo $this->config->base_url("VerifyLogin");?>" method="post">
        <input name="username" type="text" class="input-small" placeholder="username">
        <input name="password" type="password" class="input-small" placeholder="password">
        <input name="passkey" type="text" class="input-small" placeholder="passkey">
        <button class="btn btn-primary"  type="submit">Login</button>
      </form></div>
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
        <p>Professors can conduct adaptive test and add his/her question bank for students to practice and for creating tests.</p>
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
      <p> Students can take adaptive tests or practice for the same.</p>
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
        <p>A professor can have a group of students to whom he/she can address.
        He/she can make a specific paper available to that group.</p>
        </span>
      </div>
    </div>
    </div>
  </div>

      <div class="container span3">
      <form class="form-signin" action="<?php echo $this->config->base_url("login/sendemail");?>" method="post" >
        <h2 class="form-signin-heading">Forgot Password</h2>
        <input name="username" type="text" class="input-block-level" placeholder="username" required>
        
        <input name="email" type="email" class="input-block-level" placeholder="Email address" required>
       
	
		 
        <button class="btn btn-large btn-primary" type="submit">Send Email</button>
             </form>
             
                     <a href= "<?php echo $this->config->base_url(); ?>" >   <button class="btn"> BACK TO HOMEPAGE </button></a>
             
             
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
