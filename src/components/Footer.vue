<template>
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h4 class="col-title">Accident Auto</h4>
          <p class="col-text">
            123 Avenue de la République<br/>
            75011 Paris<br/>
            Tél : 01 23 45 67 89
          </p>
        </div>
        
        <div class="footer-col">
          <h4 class="col-title">Plan du site</h4>
          <ul class="footer-links">
            <li><router-link to="/" class="footer-link">Accueil</router-link></li>
            <li><router-link to="/formules" class="footer-link">Formules</router-link></li>
            <li><router-link to="/contact" class="footer-link">Contact</router-link></li>
            <li><router-link to="/a-propos" class="footer-link">À propos</router-link></li>
            <li><router-link to="/faq" class="footer-link">FAQ</router-link></li>
            <li><router-link to="/stats" class="footer-link">Réussite</router-link></li>
            <li><router-link to="/avis" class="footer-link">Avis</router-link></li>
            <li><router-link to="/mentions-legales" class="footer-link">Légal</router-link></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4 class="col-title">Horaires d'ouverture</h4>
          <p class="col-text">
            Lundi au Dimanche : 00h00 - 23h59<br/>
            Fermé uniquement pour Noël.<br/>
            <span class="text-xs italic">(Fermetures exceptionnelles notifiées par SMS)</span>
          </p>
        </div>
      </div>
      
      <div class="footer-bottom">
        &copy; 2026 Accident Auto - Réalisé par Ludovic Thenot (Étudiant en BTS SIO SLAM)
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped>
.footer {
  background-color: #111827;
  color: var(--white);
  padding: 4rem 0;
  border-top: 1px solid #1f2937;
}

.footer-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 3rem;
  border-bottom: 1px solid #1f2937;
  padding-bottom: 3rem;
}

@media (min-width: 768px) {
  .footer-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

.col-title {
  font-size: 1.25rem;
  font-weight: 800;
  margin-bottom: 1.5rem;
  color: var(--white);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.col-text {
  font-size: 1rem;
  color: var(--text-light);
  line-height: 1.75;
}

.footer-links {
  font-size: 1rem;
  color: var(--text-light);
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 0.75rem 1.5rem;
}

.footer-links li {
  margin-bottom: 0.75rem;
}

.footer-link {
  transition: color 0.3s ease;
}

.footer-link:hover {
  color: var(--accent-color);
}

@media (max-width: 768px) {
  .footer-grid {
    gap: 2rem;
    padding-bottom: 2rem;
  }

  .footer-links {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .col-title {
    text-align: center;
  }

  .col-text {
    text-align: center;
  }
}

.footer-bottom {
  text-align: center;
  margin-top: 3rem;
  font-size: 0.875rem;
  color: var(--text-medium);
  font-weight: 500;
}
</style>
