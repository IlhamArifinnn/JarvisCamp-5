<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST['nama'];
    echo $_POST['tmp_lahir'];
    echo $_POST['tgl_lahir'];
} else {
    header('location: form.php');
}
