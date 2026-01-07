<?php
$pageTitle = "Services - TAS";
$currentPage = "services";
$basePath = "../";
include '../includes/head.php';
include '../includes/navigation.php';
?>
<main>

    <!-- Hero Section -->
    <?php include '../includes/hero.php'; ?>

    <section class="services-section" id="services">
        <h2>Nos Services</h2>
        <div class="services-grid">
            <div class="panel">
                <div class="panel-img">
                    <img src="<?php echo $basePath; ?>assets/img/icons/security-agents.png"
                        alt="Agents de sécurité & gardiennage" />
                </div>
                <h3>Agents de sécurité & gardiennage</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/event-security.png"
                        alt="Sécurité événementielle" /></div>
                <h3>Sécurité événementielle</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/tele-surveillance.png"
                        alt="Télésurveillance & centre opérationnel 24/7" /></div>
                <h3>Télésurveillance & centre opérationnel 24/7</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/camera-installation.png"
                        alt="Installation de caméras & systèmes d'alarme" /></div>
                <h3>Installation de caméras & systèmes d'alarme</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/motorized-patrols.png"
                        alt="Ronde Motorisées & interventions rapides" /></div>
                <h3>Ronde Motorisées & interventions rapides</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/enterprise-security.png"
                        alt="Sécurité pour entreprise, ONG & industries" /></div>
                <h3>Sécurité pour entreprise, ONG & industries</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/teleassistance.png"
                        alt="Téléassistance" /></div>
                <h3>Téléassistance</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/bodyguard-blue.png"
                        alt="Garde du corps & sécurité rapprochée" /></div>
                <h3>Garde du corps & sécurité rapprochée</h3>
            </div>
            <div class="panel">
                <div class="panel-img"><img src="<?php echo $basePath; ?>assets/img/icons/investigation-bleu.png"
                        alt="Investigation & vérification" /></div>
                <h3>Investigation & vérification</h3>
            </div>
        </div>
    </section>
    <?php include '../includes/barnner.php'; ?>
    <?php include '../includes/forms.php'; ?>
    <?php include '../includes/cta.php'; ?>
</main>
<?php include '../includes/footer.php'; ?>