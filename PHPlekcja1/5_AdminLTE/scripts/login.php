<?php
    //print_r($_POST);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //print_r($_SERVER["REQUEST_METHOD"]);
        $errors = [];
        foreach ($_POST as $key => $value){
            if (empty($value)){
                $errors[] = "Pole <b>$key</b> musi być wypełnione";
            }
        }

        $login = $_POST["email"];
        $pass = $_POST["pass"];

        $login = filter_var($login, FILTER_SANITIZE_EMAIL);
        

        if (!preg_match())

        if (!empty($errors)){
            $error_message = implode("<br>", $errors);
            header("location: ../pages/index.php?error=".urlencode($error_message));
            exit();
        }
    }else{
        echo "<script>history.back();</script>";
    }