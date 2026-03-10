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
