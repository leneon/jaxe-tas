<?php
// Head section - à inclure dans <head> de chaque page
$title = isset($pageTitle) ? $pageTitle : "Bienvenu à TAS votre agence de sécurité sur mesure";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo isset($basePath) ? $basePath : ''; ?>assets/css/styles.css" />
    <link rel="shortcut icon" href="<?php echo isset($basePath) ? $basePath : ''; ?>assets/img/logo.png" type="image/x-icon" />
    <script defer src="<?php echo isset($basePath) ? $basePath : ''; ?>scripts.js"></script>
</head>
<body>
