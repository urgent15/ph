<!DOCTYPE html>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
    <form action=" " method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php else: 
    if (isset($_POST['submit'])) {
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        echo "Hello: $name <br>";
        echo "Your email is: $email";
    }
        else
        {
            echo "Please fill the form";
        }
    ?>
    <?php endif ?>
</body>
</html>