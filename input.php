<?php
    include 'dbconnect.php';

    if(isset($_POST['submit']))
    {
        $marks = $_POST["marks"];
        
        $sql = "INSERT INTO `highest_marks` (`marks`) VALUES ('$marks')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Number has been inserted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header('location: index.php');
        }
    }
?>