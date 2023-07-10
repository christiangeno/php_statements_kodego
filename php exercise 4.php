<?php

    $students =  '[
        {
            "name" : "John Garg",
            "age"  : "15",
            "school" : "Ahlcon Public School"
        },
        {
            "name" : "Smith Soy",
            "age"  : "16",
            "school" : "St. Marie School"
        },
        {
            "name" : "Charle Rena",
            "age"  : "16",
            "school" : "St. Columba School"
        }
    ]';

    $studentArr = json_decode($students,true);

    forEach($studentArr as $student){
        echo "Name: ".$student['name'].'<br>';
        echo "Age: ".$student['age'].'<br>';
        echo "School: ".$student['school'].'<br>';
        echo '<br>';
    }
?>