<?php
require_once MODELS . "/helper/dbConnection.php";

function get(){
    $dbObject = connectionDB();
    $query= $dbObject->prepare("SELECT * FROM employees");
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

function deleteEmployee(){

}

function updateEmployee(){

}

function addEmployee(){

}