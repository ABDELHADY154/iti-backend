<?php
$errors = [];
$name = $email = $group = $class = $gender = $course = $term = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $group = $_POST["group"];
    $class = $_POST["class"];
    // $course = $_POST["course"];
    $submit = $_POST['submit'];
}
if (isset($submit)) {
    // name 
    if (empty($name)) {
        $errors['nameRequired'] = '* Name is required';
    } elseif (isset($name)) {
        if (!preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $errors['nameInvalid'] = '* enter a valid name ';
        }
    }

    // email 
    if (empty($email)) {
        $errors['emailRequired'] = '* Email is required';
    } elseif (isset($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['emailInvalid'] = '* enter a valid email ';
        }
    }

    // group number 
    if (isset($group)) {
        if (!preg_match("/^[0-9]*$/", $group)) {
            $errors['groupNumberInvalid'] = '* enter a valid number ';
        }
    }


    // classes 
    // if (isset($class)) {
    //     if (!preg_match("/^[a-zA-Z-'\s]+$/", $class)) {
    //         $errors['classDetailsInvalid'] = '* enter a text only ';
    //     }
    // }

    // gender 
    if (empty($_POST["gender"])) {
        $errors['genderRequired'] = "* Gender is required";
    } else {
        $gender = $_POST["gender"];
    }


    // Terms 
    if (empty($_POST["term"])) {
        $errors['termRequired'] = "* You must agree the terms";
    } else {
        $term = $_POST["term"];
    }

    // course 
    if (empty($_POST["course"])) {
        $errors['courseRequired'] = "* Course is required";
    } else {
        $course = $_POST["course"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Application name: AAST_BIS class registeration</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php if (!empty($name)) {
                                                            echo $name;
                                                        } ?>">
        <span style="color: red;"><?= count($errors) && isset($errors['nameRequired']) ? $errors['nameRequired'] : '' ?></span>
        <span style="color: red;"><?= count($errors) && isset($errors['nameInvalid']) ? $errors['nameInvalid'] : '' ?></span>

        <br><br>
        <label for="email">Email: </label>
        <input type="text" name="email" id="email" value="<?php if (!empty($email)) {
                                                                echo $email;
                                                            } ?>">
        <span style="color: red;"><?= count($errors) && isset($errors['emailRequired']) ? $errors['emailRequired'] : '' ?></span>
        <span style="color: red;"><?= count($errors) && isset($errors['emailInvalid']) ? $errors['emailInvalid'] : '' ?></span>

        <br><br>
        <label for="group">Group #: </label>
        <input type="text" name="group" id="group">
        <span style="color: red;"><?= count($errors) && isset($errors['groupNumberInvalid']) ? $errors['groupNumberInvalid'] : '' ?></span>

        <br><br>
        <label for="class">Class details: </label>
        <textarea name="class" id="class" cols="30" rows="4"><?php if (!empty($class)) {
                                                                    echo $class;
                                                                } ?></textarea>

        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <span style="color: red;"><?= count($errors) && isset($errors['genderRequired']) ? $errors['genderRequired'] : '' ?></span>

        <br><br>
        <label for="course">Select Courses: </label>
        <select multiple class="form-control" id="course" name="course">
            <option value="0" <?php $course == '' ? 'selected' : '' ?>>Select course</option>
            <option value="php" <?php $course == 'php' ? 'selected' : '' ?>>PHP</option>
            <option value="mysql" <?php $course == 'mysql' ? 'selected' : '' ?>>Mysql</option>
            <option value="js" <?php $course == 'js' ? 'selected' : '' ?>>JS</option>
            <option value="html" <?php $course == 'html' ? 'selected' : '' ?>>HTML</option>
            <option value="css" <?php $course == 'css' ? 'selected' : '' ?>>Css</option>
        </select>
        <br><br>
        <label for="terms">Agree: </label>
        <input class="" type="checkbox" id="terms" name="term" value="agree" <?php if (isset($term) && $term == "agree") echo "checked"; ?>>
        <span style="color: red;"><?= count($errors) && isset($errors['termRequired']) ? $errors['termRequired'] : '' ?></span>

        <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <h3>Your given values are as:</h3>
    <h4>Name: <?= $name ?></h4>
    <h4>Email: <?= $email ?></h4>
    <h4>Group#: <?= $group ?></h4>
    <h4>Class Details: <?= $class ?></h4>
    <h4>Gender: <?= $gender ?></h4>
    <h4>Selected Course: <?= $course ?></h4>

    <?php

    var_dump($errors);

    ?>
</body>

</html>