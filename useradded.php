<html>
<head>
<title>Add User</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['first_name'])){
        $data_missing[] = 'First Name';
    } else {
        $f_name = trim($_POST['first_name']);
    }
    if(empty($_POST['last_name'])){
        $data_missing[] = 'Last Name';

    } else{
        $l_name = trim($_POST['last_name']);
    }
    if(empty($_POST['email'])){
        $data_missing[] = 'Email';
    } else {
        $email = trim($_POST['email']);
    }
   
    if(empty($data_missing)){
        require_once('mysqi_connect.php');
        $query = "INSERT INTO usertable (first_name, last_name, email) VALUES (?,?,?)";
        $stmt = mysqli_prepare($dbc, $query);  
        mysqli_stmt_bind_param($stmt, "sss", $f_name, $l_name, $email);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if($affected_rows == 1){
            echo 'User Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        } else {
            echo 'Error Occurred<br />';
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    } else {
        echo 'You need to enter the following data<br />';
        foreach($data_missing as $missing){
            echo "$missing<br />";
        }
    }
}
?>
<form action="http://localhost:8080/useradded.php" method="post">
    <b>Add a New Student</b>
    <p>First Name:
<input type="text" name="first_name" size="30" value="" />
</p>
<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>
<p>Email:
<input type="text" name="email" size="30" value="" />
</p>
<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>
</body>
</html>
