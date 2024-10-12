<?php
// Configurations pour ton projet

// Informations de connexion à la base de données
define('DB_HOST', 'localhost');     // Hôte de la base de données (généralement 'localhost')
define('DB_USER', 'root');          // Nom d'utilisateur de la base de données
define('DB_PASSWORD', 'password');  // Mot de passe de la base de données
define('DB_NAME', 'bot_database'); // Nom de la base de données

// Token du bot Discord (remplacer par le vrai token)
define('DISCORD_BOT_TOKEN', 'TOKEN_BOT');

// URL de l'API Discord pour obtenir les guildes du bot
define('DISCORD_API_URL', 'https://discord.com/api/v10/users/@me/guilds');

// Autres configurations globales
define('SITE_NAME', 'BOT_NAME');
define('SITE_URL', 'WEBSITE_URL');

// Paramètres divers
define('DEFAULT_LANGUAGE', 'fr'); // Langue par défaut du site
define('TIMEZONE', 'Europe/Paris'); // Fuseau horaire par défaut