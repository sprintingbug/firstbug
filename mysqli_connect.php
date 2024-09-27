<?php
$dbcon = @mysqli_connect('localhost', 'zipperuda', 'zipperuda', 'members_peruda')
OR die('Could not connect to the mysql server: ' . mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf-8');