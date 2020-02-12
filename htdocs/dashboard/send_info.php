<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "prospects";


$firstname=test_string($_POST["firstname"]);
$lastname=test_string($_POST["lastname"]);
$loan=test_integer($_POST["loan_amount"],100,10000000); //Loan must be between 100 and 10 000 000
$interest=test_float($_POST["interest"]);
$years=test_integer($_POST["year"],1,20); //Years must be between 1 and 20

//If any variable is false we say that input was wrong and which one
if($firstname===false or $lastname===false or $loan===false or $interest===false or $years===false)
{
    echo "Input was wrong.</br>";
    if($loan===false)
    {
        echo "Loan must be a number between 100 and 10 000 000.</br>";
    }
    if($interest===false)
    {
        echo "Interest must be number between 0.01 and 20.</br>";
    }
    if($years===false)
    {
        echo "Years must be a number between 1 and 20.</br>";
    }
    else
    {
        echo "Name must be a string and cannot contain numbers or special characters.</br>";
    }
}
else
{
    $sql = "INSERT INTO prospects (Firstname, Lastname, Loan, Interest, Years) VALUES ('".$firstname."','".$lastname."',".$loan.",".$interest.",".$years.")";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}


function test_string($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strtolower($data);
    $data = ucfirst($data);
    //Check if string has numbers
    if(preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $data)) 
    { 
        return false;
    }
    //Check if string has special characters
    elseif(preg_match('/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/', $data))
    {
        return false;
    }
    //if string is ok we return it
    else 
    {
        return $data;
    }
}
//function to test intergers. check that input is int and between min and max values
function test_integer($int, $min, $max)
{
    if (is_string($int) && !ctype_digit($int)) {
        return false; // contains non digit characters
    }
    elseif (!is_int((int) $int)) {
        return false;
    }
    //Check that int is between values
    elseif($int<$min or $int>$max)
    {
        return false;
    }
    //if ok we return the int
    else
    {
        return $int;
    }
}
//check if value is float
function test_float($val)
{
    if(is_float(floatval($val)))
    {
        return $val;
    }
    else
    {
        return false;
    }
}

?>