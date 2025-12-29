<?php
// Footer - à inclure dans chaque page
$basePath = isset($basePath) ? $basePath : '';
?>
<footer>
  <div class="compagny-info">
    <div class="adresses">
      <div class="adresse">
        <img class="icon" src="<?php echo $basePath; ?>assets/img/icons/map.png" alt="" />
        <p>105, Rue Dalagou Tokoin Wuiti Lomé, TOGO</p>
      </div>
      <div class="adresse">
        <img class="icon" src="<?php echo $basePath; ?>assets/img/icons/phone.png" alt="" />
        <ul>
          <li>+228 22615720</li>
          <li>+228 70286303</li>
          <li>+228 99423329</li>
        </ul>
      </div>
      <div class="adresse">
        <img class="icon" src="<?php echo $basePath; ?>assets/img/icons/mail.png" alt="" />
        <p>contact@tasinter.com</p>
      </div>
    </div>
    <div class="menu">
      <ul>
        <li><a href="<?php echo $basePath; ?>index.php#accueil">Accueil</a></li>
        <li><a href="<?php echo $basePath; ?>pages/services.php#services">Services</a></li>
        <li><a href="<?php echo $basePath; ?>pages/devis.php#formulaire">Demander un devis</a></li>
        <li><a href="<?php echo $basePath; ?>pages/about.php">A propos de nous</a></li>
        <li><a href="<?php echo $basePath; ?>pages/contact.php#contact">Contactez-nous</a></li>
      </ul>
    </div>
    <div class="horaires">
      <h4>Horaires d'ouverture</h4>
      <p>Lundi - Vendredi: 08:00 - 18:00</p>
      <p>Samedi: 08:00 - 16:00</p>
      <p>Dimanche: Fermé</p>
    </div>
    <div class="rdgp">
      <h4>RGPD</h4>
      <p>Politique de confidentialité</p>
      <p>Conditions d'utilisation</p>
      <p>Mentions légales</p>
    </div>
    <div class="30ans">
      <img
        src="<?php echo $basePath; ?>assets/img/30-ans-badge.png"
        class="hero-badge"
        alt="30 ans de TAS"
      />
      <p>nous intervenons sur tout le territoire togolais</p>
    </div>
  </div>
  <div class="copyright">
    <p>© 1993-2025 Togo Assistance Service. Tous droits réservés.</p>
    <a href="">edit by JAXE-TECH</a>
  </div>
</footer>
</body>
</html>
