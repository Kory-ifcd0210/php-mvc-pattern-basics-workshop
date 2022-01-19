<?php
require_once MODELS . "/helper/dbConnection.php";

function executeQuery($sql){
    $dbObject = connectionDB();
    $query= $dbObject->prepare($sql);
    try{
        $query->execute();
        return $query->fetchAll();
    }catch(Exception $e){
        return $e;
    }
}


function get(){
    $dbObject = connectionDB();
    $query= $dbObject->prepare("SELECT e.id, e.name, e.email, g.name as 'gender', e.city, e.age, e.phone_number
    FROM employees e
    INNER JOIN genders g ON e.gender_id = g.id
    ORDER BY e.id ASC;");
    try{
        $query->execute();
        return $query->fetchAll();
    }catch(Exception $e){
        echo $e;
        return null;
    }
}



function getById($id){
}

function deleteEmployee($id){
$sql= "DELETE FROM employees WHERE employees.id =" . $id. ";";
return executeQuery($sql);
}

function updateEmployee($id){

}

function addEmployee(){
    $sql= "INSERT INTO employees(id, name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code) VALUES ('','otro','Prueba','otro@testing.com','3','','5','123456789','testing','Testing','TP','1234');";
    executeQuery($sql);

}

