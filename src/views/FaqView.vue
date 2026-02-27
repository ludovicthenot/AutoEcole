<template>
  <div class="page-container">
    <div class="page-header">
      <h1 class="page-title">Foire aux Questions (FAQ)</h1>
      <p class="page-subtitle">
        Toutes les réponses à vos questions les plus fréquentes pour préparer au mieux votre formation.
      </p>
    </div>
    <FAQ />
  </div>
</template>

<script setup>
import FAQ from '../components/FAQ.vue'
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.page-container {
  @apply py-12 bg-white min-h-screen;
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
