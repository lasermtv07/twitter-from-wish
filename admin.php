<?php 
session_start();
if ($_SESSION['mod']==1){
echo "<h1>Admin panel</h1>";
echo "<b>tweets.txt</b><br><b style=color:red>Not yet available, use SSH :(</b><br>";


echo "<b>users.txt</b><br>";
echo '<form method="post"><textarea name = "us" rows=15 cols=45>';
echo file_get_contents("users.txt");
echo "</textarea><br><input type=submit value=apply>";


//file_put_contents("tweets.txt", $_POST["tw"]);
file_put_contents("users.txt", $_POST["us"]);
}
else {
    echo "<h1>You need admin priviliges to access that, PEASANT!</h1>";
}
?>

