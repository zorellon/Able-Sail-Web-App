<?php

class Database_Reader
   try {
      $dbh = new PDO("mysql:host=kevinzuern.com;dbname=propheis_ablesail", "propheis_able", "Ablesail");
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e)
   {
      echo "Connection to database failed: " . $e->getMessage();
   }


}

