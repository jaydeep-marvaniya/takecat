 <html>
 <head>
 	<link href="<?php echo $this->config->base_url("assets/gstyle_buttons.css");?>" rel="stylesheet" type="text/css" media="screen" />
 
	<link href="<?php echo $this->config->base_url("assets/tablecloth/tablecloth.css");?>" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/tablecloth/tablecloth.js");?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



 
<title>MY ACCOUNT </title>

</head>


<body>

<div>   <a href= "<?php echo $this->config->base_url("test/edit_myaccount");?>" style="float: right">  <button class="action bluebtn"><span class="label"> EDIT DETAILS </span></button> </a>   </div>

 <table>
 <tr>
 <td> NAME </td>
 <td>  <?php echo $user[0]['name']?> </td>
 </tr>
 
 <tr>
 <td> ADDRESS </td>
 <td>  <?php echo $user[0]['address']?> </td>
 </tr>
 
 <tr>
 <td> SCHOOL </td>
 <td>  <?php echo $user[0]['school']?> </td>
 </tr>
 
 <tr>
 <td>  CITY </td>
 <td>  <?php echo $user[0]['city']?> </td>
 </tr>
 
 <tr>
 <td> MOBILE </td>
 <td>  <?php echo $user[0]['mobileno']?> </td>
 </tr>
 
 <tr>
 <td> E-MAIL </td>
 <td>  <?php echo $user[0]['email']?> </td>
 </tr>
 
 <tr>
 <td> PASSWORD </td>
 <td class="userbar"> <a href= "<?php echo $this->config->base_url("test/change_password");?>" style="float: right">  <button class="action redbtn"><span class="label"> CHANGE PASSWORD </span></button> </a>  </td> 
 </tr>
 
 </body>
</html>