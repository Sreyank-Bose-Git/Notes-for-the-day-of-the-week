<?php
    $date = date("l");

    switch($date) {
        case "Monday":
            echo"Monday is the first day of the week";
            break;
        case "Tuesday":
            echo"Starting to get used to it";
            break;
        case "Wednesday":
            echo"Half of the week is complete";
            break;
        case "Thursday":
            echo"Almost the end of the working days";
            break;
        case "Friday":
            echo"The last day for work in this weekend";
            break;
        case "Saturday":
            echo"Holiday 1 out of 2";
            break;
        case "Sunday":
            echo"There is a lot of sun this day";
            break;
    }
?>