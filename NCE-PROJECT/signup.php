<?php 
require_once "helper/database.php";
$pdo = connectdatabase();
if(isset($_POST['signup']) && isset($_POST['un'])){
    $insert_query = "INSERT INTO users(username, password, address)VALUES (:un, :pw, :addr)";
    $stmt=$pdo->prepare($insert_query);
    $stmt->execute(
        array(
        ':un' => $_POST['un'],
        ':pw' => $_POST['pw'],
        ':addr' => $_POST['address'],
    )
    );
    echo "Sign Up Successful. Now you can login <a href='/NCE-PROJECT/'>Login</a>";
}
?><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <?php include_once('layout/header.php'); ?><br>
    <form action="" method="post">
        Username: <input type="text" name="un" id="">
        <br><br>
        Password: <input type="password" name="pw" id="">
        <br><br>
        Address: <input type="text" name="address" id="">
        <br><br>
        <input type="submit" value="signup" name="signup">
    </form>
    <?php include_once('layout/footer.php'); ?>
</body>
</html>