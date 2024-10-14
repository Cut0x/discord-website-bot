<?php
// Inclure la configuration
require 'config.php';

// Lire et décoder le fichier JSON contenant les commandes
$json_data = file_get_contents('src/commands.json');
$commands = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[BOT_NAME] - Commands</title>

    <link rel="stylesheet" href="src/css/style.css">

    <?php include('./src/inc/head.php'); ?>
</head>
<body>
    <nav>
        <div class="brand"><i class="fas fa-robot"></i> [BOT_NAME]</div>
        <div class="nav-links">
            <a href="./"><i class="fas fa-home"></i> Home</a>
            <a href="commands.php"><i class="fas fa-list"></i> Commands</a>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>

        <div class="mobile-menu-icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <a href="./"><i class="fas fa-home"></i> Home</a>
        <a href="commands.php"><i class="fas fa-list"></i> Commands</a>
        <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </div>

    <!-- Contents of the Commands page -->
    <section class="commands-section">
        <h1>[BOT_NAME] commands</h1>
        <p>Here is the list of main commands available on [BOT_NAME] :</p>

        <div class="commands-list">
            <?php if (isset($commands['commands']) && !empty($commands['commands'])): ?>
                <?php foreach ($commands['commands'] as $command): ?>
                    <div class="command">
                        <i class="<?php echo htmlspecialchars($command['icon']); ?>"></i>
                        <div class="command-details">
                            <h3><?php echo htmlspecialchars($command['name']); ?></h3>
                            <p><?php echo htmlspecialchars($command['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No commands available.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php include('src/inc/footer.php'); ?>

    <script src="src/js/script.js"></script>
</body>
</html>