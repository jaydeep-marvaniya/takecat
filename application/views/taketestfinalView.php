


<form action="<?php echo  $this->config->base_url("account/next_question"); ?>/<?php echo $testid; ?>/<?php echo $question[0]['uid']; ?>/<?php echo $counter; ?>" method="post">
  
    <div class="span8">
    <span class="label label-info">  <h4> <?php echo $test[0]['testname']; ?> </h4> </span>
	<span class="label label-info pull-right">  <h4> Current ability:  <?php  echo $theta; ?> </h4> </span>
	
    
    <div class="well">
        <h4  class="text-info">Question :  <?php echo $counter; ?> </h4> 
        <p><?php echo $question[0]['questionText'] ?></p>
        <hr>
        <div class="offset1">
          <input type="radio" name='options' value="<?php echo $question[0]['option1']; ?>">Option1 : <?php echo $question[0]['option1']; ?><br>
          <input type="radio" name='options' value="<?php echo $question[0]['option2']; ?>" >Option2 :<?php echo $question[0]['option2']; ?><br>
          <input type="radio" name='options' value="<?php echo $question[0]['option3']; ?>">Option3 : <?php echo $question[0]['option3']; ?><br>
          <input type="radio" name='options' value="<?php echo $question[0]['option4']; ?>">Option4 : <?php echo $question[0]['option4']; ?><br>
        </div>
 <a><button class="btn btn-large btn-primary offset3" >Submit</button></a>
 <p class="text-info"> Question <?php echo $counter; ?> out of  <?php echo $stoppingcriteria; ?>  </p>

      </div>
    </div>
    <div class="span6">
    <span class="label label-info">  <h4> Panel </h4> </span>
    
      <div class="well">
      
      <img alt="plot" src="<?php echo $this->config->base_url("assets/plots");?>/<?php echo $plotname; ?>"  >
      
            </div>
    </div>


</form>





<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to TakeCAT!</h1>

	<div id="body">
	
<h1> Examinee homepage</h1>
		<a href="<?php echo  $this->config->base_url(); ?>account/submitquestion "> Submit Question</a></br>

<img alt="" src="<?php echo $this->config->base_url(); ?>assets/images/done/testinterface.png"></img>
</br>
	<a href="<?php echo  $this->config->base_url(); ?>">Homepage</a>

</br>		
		<a href="<?php echo  $this->config->base_url(); ?>login/examinee "> Examinee Login </a></br>
		<a href="<?php echo  $this->config->base_url(); ?>login/student"> Student Login </a></br>
		<a href="<?php echo  $this->config->base_url(); ?>login/prof"> Prof Login </a></br>
		<a href="<?php echo  $this->config->base_url(); ?>login/admin"> Admin Login </a></br>
		
		
		<a href="<?php echo  $this->config->base_url(); ?>signup "> Signup</a></br>
		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
 -->
