<?php

$all= config::concoct();
          $q = $all->prepare("
          DELETE FROM `login` WHERE  user_name=:forename
          ");

          $q->bindValue(':forename', $get_user);
          $q->execute();
