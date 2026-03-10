<template>
  <div class="page-container">
    <div class="page-header">
      <h1 class="page-title">En savoir plus sur nous</h1>
      <p class="page-subtitle">
        Découvrez l'histoire de Accident Auto, nos valeurs et les moyens mis à votre disposition pour votre réussite.
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

<style scoped>
.page-container {
  padding: 6rem 0;
  background-color: var(--white);
  min-height: 100vh;
}

.page-header {
  max-width: 48rem;
  margin: 0 auto 4rem;
  text-align: center;
  padding: 0 1.5rem;
}

.page-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.page-subtitle {
  color: var(--text-medium);
  font-size: 1.125rem;
  line-height: 1.6;
}
</style>
