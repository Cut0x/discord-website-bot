<?php
require 'config.php';

// Remplace par le token de ton bot
$bot_token = DISCORD_BOT_TOKEN;

// Effectuer la requête cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, DISCORD_API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bot $bot_token",
    'Content-Type: application/json'
]);

// Récupérer la réponse JSON
$response = curl_exec($ch);
curl_close($ch);

$guilds = json_decode($response, true);
?>