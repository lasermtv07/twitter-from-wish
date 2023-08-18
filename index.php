<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<?php 
				session_start();
				if($_SESSION['mod']==1){echo "<b>Acess admin panel:</b> <a href=admin.php>/admin.php</a>";}
				echo file_get_contents("menu.php");
		?>
		
		<br><b>User: 
		<?php

			if(!isset($_SESSION['user'])){
				echo "A person without name";
			}
			else {
				echo $_SESSION['user'];
				if($_SESSION['mod']==1){
					echo "<span style=color:red> [MOD] </span>";
				}
			}
			
		?>
		<br><b>tweet</b><br>
			<form action="tweet.php" method="post">
				<textarea name="tweet" id="" cols="70" rows="8"></textarea><br>
				<?php 
				if(isset($_SESSION['user'])){
					echo '<input type="submit" value="tweet">';
				}
				else {
					echo '<b style="color:grey"><i>You need to <a style="color:grey" href="login.php">log in</a> to tweet</i></b>';
				}
				?>
			</form>
			<?php
				$tweets="tweets.txt";
				$data=file_get_contents($tweets);
				//echo $data;
				$info=explode(";;;", $data);
				foreach($info as $t){
					if(trim(explode("|||", $t)[0]) !== ""){
					echo "<b>Tweeted by:<i>".explode("|||", $t)[0]."</i></b><br>";
					echo explode("|||", $t)[1]."<hr>";}
				}
			?>
		</h1>
	</body>
