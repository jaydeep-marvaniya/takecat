 <html>
 <head>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <link href="<?php echo $this->config->base_url("assets/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">
		<script src="<?php echo $this->config->base_url("assets/bootstrap/js/bootstrap.js");?>"></script>
	 


 
<title>CHANGE PASSWORD </title>

</head>


<body>

<form action= "<?php echo $this->config->base_url("test/save_password");?>" method="post"> 
 <table class="table">
 <tr>
 <td> OLD PASSWORD </td>
 <td> <input type="password" name="name" value="" size="50" /> </td>
 
 </tr>
 
 <tr>
 <td> NEW PASSWORD </td>
 <td>  <input type="newpassword" name="newpassword" value="" size="100" /></td>
 </tr>
 
 <tr>
 <td> NEW PASSWORD AGAIN </td>
 <td> <input type="againnewpassword" name="school" value="" size="50" />  </td>
 </tr>
 
 
 </table>
 
 <input type="submit" name="submit" value="UPDATE DETAILS" /> 
  </form>
 
 </body>
</html>