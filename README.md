# discord-website-bot
Template for your website Discord bot.

This template allows you to make a dynamic web page for your Discord bot!

# How to configure the site?
## Information between ` [] `
All you have to do is change the values ​​to your own.
```
Example: [BOT_NAME] to Wyno
```

## Edit the ` config.php ` file
Simply replace the information with yours in the **config.php** file.

> `config.php`
```php
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
```