<?php

$con = new mysqli("localhost", "root", "root", "crudoperation");

if ($con) {
    echo "connected";
} else {
    die(mysqli_error($con));
}
