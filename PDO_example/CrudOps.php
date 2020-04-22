<?php
class CrudOps {
  // Properties


  // Methods
  function InsertData($Insert_Query, $ValArr, $PdoObj)
   {

  $Pdo = $PdoObj;
  $Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $Sql = $Insert_Query;
  $Values = $ValArr;

  try
    {
      $Statement = $Pdo->prepare($Sql);
      $Statement->execute($Values);
    }
  catch (Exception $e)
    {
         return  false;
    }

  }

  function UpdateData($Update_Query, $ValArr, $PdoObj)
   {

  $Pdo = $PdoObj;
  $Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $Sql = $Update_Query;
  $Values = $ValArr;

  try
    {
      $Statement = $Pdo->prepare($Sql);
      $Statement->execute($Values);
    }
  catch (Exception $e)
    {
         return  false;
    }
  }



  function DeleteData($Delete_Query, $ValArr, $PdoObj)
   {
   $Pdo = $PdoObj;
   $Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $Sql = $Delete_Query;
  $Values = $ValArr;

  try
    {
      $Statement = $Pdo->prepare($Sql);
      $Statement->execute($Values);
    }
  catch (Exception $e)
    {
         return  false;
    }
  }



  function ReadDataWithCondition($Read_Query, $ValArr, $PdoObj)
   {
  $Pdo = $PdoObj;
  $Pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);// this will always fetch the results in from of object
  $Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $Sql = $Read_Query;
  $Values = $ValArr;

  try
    {
     $Statement = $Pdo->prepare($Sql);
     $Statement->execute($Values);
     $Result= $Statement->fetchAll();
     return $Result;
    }
  catch (Exception $e)
    {
         return  false;
    }
   }



  function ReadDataNoCondition($Read_Query, $PdoObj)
   {
  $Pdo = $PdoObj;
  $Pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);// this will always fetch the results in from of object
  $Pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $Sql = $Read_Query;


  try
    {
     $Statement = $Pdo->query($Sql);
     $Result= $Statement->fetchAll();
     return $Result;
    }
  catch (Exception $e)
    {
         return  false;
    }
   }


}

?>

