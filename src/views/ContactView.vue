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

<style scoped>
.page-container {
  padding: 6rem 0;
  background-color: #f3f4f6; /* Gray 100 */
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
