<?php
$pageTitle = "À propos de TAS - Togo Assistance Service";
$currentPage = "about";
$basePath = "../../";
include $basePath . 'includes/head.php';
include $basePath . 'includes/navigation.php';
?>
<main>
    <section class="service-hero">
        <div class="service-hero-text">
            <h1>
                <span>+</span>30
                <br> ans d'expérience
            </h1>
            <p>Depuis 3 décénies, TAS protège les entreprises, les résidences, les sites industriels et les institutions
            </p>
        </div>

    </section>
    <section class="service-details">
        <div class="service-details-content">
            <h2>Gardiennage & Agents
                de sécurité professionnels
                au Togo</h2>
            <p>
                Depuis plus de 30 ans, TAS protège les entreprises, résidences, sites industriels, ONG et institutions. Nos agents assurent une présence dissuasive, un contrôle strict des accès et une intervention immédiate en cas d’incident.
            </p>
        </div>
        <div class="service-details-image">
            <img src="<?php echo $basePath; ?>assets/img/secu_1 1.png" alt="Agents de sécurité & gardiennage">
        </div>
    </section>
    <section class="service-profits">
        <div>
            <h3>Une présence fiable,
                formée et équipée
                <br>
                Un encadrement qui
                fait la différence
            </h3>
        </div>
        <img src="<?php echo $basePath; ?>assets/img/icons/left-arrow.png" alt="Left arrow icon" class="inline-icon">
        <div>

            <ul>
                <p> Nos agents sont entraînés pour réagir avec méthode, discipline et sang-froid.
                    <br> Ils assurent :
                </p>
                <li>Agents formés aux dernières techniques de sécurité</li>
                <li>Surveillance proactive et gestion des incidents</li>
                <li>Présence dissuasive pour prévenir les risques</li>
                <li>Adaptabilité aux besoins spécifiques de chaque client</li>
                <li>Utilisation de technologies modernes pour renforcer la sécurité</li>
                <a href="">
                    Présence en uniforme ou en tenue discrète
                    <br>
                    Postes permanents ou temporaires
                </a>
            </ul>
    </section>
    <section class="service-field">
        <h2>Secteurs servis</h2>
        <div class="fields-containers">
            <ul>
                <li>Entreprise <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>
                <li>Résidences <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>
                <li>Événements <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>
                <li>Sites industriels <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>
                <li>Institutions <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>
                <li>Chantiers <img class="inline-icon" src="<?php echo $basePath; ?>assets/img/icons/Polygon-2.png" alt=""> </li>


            </ul>
        </div>

    </section>
    <section class="service-why-us">
        <h2>Pourquoi choisir TAS ?</h2>
        <div class="content">
            <div class="atouts">
                <img src="<?php echo $basePath; ?>assets/img/icons/main-bleu.png" alt="">
                <h3>Atouts</h3>

            </div>
            <div class="avantages">
                <img src="<?php echo $basePath; ?>assets/img/icons/pouce-bleu.png" alt="">
                <h3>Avantages</h3>

            </div>
        </div>
    </section>


    <?php include $basePath . 'includes/barnner.php'; ?>
    <?php include $basePath . 'includes/forms.php'; ?>
</main>
<?php include $basePath . 'includes/footer.php'; ?>