<template>
  <div class="page-container">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <ol class="breadcrumb-list">
          <li class="breadcrumb-item">
            <router-link to="/" class="breadcrumb-link">Accueil</router-link>
          </li>
          <li>
            <div class="breadcrumb-separator">
              <span class="mx-2">/</span>
              <span class="breadcrumb-current">Documents à fournir</span>
            </div>
          </li>
        </ol>
      </nav>
      <Documents />
    </div>
  </div>
</template>

<script setup>
import Documents from '../components/Documents.vue'
</script>

<style scoped>
.page-container {
  padding: 4rem 0;
  background-color: var(--white);
  min-height: 100vh;
}

.container {
  max-width: 48rem;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.breadcrumb {
  display: flex;
  margin-bottom: 2rem;
  font-size: 0.875rem;
  color: var(--text-light);
}

.breadcrumb-list {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.breadcrumb-item {
  display: inline-flex;
  align-items: center;
}

.breadcrumb-link {
  color: var(--text-medium);
  transition: color 0.2s ease;
}

.breadcrumb-link:hover {
  color: var(--primary-color);
}

.breadcrumb-separator {
  display: flex;
  align-items: center;
}

.breadcrumb-separator span {
  margin: 0 0.5rem;
  color: var(--text-light);
}

.breadcrumb-current {
  font-weight: 500;
  color: var(--text-dark);
}
</style>
