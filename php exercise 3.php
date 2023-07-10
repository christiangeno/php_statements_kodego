<?php
    $monthName = 'March';

    switch($monthName){
        case "January":
            $days = 31;
            break;

        case "February":
            $days = 28;
            break;

        case "March":
            $days = 31;
            break;

        case "April":
            $days = 30;
            break;

        case "May":
            $days = 31;
            break;

        case "June":
            $days = 30;
            break;

        case "July":
            $days = 31;
            break;


        case "August":
            $days = 31;
            break;

        case "September":
            $days = 30;
            break;

        case "October":
            $days = 31;
            break;

        case "November":
            $days = 30;
            break;

        case "December":
            $days = 31;
            break;

        default:
            $days = 'invalid';
            break;
    }

    if($days == 'invalid'){
        echo "Invalid";
    }else{
        echo "$monthName has $days days.";
    }
?>