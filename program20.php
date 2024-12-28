<?php 

function divide($num, $denom) {
    if ($denom == 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $num / $denom;
}

function check_date($date, $format = 'Y-m-d') {
    $datetime = DateTime::createFromFormat($format, $date);
    if (!$datetime || $datetime->format($format) != $date) {
        throw new Exception("Invalid date format.");
    }
    echo "The date " . $date . " is valid.<br>";
    return true;
}

try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0) . "<br>"; // This will throw an exception
} catch (Exception $e) {
    echo "Division Error: " . $e->getMessage() . "<br>";
}

try {
    check_date("2023-03-10"); // Valid date
    check_date("10/03/2023"); // Invalid date, exception will be thrown
} catch (Exception $e) {
    echo "Date Error: " . $e->getMessage() . "<br>";
}

?>
