<?php
include('./src/inc/stats-count.php');

// Calculate total number of servers and users
$total_servers = count($guilds);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[BOT_NAME] - Bot polyvalent</title>

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

    <div class="content">
        <h1><i class="fas fa-magic"></i> Welcome to [BOT_NAME]</h1>
        <p><i class="fas fa-cogs"></i> The bot that is used for everything and nothing, constantly improving.</p>
    </div>
    
    <div class="bot-stats">
    <div class="stats-container">

        <div class="stat">
            <i class="fas fa-server"></i>
            <div class="stat-details">
                <h3>Guilds</h3>
                <p id="serverCount" data-count="<?php echo $total_servers; ?>">0</p>
            </div>
        </div>

        <div class="stat">
            <i class="fas fa-terminal"></i>
            <div class="stat-details">
                <h3>Commands</h3>
                <p id="commandCount" data-count="300">0</p>
            </div>
        </div>
    </div>
    </div>

    <div class="floating-images">
        <img src="src/images/features/feature_1.PNG" alt="Image flottante 1" class="float-image">
        <img src="src/images/features/feature_2.PNG" alt="Image flottante 2" class="float-image">
        <img src="src/images/features/feature_3.PNG" alt="Image flottante 3" class="float-image">
    </div>

    <!-- Creator profile -->
    <section class="creator-profile">
        <div class="banner">
            <img src="src/images/me/your_banner.png" alt="Bannière du créateur">
        </div>
        <div class="profile-info">
            <div class="profile-picture">
                <img src="src/images/me/your_logo.png" alt="Photo de profil">
            </div>
            <div class="profile-details">
                <h2>[YOUR_PSEUDO]</h2>
                <p>@[YOUR_DISCORD]</p>
                <p class="bio">
                    [SIMPLE BIO]
                </p>
                <div class="badges">
                    <img src="src/images/badges/nitro.png" alt="Badge Discord 1">
                </div>
            </div>
        </div>
    </section>

    <?php include('./src/inc/footer.php'); ?>

    <script src="src/js/script.js"></script>
    <script src="src/js/countEffect.js"></script>
</body>
</html>