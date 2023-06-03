<html>
    <head>
        <title> Register</title>
    </head>
    <body>
    <?php 
            echo file_get_contents("menu.php");
        ?>
        <h2>Registration</h2>
        <form action="" method="post">
            <b>Username: </b><input type="text" name="uname" id=""><br>
            <b>Password: </b><input type="password" name="pass" id=""><br>
            <input type="submit" name="" id="" value="Register">
        </form>
        <?php
        $users="users.txt";
            $data=file_get_contents($users);
            $write=1;
            //echo $data.'<br>';
            $acc=explode('|', $data);

            foreach($acc as $a){
                //echo explode(";",$a)[0];
                if($_POST["uname"] == explode(";",$a)[0]){
                    $write=0;
                }

            }
            if($write==1 and $_POST["uname"] != ''){
                file_put_contents($users,$data.$_POST["uname"].";".$_POST["pass"].";0;0|");
            }
            else {
                echo "<b>Hey! Tryin' to cheat me man? Uncool.</b>";
            }
        ?>
    </body>
<html>