<?php

//Select Queries
function selectToDoList(){
    $sqlQuery = "SELECT * FROM todolist;";
    return $sqlQuery;
}

//Insert Queries
function createToDoListItem(){
	$sqlQuery = "INSERT INTO todolist (ToDoName, ToDoDescription, ToDoDueDate, ToDoCreateDate) 
                VALUES (:todoname,:tododescription, :tododueduate, :todocreatedate);";
    return $sqlQuery;
}
?>