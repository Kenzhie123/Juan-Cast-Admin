<?php


function formatDateString($dateString) {
    $months = [
        "January", "February", "March", "April", "May", 
        "June", "July", "August", "September", 
        "October", "November", "December"
    ];
    $date = strtotime($dateString);
    $month = $months[date('n', $date) - 1];
    $day = date('j', $date);
    $year = date('Y', $date);
    return "$month $day, $year";
}


function productIDToProductName($productID)
{
    switch($productID){
        case "agimat_ni_juan":
            return "Agimat Ni Juan";
        case "apolaki":
            return "Apolaki";
    }
}


function convertDateStringToInputDateString($dateString)
{
    $dateElements = explode('/',$dateString);
    return $dateElements[2]."-".($dateElements[0] < 10 ? '0'.$dateElements[0] : $dateElements[0])."-".($dateElements[1] < 10 ? '0'.$dateElements[1] : $dateElements[1]);
}