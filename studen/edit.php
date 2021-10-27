<?php
session_start();

function getAllStudent(){
    return isset($_SESSION['studens']) ? $_SESSION['studens'] : array();
}

function getStudent($students_id){
    $students = getAllStudent();

    foreach ($students as $s)
    {
        if($s['students_id'] == $students_id){
            return $s;
        }
    }
    return array();
}

function deletestudent($students_id){
    $students = getAllStudent();

    foreach ($students as $key => $s)
    {
        if($s['students_id'] == $students_id){
            unset($students[$key]);
        }
    }
    $_SESSION['studens'] = $students;
    return $students;
}

function updatestudent($students_id){
    $students = getAllStudent();

    $new_student = array(
        'id' => $students_id
    );

    $update_action = false;
    foreach ($students as $key => $s){
        if ($s['id'] == $students_id){
            $new_student[$key] = $new_student;
            $update_action = true;
        }
    }

    if (!$update_action){
        $students[] = $new_student;
    }

    $_SESSION['students'] = $students;

    return $students;
}