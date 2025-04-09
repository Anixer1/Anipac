<?php 

$conn = new mysqli("lyobawio_anixer.shop", "lyobawio_anixer0", "Addmin1995", "lyobawio_anixer.shop");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Database connection failed.");
}

$websiteTitle = "AniPaca";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "2.1";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_"; 

// all the api you need
$zpi = "https://kslsjdk.vercel.app/api"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed
$proxy = "https://kdhfjh.vercel.app/api/v1/streamingProxy?url="; //https://github.com/MetaHat/m3u8-streaming-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
