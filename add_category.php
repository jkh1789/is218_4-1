<?php
  $name = filter_input(INPUT_POST, 'name');

  if($name == null){
    $error = 'invalid name';
    include('error.php');
  }
  else{
   require_once('database.php');
   $query = 'insert into categories_guitar1 (categoryName) values (:category_name)';
   $statement = $db->prepare($query);
   $statement->bindValue(':category_name',$name);
   $statement->execute();
   $statement->closeCursor();

   include('category_list.php');
  }
?>
