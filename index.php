<?php
include("DB.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Sign Up</h2>
        <label class="form-label" for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Username"><br><br>
        <label class="form-label" for="Password">Password:</label>
        <input type="password" name="Password" id="Password" placeholder="Password"><br><br>
       <input id="submit" type="submit" name="sign up" value="Sign Up"><br><br>
    </form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username) || empty($Password)){
        echo "Please fill in all fields.";
    }
    else{
        $hash = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (username, password)
        VALUES ('$username', '$hash')";
        try{
            mysqli_query($conn, $sql);
            echo "User registered successfully!";}
        catch(mysqli_sql_exception){
            echo "That username is already taken.";
        }
    }
}


mysqli_close($conn);
?>