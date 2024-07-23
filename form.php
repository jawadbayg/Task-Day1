<?php 
        session_start(); 
        $skills = [];

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <div className="FormClass">
  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-md-6 ">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputUser" class="col-sm-2 col-md-6 col-form-label">User Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-md-6 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
        </div>
      </div>
    </form>
</div>



</body>
</html>
 -->


<!-- <!DOCTYPE html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Register</h2>
      
        // session_start();
        // $name = $email = $password = $country = "";
        // $nameErr = $emailErr = $passwordErr = $countryErr = "";

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if (empty($_POST["name"])) {
        //         $nameErr = "Name is required";
        //     } else {
        //         $name = $_POST["name"];
        //     }

        //     if (empty($_POST["email"])) {
        //         $emailErr = "Email is required";
        //     } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        //         $emailErr = "Invalid email format";
        //     } else {
        //         $email = $_POST["email"];
        //     }

        //     if (empty($_POST["password"])) {
        //         $passwordErr = "Password is required";
        //     } else {
        //         $password = $_POST["password"];
        //     }

        //     if (empty($_POST["country"])) {
        //         $countryErr = "Country is required";
        //     } else {
        //         $country = $_POST["country"];
        //     }

        //     if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($countryErr)) {
        //         $_SESSION["name"] = $name;
        //         $_SESSION["email"] = $email;
        //         $_SESSION["password"] = $password;
        //         $_SESSION["country"] = $country;
        //         header("Location: display.php");
        //         exit();
        //     }
        // }
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <small class="text-danger"><?php echo $nameErr; ?></small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <small class="text-danger"><?php echo $emailErr; ?></small>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                <small class="text-danger"><?php echo $passwordErr; ?></small>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select class="form-control" id="country" name="country">
                    <option value="">Select Country</option>
                    <option value="USA" <?php if ($country == "USA") echo "selected"; ?>>USA</option>
                    <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
                    <option value="UK" <?php if ($country == "UK") echo "selected"; ?>>UK</option>
                    <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>>Australia</option>
                </select>
                <small class="text-danger"><?php echo $countryErr; ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" initial-scale=1.0">
    <title>Php Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">


        <?php
        $name = $email = $age = $country = $password = $skills = $skillsString = $gender =  "";
        $nameErr = $emailErr = $ageErr = $countryErr = $passwordErr = $skillsErr = $genderErr = "";
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required!";
            }
            else{
                $name = $_POST["name"];
            }
            //FOR-EMAIL
            if(empty($_POST["email"])){
                $emailErr = "Email is required!";
            }
            //EMAIL FORMAT VALIDATION ------- ! sign checks if not validated, then print emailErr msg
            elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                $emailErr = "Email format is not correct!";
            }
            else{
                $email = $_POST["email"];
            }

            if(empty($_POST["age"])){
                $ageErr = "Age is required!";
            }
            else{
                $age = $_POST["age"];
            }

            if(empty($_POST["country"])){
                $countryErr = "Country is required!";
            }
            else{
                $country = $_POST["country"];
            }

           
            if (empty($_POST["skills"])) {
                $skillsErr = "Please select at least one skill.";
            } else {
                $skills = $_POST["skills"];
                $skillsString = implode(", ", $skills); 
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required!";
            } else {
                $gender = $_POST["gender"];
            }

            if(empty($_POST["password"])){
                $passwordErr = "Password is required!";
            }
            else{
                $password = $_POST[$password];
            }

            if(empty($nameErr)&&($emailErr)&&($ageErr)&&($passwordErr)&&($countryErr)&&($skillsErr)){
                $_SESSION ["name"] = $name;
                $_SESSION ["email"] = $email;
                $_SESSION ["age"] = $age;
                $_SESSION ["country"] = $country;
                $_SESSION ["password"] = $password;
                $_SESSION ["skillsString"] = $skillsString;
                $_SESSION ["gender"] = $gender;
                header("Location: output.php");
                exit();
            }

        
    }

        ?>
         <form id="Form1" method="post" action="output.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <small class="text-danger"><?php echo $nameErr; ?></small>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <small class="text-danger"><?php echo $emailErr; ?></small>
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">
                <small class="text-danger"><?php echo $ageErr; ?></small>
            </div>
            <div class="from-group">
                <label for="country">Country : </label>
                <select class="form-control" id="country" name="country">
                    <option value=" ">Select Country : </option>
                    <option value="Pakistan" <?php if ($country == "Pakistan") echo "selected"; ?>> Pakistan </option>
                    <option value="India" <?php if ($country == "India") echo "selected"; ?>> India </option>
                    <option value="China" <?php if($country == "China") echo "selected"; ?> > China </option>
                    <option value="USA"> <?php if($country == "USA") echo "selected" ?>USA  </option>
                </select>
                <small class="text-danger"> <?php echo $countryErr; ?> </small>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label><br>

                <input type="checkbox" id="C++" name="skills[]" value="C++">
                <label for="skill1">C++</label><br>

                <input type="checkbox" id="OOP" name="skills[]" value="OOP">
                <label for="skill2">OOP</label><br>

                <input type="checkbox" id="DSA" name="skills[]" value="DSA">
                <label for="skill3">DSA</label><br>

                <input type="checkbox" id="GIT" name="skills[]" value="GIT">
                <label for="skill4">Git</label><br>

                <input type="checkbox" id="XAMPP" name="skills[]" value="XAMPP">
                <label for="skill5">Xampp</label><br>

                <small class="text-danger"><?php echo $skillsErr; ?></small>
            </div>
            <div class="form-group">
            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>
            <label for="female">Female</label><br>
        
            <small class="text-danger"><?php echo $genderErr; ?></small>
        </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                <small class="text-danger"> <?php echo $passwordErr; ?> </small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <script>
        window.onload = function() {
            document.getElementById("Form1").reset();
        };
    </script>
    
</body>
</html>