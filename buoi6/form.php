<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <form action="xuly-multiple.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile[]" multiple>
        <button type="submit">Send</button>
    </form>
</body>
</html>