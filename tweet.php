<?php
    session_start();
    if(isset($_SESSION['user'])){
    $tweets_old=file_get_contents('tweets.txt');
    if($_SESSION['mod']==1){
        file_put_contents('tweets.txt',$_SESSION['user']."<span style=color:red> [MOD] </span>"."|||".nl2br(htmlspecialchars($_POST["tweet"]))."\n;;;\n".$tweets_old);
    }
    else {file_put_contents('tweets.txt',$_SESSION['user']."|||".nl2br(htmlspecialchars($_POST["tweet"]))."\n;;;\n".$tweets_old);}
    echo '<!DOCTYPE HTML>
    <html>
    <head>
      <title>Redirect</title>
      <script>
        window.location.href = "/";
      </script>
    </head>
    <body>
      <h1>Redirecting...</h1>
    </body>
    </html>
    ';
    }   
    else {
        echo "<h1>Error!</h1><hr>Couldn't properly process the tweet!";
    }
?>
