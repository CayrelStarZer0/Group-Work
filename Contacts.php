<?php
	$name = isset ($_POST ['name']) ? $_POST['name']:'';
	$email = isset ($_POST['email']) ? $_POST['email']: '';
	$content = isset ($_POST['content']) ? $_POST['content']: '';
	$number = isset ($_POST['number']) ? $_POST['number']: '';
	$empty = isset ($_POST['empty']) ? $_POST['empty']: '';
	$success = isset ($_GET ['success']) ? $_GET['success']:'';
	$error = array ("database" => "");
	
	
	if($_POST){
		
		if(strlen($name)> 0 && strpos($email,'@') && strlen($content) > 0 && $number == 2 && $empty == 0) {
			
				$conn = new mysqli('localhost', 'root', 'root', 'contact'); 
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			 
			$name = $conn->real_escape_string($name);
			$email= $conn->real_escape_string($email);
			$content = $conn->real_escape_string($content);
			
			$saved = $conn->query("INSERT INTO contact_entries (name, email, content)
				VALUES ('$name', '$email', '$content')");
			if ($saved) {	
				header('Location: ' . $_SERVER['PHP_SELF'] . '?success=OK');
			} else {
				$error['database'] = "Error when saving";
			}
			
			
		}else {// ČIA DAR REIKIA SPRENDIMO, kaip tas klaidas padaryti tinkamai
			
			print "There is an error."; 
		}	
	}		
		
	if(strlen($success) == 0) {
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DreamHack Contacts</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="normalize.css"/>
		<link rel="stylesheet" href="style.css"/>
	</head>
	
	<body>
		<header>
			<section class="header">
				<img src="https://d1u5p3l4wpay3k.cloudfront.net/lolesports_gamepedia_en/d/d4/DreamHacklogo.png?version=7574c034cf5c40b22fd0c194eeae4b4d" alt="DreamHack Logo"/>
				<nav>
					<ul>
						<li><a href="#" class="item">Home</a></li>
						<li><a href="#" class="item">About</a></li>
						<li><a href="#" class="item">Program</a></li>
						<li><a href="#" class="item">Tickets</a></li>
						<li><a href="#" class="item">FAQ</a></li>
						<li><a href="#" class="item">Contacts</a></li>
					</ul>
				</nav>
			</section>	
		</header>
		
		<main>
		
			<section class="front1">
				<div class="intro1">
					<h1>
						<span>Contacts</span>
					</h1>
				</div>			
			</section>
			
			
			<section class="front2">
				<article class="intro2">
					<h2>Donec ligula magna</h2>
					<p>
					Praesent fermentum justo ac tellus pharetra vestibulum. Nullam a luctus sem. Nulla et rhoncus mauris. 
					</p>
					
					<p>
					Sed nec felis ligula.
					</p>
				</article>
			</section>
			<section class="front3">
				<article class="intro3">
					<h3>
						<a href="mailto:info@dreamhack.com">info@dreamhack.com</a>
						<span>X</span>
						<a href="tel:+37065253130">+37065253130</a>
					</h3>
				</article>
				<div class="team">
					<div class="member">
						<p class="name">Marie Olsen</p>
						<p class="role">CEO</p>
						<p class="email">
							<a href="mailto:marie@dreamhack.com">marie@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Stuart Gimbert</p>
						<p class="role">Director</p>
						<p class="email">
							<a href="mailto:stuart@dreamhack.com">stuart@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Sarah Drummor</p>
						<p class="role">Executive Producer</p>
						<p class="email">
							<a href="mailto:sarah@dreamhack.com">sarah@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Wendy Atkinson</p>
						<p class="role">Head of production</p>
						<p class="email">
							<a href="mailto:wendy@dreamhack.com">wendy@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Abi Isaac</p>
						<p class="role">Senior producer</p>
						<p class="email">
							<a href="mailto:abi@dreamhack.com">abi@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Ellen Galloway</p>
						<p class="role">Senior producer</p>
						<p class="email">
							<a href="mailto:ellen@dreamhack.com">ellen@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Cara Barrie</p>
						<p class="role">Producer</p>
						<p class="email">
							<a href="mailto:cara@dreamhack.com">cara@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Marij Mcvean</p>
						<p class="role">Producer</p>
						<p class="email">
							<a href="mailto:marij@dreamhack.com">marij@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Jennifer Stolsten</p>
						<p class="role">Production manager</p>
						<p class="email">
							<a href="mailto:jennifer@dreamhack.com">jennifer@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Allan Rooney</p>
						<p class="role">Production manager</p>
						<p class="email">
							<a href="mailto:allan@dreamhack.com">allan@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Paul Macleod</p>
						<p class="role">Production manager</p>
						<p class="email">
							<a href="mailto:paul@dreamhack.com">paul@dreamhack.com</a>
						</p>
					</div>
					<div class="member">
						<p class="name">Jonathan Gosling</p>
						<p class="role">Digital media manager</p>
						<p class="email">
							<a href="mailto:johanthan@dreamhack.com">jonathan@dreamhack.com</a>
						</p>
					</div>
				</div>
			</section>	
		
<!-- Contact form-->		
			<section class="front4">
				<article class="intro4">
					<h2>Let's have a chat:</h2>	
					<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
						<div class="nameandemail"> 
							<h4>Your name:</h4><input class="input1" type="text" name="name">
						</div>
						<div class="nameandemail"> 
							<h4>Email adress:</h4> <input class="input1" type="text" name="email">
						</div>
						<div class="content">
							<h4>Your enquiry:</h4> <textarea class="input2" name="content"></textarea>
						</div>
						<div class="number">
							<h4>What is 1 + 1 (write the number)?:</h4> <input type="text" name="number"/>
							</div>
						<div class="empty">
							<h4></h4><input type="text" name="empty"/> <!-- HONEYPOT - KAI JĮ PADARYTI??? Tiesiog padariau tuščią lauką, bet tai tikrai ne tai, ko reikia-->
						</div>
						<p><?php echo $success; ?></p>
						<div class="send">
							<h4><input type="submit" value="Send"/></h4>
						</div>
					</form>	
				</article>
			</section>
<!-- Contact form -->				
			
		</main>
		<footer>
			<div>
				<i class="icons icons-hover fa fa-facebook"></i>
				<i class="icons icons-hover fa fa-youtube"></i>
				<i class="icons icons-hover fa fa-instagram"></i>
				<i class="icons icons-hover fa fa-twitter"></i>
			</div>
			<p>Copyright © DreamHack 2018. All rights reserved.<p>
		</footer>
	</body>
</html>

<?php
	}else {
		header('Location: contacts.php'); // PADARIAU, KAD TIESIOG VEL ATSIDARYTU TAS PATS PSL, bet gal gali padaryti, kad kokia lentelė iššoktų, pvz., "thank you for your letter"
	}
?>
