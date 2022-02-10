<?php
$Name= $Email= $Password=
$Comment=  $Gender="";
$errors  = array();

if(isset($_POST['submit'])){
    if (empty($_POST["Name"])){
        $errors['Name']="Name is required";

    }else{
        //Name validation
        if (!preg_match("/^[a-zA-Z]*$/",$Name)){

            $errors['Name']="Only alphabets and white spaces allowed";
        }
        else{
            $Name = test_input($_POST["Name"]);
        }
    }
    if (empty($_POST['Email'])){
        $errors['Email']="Email Required";


    }else{
        $Email= test_input($_POST["Email"]);

        //Email validation
        if (!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            echo '<br>';
            $errors['Email']="Invalid format";
        }
    }
    if (empty($_POST['Gender'])){

        $errors['Gender']="Gender is required";

    }else{
        $Gender=test_input($_POST["Gender"]);

    }
    if (empty($_POST['Password'])){

        $errors['Password']="Password required";

    }else
    {
        $Password=test_input($_POST["Password"]);


    }
    if (empty($_POST['Comment'])){
        $Comment ="Default: I love PHP.";
    }else{
        $Comment =test_input($_POST["Comment"]);
    }
    }
if (!$errors){
    echo 'Credentials successfully  submitted';
    echo '<br>';
    echo '<br>';
    echo 'Name: '.$Name;
    echo '<br>';
    echo 'E-mail: '.$Email;
    echo '<br>';
    echo'Password: '.$Password;
    echo '<br>';
    echo'Gender: '.$Gender;
    echo '<br>';
    echo 'Comment: '. $Comment;

}else{
    echo 'Form not submitted confirm your details then try again';
}




function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    return htmlspecialchars($data);
}
?>
<!doctype html>
<html lang="en">
<head>
    <style>
       .error{
            color: red;
        }
        h1{
            color: darkblue;
            font: bolder;
            font-family: sans-serif;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation Form</title>
</head>
<body>
<h1>Form Validation</h1>
<span class="error">*required field</span><br><br>
<form action="" method="post">
    <label for="Name">Name: <span class="error">* <?php if (isset($errors['Name'])) echo $errors['Name'] ?> </span></label><br>
    <input type="text" id="name" name="Name"><br>
    <label for="E-mail">Email: <span class="error">* <?php if (isset($errors['Email'])) echo $errors['Email'] ?></span></label><br>
    <input type="Email" id="Email" name="Email"><br>
    <label for="Password">Password: <span class="error">* <?php if (isset($errors['Password'])) echo $errors['Password'] ?></span></label><br>
    <input type="Password" id="pass" name="Password"><br>
    Comment: <span class="error"></span><br>
        <textarea name="comment" rows="6" cols="50"> </textarea><br>

    Gender:<span class="error">* <?php if (isset($errors['Gender'])) echo $errors['Gender'] ?></span><br>
    <input type="radio" name="Gender" value="Female">Female
    <input type="radio" name="Gender" value="Male">Male<br><br>
    <input type="Submit" value="SUBMIT" name="submit">
</form>
</body>
</html>