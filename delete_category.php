<?php
  $category_id = filter_input(INPUT_POST, 'category_id',FILTER_VALIDATE_INT);
  if($category_id == null || $category_id == false)
  {
    $error = "invalid category id.";
    include('error.php');
  }
  else{
   require_once('database.php');
   $query = ' delete from categories_guitar1 where categoryID = :category_id';
   $statement = $db->prepare($query);
   $statement->bindValue(":categoryID",$category_id);
   $statement->execute();
   $statement->closeCursor();

   include('category_list.php');
  }
?>
