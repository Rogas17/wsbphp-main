<?php
    $tab = array(
        "name" => "Janusz",
        "surname" => "Nowak"
    );

    print_r($tab);
    echo $tab["name"];

    foreach($tab as $key => $value){
        $$key = $value;
    }

    echo "<br>."."$name"." ".$surname;
    if (filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)){
        echo "ok";
    }else{
        echo "error";
    }