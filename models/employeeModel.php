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
    $name= $_POST['name'];
    $lastName= $_POST['lastName'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $avatar= $_POST['avatar'];
    $age= $_POST['age'];
    $phoneNomber= $_POST['phoneNumber'];
    $city= $_POST['city'];
    $streetAddress= $_POST['streetAddress'];
    $state= $_POST['state'];
    $postalCode= $_POST['postalCode'];

        $sql= connectionDB()->prepare("UPDATE employees SET name= :name, last_name= :lastName, email= :email, gender_id=:gender, avatar= :avatar, age= :age, phone_number=:phone_number, city= :city, street_address= :street_address, state= :state, postal_code= :postal_code
        WHERE employees.id =". $id." ");
    //return executeQuery($sql);

            $sql->bindParam(':name', $name, PDO::PARAM_STR);
            $sql->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $sql->bindParam(':email', $email, PDO::PARAM_STR);
            $sql->bindParam(':gender', $gender, PDO::PARAM_INT);
            $sql->bindParam(':avatar', $avatar, PDO::PARAM_STR);
            $sql->bindParam(':age', $age, PDO::PARAM_INT);
            $sql->bindParam(':phone_number', $phoneNomber, PDO::PARAM_INT);
            $sql->bindParam(':city', $city, PDO::PARAM_STR);
            $sql->bindParam(':street_address', $streetAddress, PDO::PARAM_STR);
            $sql->bindParam(':state', $state, PDO::PARAM_STR);
            $sql->bindParam(':postal_code', $postalCode, PDO::PARAM_INT);
    try{
        $sql ->execute( );
        return $sql->fetchAll();

    }catch(Exception $e){
        return $e;
    }
}

function addEmployee(){
    $name= $_POST['name'];
    $lastName= $_POST['lastName'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $avatar= $_POST['avatar'];
    $age= $_POST['age'];
    $phoneNomber= $_POST['phoneNumber'];
    $city= $_POST['city'];
    $streetAddress= $_POST['streetAddress'];
    $state= $_POST['state'];
    $postalCode= $_POST['postalCode'];

    // executeQuery($sql);

        $sql= connectionDB()->prepare( "INSERT INTO employees (name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code) VALUES (:name,:lastName,:email,:gender,:avatar,:age,:phone_number,:city,:street_address,:state,:postal_code) ");
            $sql->bindParam(':name', $name, PDO::PARAM_STR);
            $sql->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $sql->bindParam(':email', $email, PDO::PARAM_STR);
            $sql->bindParam(':gender', $gender, PDO::PARAM_INT);
            $sql->bindParam(':avatar', $avatar, PDO::PARAM_STR);
            $sql->bindParam(':age', $age, PDO::PARAM_INT);
            $sql->bindParam(':phone_number', $phoneNomber, PDO::PARAM_INT);
            $sql->bindParam(':city', $city, PDO::PARAM_STR);
            $sql->bindParam(':street_address', $streetAddress, PDO::PARAM_STR);
            $sql->bindParam(':state', $state, PDO::PARAM_STR);
            $sql->bindParam(':postal_code', $postalCode, PDO::PARAM_INT);

    try{
        $sql ->execute( );
        return $sql->fetchAll();

    }catch(Exception $e){
        return $e;
    }


}
