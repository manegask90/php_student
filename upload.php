<?php

if (!empty($_FILES)) {
    $uploaded = $_FILES['newfile'];
    if ($uploaded['error'] == 0) {
        move_uploaded_file(
            $uploaded['tmp_name'],
            __DIR__ . '/images/test.png'
        );
    }
}