<div class="priority">
<?php
$db=new mysqli("localhost","root","","login");



$username =$_POST['user'];
$password =$_POST['pass'];

$username =stripcslashes($username);
$password = stripcslashes($password);


$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);


$result = mysqli_query($db,"select * from users where Username = '$username' 
and Password ='$password'") or die ("failed to query database".mysql_error());
$row = mysqli_fetch_array($result);
if($row['Username']==$username && $row['Password']== $password){?>
	
<div class="priority_low"><?php	echo  "Welcome Bastard".$row['Username'];?></div>
	
	
	
}else{ ?>

<div class="priority_normal"><?php echo "failed to login";?></div>

}?>

</div>


