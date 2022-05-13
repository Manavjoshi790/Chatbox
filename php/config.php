<?php

$conn = mysqli_connect("localhost", "root", "", "chat");
if(!$conn){
    echo "Success" . mysqli_connect_error();

}


?>