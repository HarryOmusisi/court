<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "court";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
echo "";

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $gender= $_POST['gender'];
    $date_of_birth =  $_POST['date_of_birth'];
    $nationality= $_POST['nationality'];
    $postal_address= $_POST['postal_address'];
    $postal_code= $_POST['postal_code'];
    $town= $_POST['town'];
    $physical_address = $_POST['physical_address'];
    $highest_education_qualification= $_POST['highest_education_qualification'];
    $driving_experience = $_POST['driving_experience'];
    $min_expected_result= $_POST['min_expected_result'];
    $preferred_working_regions = $_POST['preferred_working_regions'];
    $other_languages= $_POST['other_languages'];
    $advantages  = $_POST['advantages'];


    //$hashpwd = sha1($Pass);


    $sql = "INSERT INTO employment(firstname,lastname, phone,gender,date_of_birth,nationality,postal_address,postal_code,town,physical_address,highest_education_qualification,driving_experience,min_expected_result,preferred_working_regions,other_languages,advantages) VALUES ('$firstname','$lastname','$phone','$gender','$date_of_birth','$nationality','$postal_address','$postal_code','$town','$physical_address','$highest_education_qualification','$driving_experience','$min_expected_result','$preferred_working_regions','$other_languages','advantages')";


    if(mysqli_query($conn, $sql)){
        echo "Records added Successfully ";
    }else{
        echo "Records not added".mysqli_error($conn);
    }

    mysqli_close($conn);
}



?>