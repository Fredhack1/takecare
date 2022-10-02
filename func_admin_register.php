<?php

if (isset($_POST['register_btn'])) {
    $username = trim(stripslashes(strip_tags($_POST["username"])));
    $email = trim(stripslashes(strip_tags($_POST["email"])));
    $usertype = trim(stripslashes(strip_tags($_POST["user_type"])));
    $password = $_POST["password_1"];
    $password_2 = $_POST["password_2"];

    if ($username && $email && $usertype && $password) {
       if (strlen($password)>4) {
        if ($password == $password_2) {
            $password = md5($password);
            $db = mysqli_connect("ma-bd.cputvuqvoz7b.us-east-1.rds.amazonaws.com","admin","Romystarboy123","takecare");
            // $query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) 
			// VALUES('$username', '$email', '$usertype', '$password')";
            // mysqli_query($db, $query);
			// $_SESSION['success']  = "You are now logged in";
            // header('location: list_user.php');
            $requette = "SELECT * FROM client WHERE pseudo='$username'";
            $result = mysqli_query($db, $requette);
            $row = mysqli_num_rows($result);
            if ($row==0) {
                $req = "SELECT * FROM client WHERE email='$email'";
                $res = mysqli_query($db, $req);
                $rows = mysqli_num_rows($res);
                if ($rows == 0) {
                    $query = "INSERT INTO client (pseudo, email, typeutilisateur, motdepasse) VALUES('$username', '$email', '$usertype', '$password')";
                    mysqli_query($db, $query);
                    $_SESSION['msg']  = "New user successfully created!!";
                    header('location: list_user.php');
                } else {
                    $_SESSION['msg'] = "L'adresse mail est déjà utilisé veuillez la changer !<br>";
                    header('location: create_user.php');
                }
                
            } else {
                $_SESSION['msg']  = "Le pseudo existe déjà veuillez changer !<br>";
                header('location: create_user.php');
            }
        } else {
            echo "Les mots de passes doivent être identiques";
        }
       } else {
        echo " Votre mot de passe doit dépasser 4 caractères !";
       }
    } else {
        echo "veillez remplir tous les champs ";
    }

    // if(!$db){
    // die('Connection Failed'.mysqli_connect_error());
    // }


}

?>