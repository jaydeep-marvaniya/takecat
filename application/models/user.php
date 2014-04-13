<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('userid, userName, password,Type,email');
   $this -> db -> from('user');
   $this -> db -> where('username = ' . "'" . $username . "'");
   $this -> db -> where('password = ' . "'" . $password . "'");
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 
 function entry($email, $passkey)
 {
 	$this -> db -> select('userid, userName, password,Type,email');
 	$this -> db -> from('user');
 	$this -> db -> where('email = ' . "'" . $email . "'");
 	$this -> db -> where('passkey = ' . "'" . $passkey . "'");
 	$this -> db -> limit(1);
 
 	$query = $this -> db -> get();
 
 	if($query -> num_rows() == 1)
 	{
 		return $query->result();
 	}
 	else
 	{
 		return false;
 	}
 }
 
 
}
?>

