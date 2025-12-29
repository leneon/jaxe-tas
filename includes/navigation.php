<?php
// Navigation - à inclure dans chaque page
$basePath = isset($basePath) ? $basePath : '';
$currentPage = isset($currentPage) ? $currentPage : '';
?>
<!-- Navigation -->
<nav>
    <a href="<?php echo $basePath; ?>index.php" class="logo">
        <img class="logo-icon" src="<?php echo $basePath; ?>assets/img/logo.png" alt="TAS Logo" />
    </a>
    <div class="nav-links">
        <ul>
            <li><a href="<?php echo $basePath; ?>index.php" <?php if($currentPage === 'accueil') echo 'class="active"'; ?>>Accueil</a></li>
            <li><a href="<?php echo $basePath; ?>pages/services.php" <?php if($currentPage === 'services') echo 'class="active"'; ?>>Services</a></li>
            <li><a href="<?php echo $basePath; ?>pages/devis.php" <?php if($currentPage === 'devis') echo 'class="active"'; ?>>Demander un devis</a></li>
            <li><a href="<?php echo $basePath; ?>pages/about.php" <?php if($currentPage === 'about') echo 'class="active"'; ?>>A propos de nous</a></li>
        </ul>
        <a href="<?php echo $basePath; ?>pages/contact.php" class="btn-contact-head">Contactez nous</a>
    </div>
</nav>
