<?php
$pageTitle = "Contact - TAS";
$currentPage = "contact";
$basePath = "../";
include '../includes/head.php';
include '../includes/navigation.php';
?>
    <main>
      </section>
      <section class="form-section" id="formulaire">
        <div class="form-container">
          <div class="cta">
            <h2>Contact</h2>
            <p>Laissez-nous un message.</p>
          </div>
          <form action="">
            <div class="form-group">
              <div>
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div>
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" required />
              </div>
            </div>

            <div class="form-group">
              <div>
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" name="phone" required />
              </div>

              <div>
                <label for="objet">objet de la demande</label>
                <input type="text" id="objet" name="objet" required />
              </div>
            </div>
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
