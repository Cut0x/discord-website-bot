<?php
require 'config.php';
session_start();

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    // Recover the access token
    $data = [
        'client_id' => DISCORD_CLIENT_ID,
        'client_secret' => DISCORD_CLIENT_SECRET,
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => DISCORD_REDIRECT_URI
    ];

    $ch = curl_init(DISCORD_API_URL_A . '/oauth2/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    $response = curl_exec($ch);
    curl_close($ch);

    $token_response = json_decode($response, true);

    if (isset($token_response['access_token'])) {
        // Save the access token in the session
        $_SESSION['access_token'] = $token_response['access_token'];

        // Redirect to the dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        echo 'Erreur : Impossible d\'obtenir le token d\'accès.';
    }
} else {
    echo 'Erreur : Aucun code OAuth2 fourni.';
}
