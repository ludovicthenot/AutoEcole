<template>
  <section id="home" class="hero-section">
    <div class="container">
      <div class="hero-card">
        <div class="hero-content">
          <h1 class="hero-title">
            Bienvenue chez Plop auto
          </h1>
          <p class="hero-text">
            Nous vous accompagnons dans l'obtention de votre permis de conduire. 
            Avec un taux de réussite de <strong class="highlight text-blue-800">78%</strong>, nous sommes fiers de la qualité de notre formation.
          </p>
          
          <div class="hero-actions">
            <router-link to="/contact" class="btn-fill">
              S'inscrire en ligne
            </router-link>
            <router-link to="/formules" class="btn-outline">
              Voir nos tarifs
            </router-link>
          </div>
        </div>

        <div class="hero-image-wrapper">
          <img 
            src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=800" 
            alt="Apprentissage conduite" 
            class="hero-image"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.hero-section {
  @apply bg-gray-100 py-16;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.hero-card {
  @apply flex flex-col md:flex-row items-center bg-white shadow-md rounded-lg overflow-hidden;
}
.hero-content {
  @apply md:w-1/2 p-8 lg:p-12;
}
.hero-title {
  @apply text-3xl md:text-5xl font-bold text-blue-800 mb-6;
}
.hero-text {
  @apply text-gray-700 text-lg mb-8 leading-relaxed;
}
.hero-actions {
  @apply flex flex-wrap gap-4;
}
.btn-fill {
  @apply bg-blue-700 text-white px-6 py-3 rounded shadow hover:bg-blue-600 transition font-bold;
}
.btn-outline {
  @apply border-2 border-blue-700 text-blue-700 px-6 py-3 rounded hover:bg-blue-50 transition font-bold;
}
.hero-image-wrapper {
  @apply md:w-1/2;
}
.hero-image {
  @apply w-full h-full object-cover;
}
</style>
