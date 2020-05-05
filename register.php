<?php
if (isset($_POST["dob"]))
{
 extract($_POST);

 echo "$names $dob $scholarship $course";
 $scholarship=isset($scholarship)?"Yes":"No";
 $conn=mysqli_connect("localhost","root","","shule");
$sql="INSERT INTO `students`(`id`, `names`, `email`, `dob`, `gender`, `school_id`, `course`, `schorlarship`) VALUES 
(null,'$names','$email','$dob','$gender','$gender','$school_id','$scholarship')";
mysqli_query($conn,$sql) or die( myqli_error($conn));
$massage="Student$names has been registered";

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Add Student</h3>
            <p class="text-success">
                <?php
                if(isset($message))
                    echo $message;
                ?>
            </p>
            <form action="register.php" method="post">

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <label for="email">School Id:</label>
                    <input type="text" required class="form-control" name="school_id" placeholder="School Id">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" required class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="date" required class="form-control" name="dob" placeholder="Date of Birth">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" checked value="Female"name="gender" class="form-check-input" name="gender"> Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"value="Male"name="gender" class="form-check-input" name="gender "> Female
                    </label>
                </div>
                <div class="form-group">
                    <select name="course" class="form-contral">
                        <option value="Medicine">Medicine</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Food and Beverage">Food and Beverage</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Pure Mathematics">Pure Mathematics</option>
                        <option value="Teaching">Teaching </option>
                        <option value="Computer Science">Computer Science</option>
                    </select>
                </div>


                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="scholarship" value="Yes"> scholarship
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>

    </div>


</div>








</body>
</html>