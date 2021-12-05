<?php

    function search($age, $hudud, $work, $family, $disable){
        global $db;

        if ($age > 0 && $hudud != 'no' && $work != 'no' && $family != 'no' && $disable != 'no'){
            $query = "SELECT * FROM `imtiyoz` WHERE `status` = 1";
        }elseif ($age>0){
            $query = "SELECT * FROM `imtiyoz` WHERE `status` = 1 AND `age` = '$age'";
        }

        $result = mysqli_query($db,$query);

        $model = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $model;
    }
