<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.3/sweetalert2.all.min.js"></script>
	<title>Mail</title>
	 
</head>
<body>
	<?php 
if(!isset($_POST["tutoremail1"]) || !isset($_POST["tutoremail2"]))
	{
		header("Location:index.php");
	}




	$to = $_POST["tutoremail1"];
	//$to2 = $_POST["tutoremail2"];
	$subject = "PTA Enquiry";
	
	$txt = 
	"Parent Name:$_POST[name]
	Email:$_POST[email]
	Phone:$_POST[phone]
	Student Name:$_POST[studname]
	Register No:$_POST[regno]

	Message:$_POST[message]";
	$headers = "From:$_POST[email]";
if(mail($to,$subject,$txt,$headers))
{
	
		echo"<script>
               swal(
                'Success',
                'MailSent',
                'success'
                ).then(function() {
                window.location.href ='index.php'; 
              });
              </script>";
	


}
else
{
	echo"<script>
               swal(
                'Error',
                'Please try agin',
                'error'
                ).then(function() {
                window.location.href ='index.php'; 
              });
              </script>";

}

    


 ?>

</body>
</html>

















