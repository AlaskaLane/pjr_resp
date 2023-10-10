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
        <?php include 'left-sidebar.php'; ?>
        <?php include 'content.php'; ?>
        <?php include 'right-sidebar.php'; ?>
    </div>

    <?php include 'footer.php'; ?>
    <script src="script/script.js"></script>
</body>
</html>



<style> 
@media (max-width: 770px) {
    .container {
        flex-direction: column;
        align-items: center; 
    }

    .left-sidebar, .content, .right-sidebar {
        width: 100%; 
        margin-bottom: 20px; 
    }

}

@media (max-width: 520px) {
    .game {
        

    }
}
</style>