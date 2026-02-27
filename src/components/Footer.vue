<template>
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h4 class="col-title">Plop auto</h4>
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
        &copy; 2026 Plop auto - Réalisé par Ludovic Thenot (Étudiant en BTS SIO SLAM)
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.footer {
  @apply bg-gray-800 text-white py-8;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.footer-grid {
  @apply grid md:grid-cols-3 gap-8 border-b border-gray-700 pb-8;
}
.footer-col {
  @apply block;
}
.col-title {
  @apply text-lg font-bold mb-4;
}
.col-text {
  @apply text-sm text-gray-400;
}
.footer-links {
  @apply text-sm text-gray-400 space-y-2 grid grid-cols-2 gap-x-4;
}
.footer-link {
  @apply hover:text-white transition;
}
.footer-bottom {
  @apply text-center mt-8 text-sm text-gray-500;
}
</style>
