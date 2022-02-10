<?php
$Name= $Email= $Password=
$Comment= $Gender="";
$NameErr = $GenderErr= $EmailERR= $PasswordERR="";

if (isset($_POST['submit'])){
    if (empty($_POST["Name"])){
        echo '<br>';
        $NameErr="Name is required";
        echo $NameErr;
    }else{
        //Name validation
        if (!preg_match("/^[a-zA-Z]*$/",$Name)){
            echo '<br>';
            $NameErr="Only alphabets and white spaces allowed";
        }
        else{
            $Name = test_input($_POST["Name"]);
        }
    }
    if (empty($_POST['Email'])){
        $EmailERR="Email Required";
        echo '<br>';
        echo $EmailERR;
    }else{
        $Email= test_input($_POST["Email"]);

        //Email validation
        if (!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            echo '<br>';
            $EmailERR="Invalid format";
        }
    }
    if (empty($_POST['Gender'])){
        echo '<br>';
        $GenderERR="Gender is required";
        echo $GenderERR;
    }else{
        $Gender=test_input($_POST["Gender"]);

    }
    if (empty($_POST['Password'])){
        echo '<br>';
        $PasswordERR="Password required";
      
    }else{
        $Password=test_input($_POST["Password"]);

    }
    }
if ($EmailERR == '' && $NameErr =='' && $GenderErr =='' && $PasswordERR ==''){
    echo 'Credentials successfully  submitted';
    echo '<br>';
    echo 'Name: '.$Name;
    echo '<br>';
    echo 'E-mail: '.$Email;
    echo '<br>';
    echo'Password: '.$Password;
    echo '<br>';
    echo'Gender: '.$Gender;
    echo '<br>';

}else{
    echo 'Form not submitted confirm your details then try again';
}




function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    return htmlspecialchars($data);
}
