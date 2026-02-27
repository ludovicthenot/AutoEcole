<template>
  <div class="page-container">
    <div class="page-header">
      <h1 class="page-title">Nos Formules & Tarifs</h1>
      <p class="page-subtitle">
        Choisissez la formation qui vous correspond. Toutes nos formules incluent un accompagnement personnalisé par Ludovic, votre moniteur dédié.
      </p>
    </div>
    <Services />
  </div>
</template>

<script setup>
import Services from '../components/Services.vue'
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
  @apply text-4xl font-extrabold text-blue-900 mb-4 uppercase tracking-tighter;
}
.page-subtitle {
  @apply text-gray-600 max-w-2xl mx-auto text-lg;
}
</style>
