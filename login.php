<?php
require 'config.php';

// Discord OAuth2 Authentication URL
$authorize_url = DISCORD_API_URL_A . '/oauth2/authorize' . '?' . http_build_query([
    'client_id' => DISCORD_CLIENT_ID,
    'redirect_uri' => DISCORD_REDIRECT_URI,
    'response_type' => 'code',
    'scope' => 'identify guilds'
]);

// Redirect user to OAuth2 login page
header('Location: ' . $authorize_url);
exit;