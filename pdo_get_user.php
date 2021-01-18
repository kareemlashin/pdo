<?php

$q = $all->prepare("
          SELECT * FROM `login` WHERE user_email=:forename and  password=:forPassword
          ");

          $q->bindValue(':forename', $Email);
          $q->bindValue(':forPassword', $Password);
          $q->execute();

          if ($q->rowCount() > 0){
          $check = $q->fetch(PDO::FETCH_ASSOC);
          $row_id = $check;
          print_r($row_id);
          }
          