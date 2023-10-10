<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site Web</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="block">
        <?php include 'left-sidebar.php'; ?>
        <?php include 'content.php'; ?>
        <?php include 'right-sidebar.php'; ?>
    </div>

    <?php include 'footer.php'; ?>
    <script src="script/script.js"></script>
</body>
</html>
