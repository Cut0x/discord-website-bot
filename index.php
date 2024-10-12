<?php
include('./src/inc/stats-count.php');

// Calculer le nombre total de serveurs et d'utilisateurs
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
            <a href="#commands"><i class="fas fa-list"></i> Commandes</a>
            <a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </div>

        <div class="mobile-menu-icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <a href="#home"><i class="fas fa-home"></i> Home</a>
        <a href="#commands"><i class="fas fa-list"></i> Commandes</a>
        <a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </div>

    <div class="content">
        <h1><i class="fas fa-magic"></i> Bienvenue sur [BOT_NAME]</h1>
        <p><i class="fas fa-cogs"></i> Le bot qui sert à tout et à rien, constamment en amélioration.</p>
    </div>
    
    <div class="bot-stats">
    <div class="stats-container">

        <div class="stat">
            <i class="fas fa-server"></i>
            <div class="stat-details">
                <h3>Serveurs</h3>
                <p id="serverCount" data-count="<?php echo $total_servers; ?>">0</p>
            </div>
        </div>

        <div class="stat">
            <i class="fas fa-terminal"></i>
            <div class="stat-details">
                <h3>Commandes</h3>
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

    <!-- Profil du créateur -->
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

    <script>
        function toggleMenu() {
            var menu = document.getElementById("mobileMenu");
            if (menu) {
                menu.classList.toggle("active");
            } else {
                console.error("L'élément mobileMenu n'a pas été trouvé");
            }
        }

        // Fonction pour animer les compteurs
        function animateCounter(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
        }
            };
            window.requestAnimationFrame(step);
        }

        // Lancer l'animation pour chaque statistique
        document.addEventListener("DOMContentLoaded", function() {
            const serverCount = document.getElementById("serverCount");
            const commandCount = document.getElementById("commandCount");

            animateCounter(serverCount, 0, parseInt(serverCount.getAttribute('data-count')), 2000);
            animateCounter(commandCount, 0, parseInt(commandCount.getAttribute('data-count')), 2000);
        });
    </script>
</body>
</html>
