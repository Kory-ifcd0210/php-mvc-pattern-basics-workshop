<?php

require_once MODELS . "employeeModel.php";

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic
$action= "";

if(isset($_REQUEST["action"])){
    $action= $_REQUEST["action"];
}

if(function_exists($action)){
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $action($id);
    }else{
        $action();
    }
}else{
    error('La accion no existe');
}

/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    echo 'function getemployees called <br/>';
    $getAllEmployeesModel = get();
    if(isset($getAllEmployeesModel)){
        require_once VIEWS . "/employee/employeeDashboard.php";
    }else{
        error('No se ha cargado la base de datos');
    }
}

function dashboard()
{
    echo 'function dashboard called <br/>';
    $getAllEmployeesModel = get();
    if(isset($getAllEmployeesModel)){
        echo $getAllEmployeesModel;
    }else{
        error('No se ha cargado la base de datos');
    }
}

function deleteController($id){

    $ok= deleteEmployee($id);
    if(empty($ok)){
        //$getAllEmployeesModel = get();
        require_once VIEWS . "/employee/employeeDashboard.php";
    }else{
        error($ok);
    }
}

function showEmployee(){
    require_once VIEWS . "/employee/employee.php";

}

function addController(){
    $ok= addEmployee();
    if(empty($ok)){
        $getAllEmployeesModel = get();
        require_once VIEWS . "/employee/employeeDashboard.php";
    }else{
        error($ok);
    }
}

function editController($id){
    $ok= updateEmployee($id);
    if(empty($ok)){
        $getAllEmployeesModel = get();
        require_once VIEWS . "/employee/employeeDashboard.php";
    }else{
        error($ok);
    }
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
    //
}



/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}
