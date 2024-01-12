<?php
$conn = mysqli_connect(
    'root@127.0.0.1:3308',
    'root',
    'your_password',
    'php_mysql_crud'
);

if (isset($conn)) {
    echo 'DB is connected';
}

?>