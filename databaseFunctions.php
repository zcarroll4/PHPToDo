<?php

//Select Queries
function selectToDoList(){
    $sqlQuery = "SELECT * FROM todolist WHERE isComplete= 0;";
    return $sqlQuery;
}

//Insert Queries
function createToDoListItem(){
	$sqlQuery = "INSERT INTO todolist (ToDoName, ToDoDescription, ToDoDueDate, ToDoCreateDate, isComplete) 
                VALUES (:todoname,:tododescription, :tododueduate, :todocreatedate, 0);";
    return $sqlQuery;
}

//Update Queries
function updateToDoListItem($todoid){
    $sqlQuery = "UPDATE todolist SET isComplete = 1  
    WHERE ToDoID = '$todoid'";
    return $sqlQuery;
}
function makeAllTasksIncomplete(){
   $sqlQuery = "UPDATE todolist SET isComplete = 0";
   return $sqlQuery;
}
?>