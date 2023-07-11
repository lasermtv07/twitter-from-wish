<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <?php 
            echo file_get_contents("menu.php");
        ?>
        <h2>Login</h2>

        <form action="" method="post">
            <b>Username: </b><input type="text" name="uname" id=""><br>
            <b>Password: </b><input type="password" name="pass" id=""><br>
            <input type="submit" name="" id="" value="Login">
        </form>
        <?php
        $users="users.txt";
            $data=file_get_contents($users);
            $read=0;
            //echo $data.'<br>';
            $acc=explode('|', $data);

            foreach($acc as $a){
                //echo explode(";",$a)[0];
                if($_POST["uname"] == explode(";",$a)[0] and $_POST["pass"] == explode(";",$a)[1] and "1" !== explode(";",$a)[3] and "1" !== explode(";",$a)[2]){
                    $read=1;
                }
                else if($_POST["uname"] == explode(";",$a)[0] and $_POST["pass"] == explode(";",$a)[1] and "1" == explode(";",$a)[2] ){
                    $read=3;
                }
                else if($_POST["uname"] == explode(";",$a)[0] and $_POST["pass"] == explode(";",$a)[1] and "1" == explode(";",$a)[3] ){
                    $read=2;
                }

            }
            if($read==1 and $_POST["uname"] != ''){
                
                session_start();
                $_SESSION['user'] = $_POST["uname"];
                $_SESSION['mod'] = 0;
                echo '<script>window.location.href = "/";</script>';
            }
            if($read==3 and $_POST["uname"] != ''){
                
                session_start();
                $_SESSION['user'] = $_POST["uname"];
                $_SESSION['mod'] = 1;
                echo '<script>window.location.href = "/";</script>';
            }
            if($read==2 and $_POST["uname"] != ''){
                
                echo "<script>alert('Error logging in - accound suspended')</script>";
            }
            if($_POST["uname"] != '') {
                echo "<b>Hey! Either not existing or bad passwd. Are yo trying to trick me?!</b>";
            }
        ?>
    </body>
<html>
