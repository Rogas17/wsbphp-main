<?php
    session_start();
//    print_r($_POST);
    foreach ($_POST as $key => $value){
        if (empty($value)){
            //echo "$key<br>";
            $_SESSION["error"] = "Wypełnij wszystkie pola";
            echo "<script>history.back();</script>";
            exit();
        }
    }
    
    require_once "./connect.php";
    $sql = "UPDATE `users` SET `city_id` = '$_POST[city_id]', `firstName` = '$_POST[firstName]', `lastName` = '$_POST[lastName]', `birthday` = '$_POST[birthday]' WHERE `users`.`id` = $_SESSION[updateUserId];";
    $conn->query($sql);
        //echo $conn->affected_rows;
        if ($conn->affected_rows == 1){
            //    echo "Prawidłowo dodano rekord";
                $_SESSION["error"] = "Prawidłowo zaktualizowano rekord";
            }else{
            //    echo "Nie dodano rekordu!";
                $_SESSION["error"] = "Nie zaktualizowano rekordu!";
            }
    $conn->close();
    header(header:"location: ../4_db/5_db_table_delete_add_update.php");