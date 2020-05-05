<?php
if (isset($_POST["dob"])) {
    extract($_POST);


    $conn = mysqli_connect("localhost", "root", "", "employees_db");
    $sql = "INSERT INTO `employees`(`id`, `names`, `emails`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`)
 VALUES                            (NULL ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";
    mysqli_query($conn, $sql) or die(myqli_error($conn));
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Add Employee</h3>
            <p class="text-success">
                <?php
                if (isset($message))
                    echo $message;
                ?>
            </p>
            <p>
            <form action="employees.php" method="post">


                <div class="form-group">
                    <label for="email">Names:</label>
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" required class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="email">Address:</label>
                    <input type="text" required class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="email">date of birth:</label>
                    <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                </div>
                <div class="form-group">
                    <label for="email">Department:</label>
                    <input type="text" required class="form-control" name="department" placeholder="Department">
                </div>

                <div class="form-group">
                    <label for="email">Kra_pin:</label>
                    <input type="number" required class="form-control" name="kra_pin" placeholder="Kra_Pin">
                </div>
                <div class="form-group">
                    <label for="email">Salary:</label>
                    <input type="number" required class="form-control" name="salary" placeholder="Salary">
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" checked value="Female" name="gender" class="form-check-input" name="gender">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" value="Male" name="gender" class="form-check-input" name="gender "> Female
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

    </p>

</div>
</body>
</html>