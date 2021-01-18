<?php

$q="INSERT INTO `login` (`id`,`user_name`, `user_email`,`password`) VALUES (null,'$name','$email','$pass')";
$all->exec($q);