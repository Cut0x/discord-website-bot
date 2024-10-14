<?php
// Inclure la configuration
require 'config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[NAME_BOT] - Dashboard</title>

    <link rel="stylesheet" href="src/css/style.css">

    <?php include('./src/inc/head.php'); ?>
</head>
<body>
    <nav>
        <div class="brand"><i class="fas fa-robot"></i> T'Bot</div>
        <div class="nav-links">
            <a href="./"><i class="fas fa-home"></i> Home</a>
            <a href="commands.php"><i class="fas fa-list"></i> Commandes</a>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>
        <div class="mobile-menu-icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <a href="./"><i class="fas fa-home"></i> Home</a>
        <a href="commandes.php"><i class="fas fa-list"></i> Commandes</a>
        <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </div>

    <!-- Dashboard de systèmes -->
    <section class="dashboard-section">
        <h1><i class="fas fa-cogs"></i> Hello <span style="color: lightblue;"><?php  ?></span>!</h1>
        <p>And welcome.</p>
    </section>

    <?php include('src/inc/footer.php'); ?>

    <script src="src/js/script.js"></script>
</body>
</html>