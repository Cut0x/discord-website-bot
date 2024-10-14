<?php
// Configurations for your project

// Database connection information
define('DB_HOST', 'localhost');     // Database host (usually 'localhost')
define('DB_USER', 'root');          // Database username
define('DB_PASSWORD', 'password');  // Database password
define('DB_NAME', 'bot_database'); // Database name

// Discord bot token (replace with the real token)
define('DISCORD_BOT_TOKEN', 'TOKEN_BOT');

// Discord API URL to get bot guilds
define('DISCORD_API_URL', 'https://discord.com/api/v10/users/@me/guilds');

// Other global configurations
define('SITE_NAME', 'BOT_NAME');
define('SITE_URL', 'WEBSITE_URL');

define('DISCORD_CLIENT_ID', 'BOT_ID');  // Replace with your customer ID
define('DISCORD_CLIENT_SECRET', 'SECRET_TOKEN_BOT');  // Replace with your secret shopper
define('DISCORD_REDIRECT_URI', 'http://localhost/callback.php');  // Redirect URL
define('DISCORD_API_URL_A', 'https://discord.com/api');