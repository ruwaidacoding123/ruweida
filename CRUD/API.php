<?php
header("Content-type: application/json");

include 'connection.php';

//function readAll
//function Insert
//function Delet
//function Update

//post
$action = $_POST['action'];

function readAll($conn){

    $data = array();
    $messsage = array();

//read all students in the database
    $query = "SELECT * FROM student";

    //excute the query

    $result = $conn->query($query);

    if($result){
        while($row = $result->fetch_assoc()){
            $data [] = $row;
        }

        $messsage = array("status" => true, "data" => $data);
    }else{
        $messsage = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($messsage);
}

function readStudentInfo($conn){

    $data = array();
    $messsage = array();


    $id = $_POST['id'];
    $query = "SELECT * FROM student WHERE id = 'id'";

    //excute the query

    $result = $conn->query($query);

    if($result){
        while($row = $result->fetch_assoc()){
            $data [] = $row;
        }

        $messsage = array("status" => true, "data" => $data);
    }else{
        $messsage = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($messsage);
}



function registerStudent($conn){
    $studentId = $_POST['id'];
    $studentName = $_POST['name'];
    $studentClass = $_POST['class'];

    $data = array();

    $query = "INSERT INTO student(id,name,class)VALUES('$studentId', '$studentName', '$studentClass')";

    $result = $conn->query($query);
    if($result){
        $data = array("status" => true, "data" => "Registered SuccessFully");
    }else{
        $data = array("status" => false, "data" => $conn->error);

    }
    echo json_encode($data);
}
function updateStudent($conn){
    $studentId = $_POST['id'];
    $studentName = $_POST['name'];
    $studentClass = $_POST['class'];

    $data = array();

    $query = "UPDATE student set name = '$studentName', class = '$studentClass' where id = '$studentId'";

    $result = $conn->query($query);
    
    if($result){
        $data = array("status" => true, "data" => "updated SuccessFully");
    }else{
        $data = array("status" => false, "data" => $conn->error);

    }
    echo json_encode($data);
}


if(isset($action)){
    $action($conn);
}else{
    echo "Action is Required";
}



?>