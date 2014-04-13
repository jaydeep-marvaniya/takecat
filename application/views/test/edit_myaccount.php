 <html>
 <head>
 	<link href="<?php echo $this->config->base_url("assets/gstyle_buttons.css");?>" rel="stylesheet" type="text/css" media="screen" />
 
	<link href="<?php echo $this->config->base_url("assets/tablecloth/tablecloth.css");?>" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $this->config->base_url("assets/tablecloth/tablecloth.js");?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



 
<title>EDIT MY ACCOUNT </title>

</head>


<body>

<form action= "<?php echo $this->config->base_url("test/save_details");?>" method="post"> 
 <table>
 <tr>
 <td> NAME </td>
 <td> <input type="text" name="name" value="<?php echo $user[0]['name'];?>" size="50" /> </td>
 
 </tr>
 
 <tr>
 <td> ADDRESS </td>
 <td>  <input type="text" name="address" value="<?php echo $user[0]['address'];?>" size="100" /></td>
 </tr>
 
 <tr>
 <td> SCHOOL </td>
 <td> <input type="text" name="school" value="<?php echo $user[0]['school']; ?>" size="50" />  </td>
 </tr>
 
 <tr>
 <td>  CITY </td>
 <td>   <input type="text" name="city" value="<?php echo $user[0]['city'];?>" size="50" /> </td>
 </tr>
 
 <tr>
 <td> MOBILE </td>
 <td>  <input type="text" name="mobileno" value="<?php echo $user[0]['mobileno']; ?>" size="50" /> </td>
 </tr>
 
 <tr>
 <td> E-MAIL </td>
 <td>   <input type="text" name="email" value="<?php echo $user[0]['email']; ?>" size="50" /> </td>
 </tr>
 
 <tr>
 <td> PASSWORD </td>
 <td class="userbar"> <a href= "<?php echo $this->config->base_url("test/change_password");?>" style="float:left">  <button class="action redbtn"><span class="label"> CHANGE PASSWORD </span></button> </a>  </td> 
 </tr>
 </table>
 
 <input type="submit" name="submit" value="UPDATE DETAILS" /> 
  </form>
 
 </body>
</html>