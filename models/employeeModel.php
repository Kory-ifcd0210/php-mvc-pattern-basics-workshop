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
    $sql="UPDATE employees SET name = 'Editado' WHERE employees.id =". $id.";";
    return executeQuery($sql);
}

function addEmployee(){
    $name= $_POST['name'];
    $lastName= $_POST['lastName'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $avatar= $_POST['lastName'];
    $age= $_POST['age'];
    $phoneNomber= $_POST['phoneNumber'];
    $city= $_POST['city'];
    $streetAddress= $_POST['streetAddress'];
    $state= $_POST['state'];
    $postalCode= $_POST['postalCode'];
    $sql= "INSERT INTO employees(name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code) VALUES ('
    ', '$lastName', 'nuevo@otro.com', '3', '', '25' ,'123458755', 'Prueba', 'NW', '223', '1225');";

    executeQuery($sql);

}

