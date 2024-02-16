<?php
if (isset($_POST['grades'])){
    print_r($_POST);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    include('../includes/connect.php');
    $query = "INSERT INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";
    
    $student= mysqli_query($connect, $query);

    if ($student){
        echo "Success";
    }else{
        echo "Failed " . mysqli_error($connect);
    }
}else{
    echo "You should not be here!";
}
?>
