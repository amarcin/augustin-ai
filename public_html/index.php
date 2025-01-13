<!DOCTYPE html>
<html>
<head>
    <title><?php echo $site_title; ?></title>
</head>
<body>
    <h1>Augustin Marcin</h1>
    <?php 
    // Dynamic content
    if(isset($_SESSION['user'])) {
        echo "Welcome back, " . $_SESSION['user'];
    }
    ?>
</body>
</html> 