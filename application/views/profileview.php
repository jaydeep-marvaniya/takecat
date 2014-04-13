 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TakeCAT &middot;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">
      <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: ##52D017;
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
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="span4">
          <h1>  <a href="<?php echo $this->config->base_url("VerifyLogin/homepage"); ?>"> <img src="<?php echo $this->config->base_url(); ?>assets/Images/50.jpg"/> </a> </h1> 
          </div>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <?php echo $username; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <!-- dropdown menu links -->
             <li><a tabindex="-1" href="<?php echo $this->config->base_url("account/edit_myprofile"); ?>"  >Account setting</a></li>
              <li><a tabindex="-1" href="<?php echo $this->config->base_url("account/fhelp"); ?>">Help</a></li>
              <li class="divider"></li>
              <li><a tabindex="-1" href="<?php echo $this->config->base_url("account/logout"); ?>">Logout</a></li>
            </ul>
          </div>
        </div>        
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="span4 offset1">
        <h2> Profile Information </h2>
      </div>
      <div class="span6">
     <a href="<?php echo $this->config->base_url('account/edit_myprofile'); ?>"> <button class="btn btn-primary pull-right" type="button">Edit</button></a>
      </div>
    </div>
    <div class="container">
      <div class="well span10 offset1">
        <div class="container span3">
          <img src="<?php echo $this->config->base_url(); ?>assets/Images/4.jpg">
        </div>
        <div class="container span6">
          <p> Name: <?php echo $user[0]['first_name'];?></p>
          <hr>
          <p>Email:<?php echo $user[0]['email'];?> </p>
          <hr>
          <p>Type: <?php echo $user[0]['Type'];?></p>
        </div>
      </div>
    </div>