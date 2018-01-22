<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="DBConnect.php" method="post">
        Username:
        <br>
        <input type="text" name="user" placeholder="Enter username">
        <br><br>
        Fullname:
        <br>
        <input type="text" name="fullname" placeholder="Enter fullname">
        <br><br>
        Email:
        <br>
        <input type="email" name="email" placeholder="Enter email">
        <br><br>
        Password:
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>