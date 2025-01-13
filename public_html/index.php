<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<body>
    <h1>Augustin Marcin</h1>
    <?php 
    // Basic PHP test
    echo "<p>PHP is working if you can see this message</p>";
    echo "<p>Current time: " . date('Y-m-d H:i:s') . "</p>";
    
    // Dynamic content
    if(isset($_SESSION['user'])) {
        echo "Welcome back, " . $_SESSION['user'];
    }
    ?>
</body>
</html> 