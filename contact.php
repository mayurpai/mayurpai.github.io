<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mayur | Contact Me</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style-contact.css">
		<meta name="viewport" content="width=1400px, initial-scale=0.001">
		<link rel="stylesheet" href="script.js">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="loader-container">
			<img class ="m_dir" src="images/re_host.png">
			<div class="think">
				<p>Mayur Is Thinking!</p>
			</div>
			<div class="loader"></div>
		</div>
		<script>
			$(window).on("load",function(){
			    $(".loader-container").fadeOut(1000);
			});
		</script>
		<div>
			<div class="sidebar">
				<a href="https://mayurpai.github.io/"><img class="m_dir" src="images/re_host.png"></i></a><br><br><br><br><br>
				<a href="https://mayurpai.github.io/" Title="Home"><i class="fa fa-fw fa-home" aria-hidden="true"></i></a><br>
				<a href="about.php" Title="About"><i class="fa fa-fw fa-user" aria-hidden="true"></i></a><br>
				<a href="skills.php" Title="Skills"><i class="fa fa-fw fa-wrench" aria-hidden="true"></i></a><br>
				<a href="contact.php" Title="Contact"><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></a><br><br><br><br>
				<a href="https://www.facebook.com/profile.php?id=100010154376824" Title="Facebook" target=blank><i class="fa fa-facebook" id="fb" aria-hidden="true"></i></a>
				<a href="https://twitter.com/Mayur_pai5" Title="Twitter" target=blank><i class="fa fa-twitter" id="twitter" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/unmatched._.soul/" Title="Instagram" target=blank><i class="fa fa-instagram" id="insta" aria-hidden="true"></i></a>
				<a href="https://www.linkedin.com/in/mayur-pai5/" Title="LinkedIn" target=blank><i class="fa fa-linkedin" id="link" aria-hidden="true"></i></a>
				<a href="https://github.com/mayurpai" Title="Github" target=blank><i class="fa fa-github" id="git" aria-hidden="true"></i></a>
			</div>
			<div class="html-tags">
				&lt;body&gt; <br>
			</div>
			<div class="html-h1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h1&gt;
			</div>
			<div class="page">
				<div class="main">
					<h1>
						<ul>
							<li>C</li>
							<li>o</li>
							<li>n</li>
							<li>t</li>
							<li>a</li>
							<li>c</li>
							<li>t</li>
							<li>&nbsp;</li>
							<li><img class="m" src="images/re_host.png"></li>
							<li>e</li>
							<br>
							<div class="html_h1">&lt;/h1&gt;</div>
					</h1>
					</ul>
					<p id="fp">I am interested in internship opportunities or large projects. However, if you have<br>other requests or question, don't hesitate to contact me using below form either. <br> Happy to help! &#128526;</p>
				</div>
			</div>
			<div class="info">
				<form method="POST" id="form" class="form">
				<div class="name">
					<input type="name" class="form-control" id="name" placeholder="Name" name="name" required>
				</div>
				<div class="email">
					<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
				</div>
				<div class="sub">
					<textarea class="form-control" rows="1" id="sub" placeholder="Subject" required></textarea>
				</div>
				<div class="message">
					<textarea class="form-control" rows="5" id="message" placeholder="Message" required></textarea>
				</div>
			</div>
			<a href="#">
				<div class="contact" type="submit">&nbsp; S E N D &nbsp;&nbsp; </div>
			</a>
			<div class="html_tags">
				&lt;/body&gt; <br>
			</div>
			<div class="html-tag">
				&lt;/html&gt;
			</div>
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62248.71435731349!2d74.84865681381429!3d12.808042271998731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35ea4efa3f65d%3A0xac7a27fc0587168c!2sKSHEMA%20Staff%20Quarters!5e0!3m2!1sen!2sin!4v1593885986359!5m2!1sen!2sin" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<?php
			if(isset($_POST['submit']))
			{
				@$name=$_POST['name'];
				@$email=$_POST['email'];
				@$subject=$_POST['subject'];
				@$message=$_POST['message'];
				$query = "select * from user where name='$name' and email='$email' and subject='$subject' and message='$message' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['subject'] = $subject;
					$_SESSION['message'] = $message;
					header( "Location: index.php");
					}
					else
					{
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>

	</body>
</html>