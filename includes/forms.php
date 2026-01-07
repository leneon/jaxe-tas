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

            <label for="details">Préciser les spécificités de votre demande</label>
            <textarea id="details" name="details" rows="4"></textarea>

            <button type="submit" class="btn-cta yellow">
                Envoyer la demande
            </button>
        </form>
    </div>
    <div class="badge-cta">
        <div class="cta">
            <img src="<?php echo $basePath; ?>assets/img/logo.png" class="logo" alt="TAS Logo" />
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