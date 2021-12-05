<?php

    function getCategory(){
        global $db;

        $query = "SELECT * FROM `category` WHERE `status` = 1";

        $result = mysqli_query($db,$query);

        $model = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $model;
    }

    function getCategoryY(){
        global $db;

        $query = "SELECT * FROM `category` WHERE `status` = 1 AND `personal` = 'yuridik'";

        $result = mysqli_query($db,$query);

        $model = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $model;
    }

    function selectCategory($id){
        global $db;

        $query = "SELECT * FROM `imtiyoz` WHERE `status` = 1 AND `category` = '$id'";

        $result = mysqli_query($db,$query);

        $model = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $model;
    }
