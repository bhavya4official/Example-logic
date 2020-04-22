<?php
include('ConnInfo.php');
include('CrudOps.php');


 $Ops = new CrudOps();         // Instance of our CRUD Operation Classs
 $PdoObj->beginTransaction();  // PDO Transaction obejct when we need all or nothing operation in case of multiple tables


 $PostData=['Robert Pinto','newthing',102];  // The way we get data from  FORM of HTML Post
 $Query = 'INSERT INTO users(User_name, Pass_code, Role_id) VALUES(?, ?, ?)'; //SQL Query

if($Ops->InsertData($Query, $PostData, $PdoObj) != false)
 {
 	$PdoObj->commit();}
else
 {
 	$PdoObj->rollback();
	echo "SomeError";
}



// Reading Data Examples
 $PostData=['2'];
 $Query = 'SELECT * FROM users Where User_id= ? ';

   $FetchedObj= $Ops->ReadDataWithCondition($Query, $PostData, $PdoObj) ;

 	if( $FetchedObj !=false)
 	{
	 	foreach($FetchedObj as $Obj)
	 	{
	     echo $Obj->Pass_code . '<br>';
	    }
  }



    $Query = 'SELECT * FROM users';
    $FetchedObj= $Ops->ReadDataNoCondition($Query, $PdoObj) ;

 	if( $FetchedObj !=false)
 	{
	 	foreach($FetchedObj as $Obj)
	 	{
	     echo $Obj->Pass_code . '<br>';
	    }
     }

?>