
<html>
<!--
<form action="change_password.php" method="post">
Name: <input type="text" name="name"><br>
Old password: <input type="password" name="oldp"><br> 
New password: <input type="password" name="newp"><br> 
<INPUT type="submit" value="submit"/>
</form>
-->
<form action="<?php $this->config->base_url("account/sendemail") ?>" method="post">
Email: <input type="text" name="email"><br>
<INPUT type="submit" value="submit"/>
</form>
</html>
