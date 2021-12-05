<?php

    function debuger($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";

    }

    function getImage($file,$model){
        $path = "uploads/{$file}/{$model['id']}/{$model['image']}";

        return $path;
    }

    function galeryImage($file,$model){
        $path = "uploads/{$file}/{$model['album_id']}/{$model['file']}";

        return $path;
    }
