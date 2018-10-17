<?php
/*
since this file is purely php code it is no mandatory
to write the closing tag ?>. The closing tag allows you to continue
writing any type of language/code/html in the same file.
*/
$db_server_name = "localhost"; //Since we are using XAMPP in our local machine (127.0.1), the following variables are setted the way they are. If you are connecting to a remote server, you must add the right parameters.
$db_username = "root";
$db_password = "";
$db_name = "loginsystem";

$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);//string de conexion.
