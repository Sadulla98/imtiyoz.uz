<?php

    function selectImtiyoz($id){
        global $db;

        $query = "SELECT * FROM `imtiyoz` WHERE `status` = 1 AND `id` = '$id'";

        $result = mysqli_query($db,$query);

        $model = mysqli_fetch_assoc($result);

        return $model;
    }
