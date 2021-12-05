<?php

    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "root";
    const DB = "imtiyoz";


    $db = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

    const VIEW = "view/schoolv1/";

    const SEEN_COUNT_STEP = 10;
?>