<?php

//Select Queries
function selectToDoList(){
    $sqlQuery = "SELECT * FROM todolist WHERE isComplete= 0;";
    return $sqlQuery;
}

function selectToDoListItem($id){
   $sqlQuery = "SELECT * FROM todolist WHERE ToListID = $id;";
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
function makeAllTasksComplete(){
   $sqlQuery = "UPDATE todolist SET isComplete = 1";
   return $sqlQuery;
}
function editTaskItem($id){
   $sqlQuery = "UPDATE todolist SET ToDoName = :name, ToDoDescription = :description,
   ToDoDueDate = :date; WHERE ToDoID = $id;";
   return $sqlQuery;
}
//Delete Queries
function deleteTaskItem($item){
    $sqlQuery = "DELETE FROM todolist WHERE ToDoId = '$item';";
    return  $sqlQuery;
}
    
?>