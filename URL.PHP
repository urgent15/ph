<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="">
        <label for="url">Enter URL:</label>
        <input type="text" name="url" id="url" required>
        <button type="submit">Retrieve Information</button>
    </form>
    <?php
    if(isset($_POST['url'])) {
        $url = $_POST['url'];
        $VAR=parse_url($url);
        print_r($VAR);
    }
    ?>
</body>
</html>