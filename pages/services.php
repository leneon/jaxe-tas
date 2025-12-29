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
              src="<?php echo $basePath; ?>assets/img/icons/bodyguard.png"
              alt="Garde du corps & sécurité rapprochée"
            /></div>
            <h3>Garde du corps & sécurité rapprochée</h3>
          </div>
          <div class="panel">
            <div class="panel-img"><img
              src="<?php echo $basePath; ?>assets/img/icons/investigation.png"
              alt="Investigation & vérification"
            /></div>
            <h3>Investigation & vérification</h3>
          </div>
        </div>
      </section>
      <section id="banner2026" class="banner">
        <img src="<?php echo $basePath; ?>assets/img/banner2026.png" alt="" />
      </section>
      <section class="form-section" id="formulaire">
        <div class="form-container">
          <div class="cta">
            <h2>Demandez un devis personnalisé</h2>
            <p>
              Remplissez le formulaire ci-dessous pour obtenir une évaluation
              gratuite et sans engagement de vos besoins en sécurité.
            </p>
            <button class="btn-cta yellow">Demander un devis</button>
          </div>
          <form action="">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" required />

            <label for="service">Type de service souhaité</label>
            <select id="service" name="service" required>
              <option value="">Sélectionnez un service</option>
              <option value="security-agents">
                Agents de sécurité & gardiennage
              </option>
              <option value="event-security">Sécurité événementielle</option>
              <option value="tele-surveillance">
                Télésurveillance & centre opérationnel 24/7
              </option>
              <option value="camera-installation">
                Installation de caméras & systèmes d'alarme
              </option>
              <option value="motorized-patrols">
                Ronde Motorisées & interventions rapides
              </option>
              <option value="enterprise-security">
                Sécurité pour entreprise, ONG & industries
              </option>
              <option value="teleassistance">Téléassistance</option>
              <option value="bodyguard">
                Garde du corps & sécurité rapprochée
              </option>
              <option value="investigation">
                Investigation & vérification
              </option>
              <option value="other">Autre</option>
            </select>

            <label for="details"
              >Préciser les spécificités de votre demande</label
            >
            <textarea id="details" name="details" rows="4"></textarea>

            <button type="submit" class="btn-cta yellow">
              Envoyer la demande
            </button>
          </form>
        </div>
        <div class="badge-cta">
          <div class="cta">
            <img src="assets/img/logo.png" class="logo" alt="TAS Logo" />
            <h4>La sécurité est une question de confiance</h4>
          </div>
          <div class="cta-2">
            <h4>Planifier une visite de site</h4>
            <p>
              Demandez à nos experts de visiter votre site pour évaluer vos
              besoins en matière de sécurité et vous fournir des
              recommandations.
            </p>
            <button class="btn-cta">Maintenant</button>
          </div>
        </div>
      </section>
      <section class="cta-section">
        <div class="text">
          <h3>
            Recevez une analyse complète de votre sécurité,
            <span>gratuitement</span>.
          </h3>
          <p>
            Évaluation résidentielle ou professionnelle, avec rapport PDF et
            recommandations immédiates.
          </p>
        </div>
        <button class="btn-cta">Demander mon audit de sécurité gratuit</button>
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
