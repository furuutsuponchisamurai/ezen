		<?php
		error_reporting(0);
		include('connection.php');
		if(isset($_POST['submit'])){
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phno = $_POST["phno"];
		$msg1 = $_POST["message"];
		
		
		$sql="INSERT INTO contact(name,email,phno,message) VALUES ('$name','$email','$phno','$msg1')";
		$qry=mysqli_query($link,$sql);
		if($qry){
		
		$headers .="From:ezen<vvr.chelluri@gmail.com>\n";
		$headers .= "Organization: Sender Organization\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
		$to="vvr.chelluri@gmail.com";
		$subject="ezen message";
		$message .="<p style='text-align: left; font-family: &quot;Times New Roman&quot;font-size: 20px ! important;'><p>";
		$message .="<br>";	
		$message .= "<html><body>";
		
		$message .= "<table class='table table-striped' border='1'>";
		$message .= "<thead bgcolor='#CC0023'>";
		
		$message .= "<tr>";
		$message .= "<th style='width: 1% ! important;'> Name</th>";
		$message .= "<th style='width: 1% ! important;'> Email</th>";
		$message .= "<th style='width: 1% ! important;'> Phone</th>";
		$message .= "<th style='width: 1% ! important;'> Message</th>";
		$message .= "</tr>";
		$message .= "</thead>";
		$message .= "<tr>";
		
		$message .= "<td>$name</td>";
		$message .= "<td>$email</td>";
		$message .= "<td>$phno</td>";
		$message .= "<td>$msg1</td>";
		$message .= "</tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		
		mail($to,$subject,$message,$headers);
		
		echo '<script>alert("Thank you for contacting us ..! Our team will get back to you soon")</script>';
		echo "<script> window.location.assign('index') </script>";
		
		}else{
		
		echo '<script>alert("Something is wrong can you please Try once")</script>';
		echo "<script> window.location.assign('index') </script>";
		}
		}	
		
		?>