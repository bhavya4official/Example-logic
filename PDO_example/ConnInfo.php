<?php

  $host =  'localhost';
  $User = 'bhavya';
  $Password = '1234';
  $DbName = 'cruddb';

  // Set DSN
  $Dsn = 'mysql:host='. $host .';dbname='. $DbName;

  // Create a PDO instance
  $PdoObj = new PDO($Dsn, $User, $Password);

  ?>