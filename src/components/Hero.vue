<template>
  <section id="home" class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center bg-white shadow-md rounded-lg overflow-hidden">
        
        <div class="md:w-1/2 p-8 lg:p-12">
          <h1 class="text-3xl md:text-5xl font-bold text-blue-800 mb-6">
            Bienvenue chez Auto-École Pro
          </h1>
          <p class="text-gray-700 text-lg mb-8 leading-relaxed">
            Nous vous accompagnons dans l'obtention de votre permis de conduire. 
            Avec un taux de réussite de <strong>78%</strong>, nous sommes fiers de la qualité de notre formation.
          </p>
          
          <div class="flex flex-wrap gap-4">
            <router-link to="/contact" class="bg-blue-700 text-white px-6 py-3 rounded shadow hover:bg-blue-600 transition font-bold">
              S'inscrire en ligne
            </router-link>
            <router-link to="/formules" class="border-2 border-blue-700 text-blue-700 px-6 py-3 rounded hover:bg-blue-50 transition font-bold">
              Voir nos tarifs
            </router-link>
          </div>
        </div>

        <div class="md:w-1/2">
          <img 
            src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=800" 
            alt="Apprentissage conduite" 
            class="w-full h-full object-cover"
          />
        </div>

      </div>
    </div>
  </section>
</template>

<script setup>
</script>
