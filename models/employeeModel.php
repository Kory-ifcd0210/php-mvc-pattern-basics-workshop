<?php
require_once MODELS . "/helper/dbConnection.php";

function executeQuery($query){
    $dbObject = connectionDB();
    $query= $dbObject->prepare($query);
    try{
        $query->execute();
        return $query->fetchAll();
    }catch(Exception $e){
        echo $e;
        return null;
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

}

function updateEmployee($id){

}

function addEmployee(){
    $sql= "INSERT INTO employees(id, name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code) VALUES ('','test','Prueba','prueba@testing.com','3','','5','123456789','testing','Testing','TP','1234');";
    executeQuery($sql);

}

