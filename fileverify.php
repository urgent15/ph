<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $filename = 'HARAJIT/' . $name . '.txt';
    $file = fopen($filename, 'w');
    fwrite($file, "Name: $name\n");
    fwrite($file, "Address: $address\n");
    fwrite($file, "Age: $age\n");
    fwrite($file, "Password: $password\n");
    fclose($file);
    if (is_file($filename)) {
        echo "File created successfully!";
    } else {
        echo "Failed to create the file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Verification</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>