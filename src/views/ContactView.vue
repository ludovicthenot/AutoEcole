<template>
  <div class="page-container">
    <div class="page-header">
      <h1 class="page-title">S'inscrire / Nous Contacter</h1>
      <p class="page-subtitle">
        Prêt à prendre la route ? Remplissez ce formulaire pour une pré-inscription ou toute autre demande. 
        Ludovic vous recontactera très rapidement.
      </p>
    </div>
    <Contact />
  </div>
</template>

<script setup>
import Contact from '../components/Contact.vue'
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.page-container {
  @apply py-12 bg-gray-100 min-h-screen;
}
.page-header {
  @apply max-w-7xl mx-auto px-4 text-center mb-12;
}
.page-title {
  @apply text-4xl font-extrabold text-blue-900 mb-4 uppercase;
}
.page-subtitle {
  @apply text-gray-600 max-w-2xl mx-auto text-lg leading-relaxed;
}
</style>
