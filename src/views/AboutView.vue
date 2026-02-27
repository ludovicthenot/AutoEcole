<template>
  <div class="page-container">
    <div class="page-header">
      <h1 class="page-title">En savoir plus sur nous</h1>
      <p class="page-subtitle">
        Découvrez l'histoire de Plop auto, nos valeurs et les moyens mis à votre disposition pour votre réussite.
      </p>
    </div>
    <About />
    <WhyUs />
  </div>
</template>

<script setup>
import About from '../components/About.vue'
import WhyUs from '../components/WhyUs.vue'
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
