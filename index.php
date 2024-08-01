<?php
function checkDayType($day) {
    // Convert the day to lowercase to make the function case-insensitive
    $day = strtolower($day);
    
    // Use switch-case to determine if the day is a weekday or weekend
    switch ($day) {
        case 'monday':
        case 'tuesday':
        case 'wednesday':
        case 'thursday':
        case 'friday':
            return "It's a weekday.";
        case 'saturday':
        case 'sunday':
            return "It's a weekend.";
        default:
            return "Invalid day. Please enter a valid day of the week.";
    }
}

// Example usage
$day = 'Saturday'; // You can change this to test with other days
echo checkDayType($day);
?>
