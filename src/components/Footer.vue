<template>
  <footer class="bg-gray-800 text-white py-8">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-8 border-b border-gray-700 pb-8">
        <div>
          <h4 class="text-lg font-bold mb-4">Auto-École Pro</h4>
          <p class="text-sm text-gray-400">
            123 Avenue de la République<br/>
            75011 Paris<br/>
            Tél : 01 23 45 67 89
          </p>
        </div>
        
        <div>
          <h4 class="text-lg font-bold mb-4">Plan du site</h4>
          <ul class="text-sm text-gray-400 space-y-2">
            <li><router-link to="/" class="hover:text-white">Accueil</router-link></li>
            <li><router-link to="/formules" class="hover:text-white">Formules</router-link></li>
            <li><router-link to="/contact" class="hover:text-white">Contact</router-link></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-lg font-bold mb-4">Horaires d'ouverture</h4>
          <p class="text-sm text-gray-400">
            Lundi au Dimanche : 00h00 - 23h59<br/>
            Fermé uniquement pour Noël.<br/>
            <span class="italic text-xs">(Fermetures exceptionnelles notifiées par SMS)</span>
          </p>
        </div>
      </div>
      
      <div class="text-center mt-8 text-sm text-gray-500">
        &copy; 2026 Auto-École Pro - Réalisé par Ludovic Thenot (Étudiant en BTS SIO SLAM)
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>
