<?php
$pageTitle = "Services - TAS";
$currentPage = "services";
$basePath = "../";
include '../includes/head.php';
include '../includes/navigation.php';
?>
    <main>

      <!-- Hero Section -->
      <section id="accueil" class="hero">
        <div class="hero-container">
          <h1>
            <span>Togo Assistance Service </span> 30 ans de sécurité, de
            gardiennage et de protection sur tout le Togo
          </h1>
          <p>
            Depuis trois décennies, TAS protège les entreprises les résidences,
            les sites industriels et les institutions grâce à des solutions de
            sécurité professionnelles, surveillées en continu et adaptées à
            chaque besoin.
          </p>
          <img
            class="hero-badge"
            src="<?php echo $basePath; ?>assets/img/30-ans-badge.png"
            alt="30 ans badge"
          />
        </div>
        <div class="hero-cta">
          <ul>
            <li>INTERVENTION 24/7</li>
            <li>COUVERTURE NATIONALE</li>
            <li>AGENTS FORMÉS ET CERTIFIÉS</li>
          </ul>
          <button class="btn-cta yellow">
            Demander une intervention immédiate
          </button>
          <button class="btn-cta">Demander un audit sécurisé gratuit</button>
        </div>
      </section>

      <section class="services-section" id="services">
        <h2>Nos Services</h2>
        <div class="services-grid">
          <div class="panel">
           <div class="panel-img">
            <img
              src="<?php echo $basePath; ?>assets/img/icons/security-agents.png"
              alt="Agents de sécurité & gardiennage"
            />
           </div>
            <h3>Agents de sécurité & gardiennage</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/event-security.png"
              alt="Sécurité événementielle"
            /></div>
            <h3>Sécurité événementielle</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/tele-surveillance.png"
              alt="Télésurveillance & centre opérationnel 24/7"
            /></div>
            <h3>Télésurveillance & centre opérationnel 24/7</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/camera-installation.png"
              alt="Installation de caméras & systèmes d'alarme"
            /></div>
            <h3>Installation de caméras & systèmes d'alarme</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/motorized-patrols.png"
              alt="Ronde Motorisées & interventions rapides"
            /></div>
            <h3>Ronde Motorisées & interventions rapides</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/enterprise-security.png"
              alt="Sécurité pour entreprise, ONG & industries"
            /></div>
            <h3>Sécurité pour entreprise, ONG & industries</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/teleassistance.png"
              alt="Téléassistance"
            /></div>
            <h3>Téléassistance</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/bodyguard-blue.png"
              alt="Garde du corps & sécurité rapprochée"
            /></div>
            <h3>Garde du corps & sécurité rapprochée</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/investigation-bleu.png"
              alt="Investigation & vérification"
            /></div>
            <h3>Investigation & vérification</h3>
          </div>
        </div>
      </section>
      <?php include '../includes/forms.php'; ?>
    </main>
    <?php include '../includes/footer.php'; ?>
