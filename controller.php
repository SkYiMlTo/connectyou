<?php

function db_connect(){
    $hostname = "localhost";
    $username = "sky";
    $password = "root";
    $db = "connectyou";

    return mysqli_connect($hostname,$username,$password,$db);
}

function loginUser(){
    $dbconnect=db_connect();

    $username = $_POST['username'];
    $password = $_POST['password'];

//    $query = "SELECT id, mail, password, public_key FROM accounts WHERE mail = '$mail'";
//    $result = $dbconnect->query($query)->fetch_all();
    try {
        $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
        $result = $dbconnect->query($sql)->fetch_all();
        print_r($result);
    } catch (Exception $e){
        echo "Teh, ca a planté";
    }

//    $existUser = false;
//    $userId = -1;
//    if($result) {
//        if (password_verify($password, $result[0][2])) {
//            $existUser = true;
//            $userId = $result[0][0];
//        }
//    }else{
//        header('Location: ../views/view-connexion.php?mailError=true');
//        return;
//    }
//    if($existUser){
//
//        if(validKey($_POST['privateKey'],$mail,$result[0][3])){
//            $arraySession = array(
//                "idUser" => $userId
//            );
//            $_SESSION['__userSession']= $arraySession;
//            header('Location: ../index.php');
//        }else{
//            header('Location: ../views/view-connexion.php?keyError=true');
//        }
//
//    }else{
//        header('Location: ../views/view-connexion.php?passwordError=true');
//    }
}

if ($_GET['func'] == 'loginUser') { // DONE
    loginUser();
}