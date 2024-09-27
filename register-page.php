<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page - Website ni Peruda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/nav.php'; ?>

    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $errors = array();
                    if (empty($_POST["fname"])) {
                        $errors[] = "Please enter your first name.";
                    } else {
                        $fn = trim($_POST["fname"]);
                    }
                    if (empty($_POST["lname"])) {
                        $errors[] = "Please enter your last name.";
                    } else {
                        $ln = trim($_POST["lname"]);
                    }
                    if (empty($_POST["email"])) {
                        $errors[] = "Please enter your email.";
                    } else {
                        $e = trim($_POST["email"]);
                    }
                    if (!empty($_POST['psword1'])) {
                        if ($_POST['psword1'] != $_POST['psword2']) {
                            $errors[] = "Your passwords do not match.";
                        } else {
                            $p = trim($_POST['psword1']);
                        }
                    } else {
                        $errors[] = "Please enter your password.";
                    }
                    if (!empty($errors)) {
                        echo '<h4 class="text-danger">Error!</h4>
                        <p class="error">The following error(s) occurred:<br/>';
                        foreach ($errors as $x) {
                            echo "-> $x<br/>";
                        }
                        echo "</p><h4>Please try again.</h4><br/><br/>";
                    }
                }
                ?>
                <h2 class="text-center">Register</h2>

                <form action="register-page.php" method="post">
                    <div class="form-group">
                        <label for="fname">First name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" maxlength="40"
                            value="<?php if (isset($_POST['fname'])) echo $_POST['fname']?>">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last name:</label>
                        <input type="text" class="form-control" id="lname" name="lname" maxlength="40"
                            value="<?php if (isset($_POST['lname'])) echo $_POST['lname']?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" maxlength="35"
                            value="<?php if (isset($_POST['email'])) echo $_POST['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="psword1">Password:</label>
                        <input type="password" class="form-control" id="psword1" name="psword1" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="psword2">Confirm Password:</label>
                        <input type="password" class="form-control" id="psword2" name="psword2" maxlength="50">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>
</body>
</html>


