
<style type="text/css">
    body{ 
		 background-image:url(19066.jpg);
		 background-size: 100% 760px;
	    }
    .container{
         width:400px;
         height:375px;
         text-align:center;
         background: rgba(255, 255, 255, 0.1);
         border-radius: 15px;
         margin: 0 auto;
         backdrop-filter: blur(6px);
         margin-top: 160px;		 
        }	
	.container img{
	      width:100px;
		  height:100px;
		  margin-top: -33px;
		  margin-bottom: 30px;
	    }
	input[type="username"], input[type="password"]
	    {
	    height: 45px;
		width : 300px;
		font-size: 17px;
		border: none;
		margin-bottom: 20px;
		border-radius: 4px;
		background-color: rgba(255, 255, 255, 0.1);
		font-family: Arial Rounded MT;
		font-weight: bold;
		}
	.login
	{
	font-family: Arial Rounded MT;
	padding: 17px 35px;
	border-radius: 9px;
	border: none;
	color: black;
	background: rgba(255, 255, 255, 0.1);
    overflow: hidden;
    transition: 0.2s;	
    font-weight: bold;
    font-size: 16px;
    }
   .login:hover
   {
     color: white;
     background: black;
     box-shadow: 0 0 10px white,  0 0 40px white,  0 0 80px white;
   }
	
</style>
<form name='logen' action='login.php' method='POST'>
<div class="container">
<img src="human.png">
<br></br>
<form>
<div class="form-input">
<input type="username" name="nama"
placeholder="Username "autocomplete="off">
</div>
<div class="form-input">
<input type="password" name="sandi"
placeholder="Password ">
</div>
<div>
	
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"logen");

if(isset($_POST['login']))
{
	$cek = mysqli_query($conn, "SELECT * FROM welcome WHERE username = '".$_POST['nama']."' AND password = '".$_POST['sandi']."'");
	$hasil = mysqli_fetch_array($cek);
	$count = mysqli_num_rows($cek);
	
	if($count > 0 )
	{
		header('location:menu.php');
	}

	 else
	{
		 
		echo "<font face='Maiandra GD' size='5'><b>ILING ILING MANEH BRO!!</b></font>";
	}

}
?>
</div>
<br>
<div>
<input type="submit" name="login"
value="LogIn" class="login">
</form>
</div>