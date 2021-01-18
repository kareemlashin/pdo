<?php
          $update_query = $all->prepare("
            UPDATE `login` SET `user_name`=:name ,`user_email`=:email,`password`=:pass WHERE id =:forId
          ");

          $update_query->bindValue(':forId', $row_id);
          $update_query->bindValue(':name', $name);
          $update_query->bindValue(':email', $email);
          $update_query->bindValue(':pass', $pass);
          $update_query->execute();