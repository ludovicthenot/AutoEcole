<template>
  <nav class="navbar">
    <div class="container">
      <div class="nav-wrapper">
        <router-link to="/" class="logo">
          <span class="logo-text">Accident Auto</span>
        </router-link>
        
        <div class="nav-links">
          <router-link to="/" class="nav-item" active-class="active" exact-active-class="active">Accueil</router-link>
          <router-link to="/formules" class="nav-item" active-class="active">Formules</router-link>
          <router-link to="/documents" class="nav-item" active-class="active">Documents</router-link>
          <router-link to="/s-inscrire" class="btn-primary">S'inscrire</router-link>
        </div>

        <div class="mobile-toggle">
          <button @click="menuOuvert = !menuOuvert" class="toggle-btn">
            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path v-if="!menuOuvert" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div v-if="menuOuvert" class="mobile-menu">
      <router-link to="/" @click="menuOuvert = false" class="mobile-item">Accueil</router-link>
      <router-link to="/formules" @click="menuOuvert = false" class="mobile-item">Formules</router-link>
      <router-link to="/documents" @click="menuOuvert = false" class="mobile-item">Documents</router-link>
      <router-link to="/s-inscrire" @click="menuOuvert = false" class="mobile-btn">S'inscrire</router-link>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue'
const menuOuvert = ref(false)
</script>

<style scoped>
.navbar {
  background-color: rgba(30, 64, 175, 0.95);
  backdrop-filter: blur(10px);
  box-shadow: var(--shadow-lg);
  position: sticky;
  top: 0;
  z-index: 50;
  padding: 0;
}

.nav-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
}

.logo-text {
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--white);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: color 0.3s ease;
}

.logo-text:hover {
  color: var(--accent-color);
}

.nav-links {
  display: none;
}

@media (min-width: 768px) {
  .nav-links {
    display: flex;
    align-items: center;
    gap: 1.5rem;
  }
}

.nav-item {
  color: var(--white);
  font-weight: 500;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: color 0.3s ease;
}

.nav-item:hover {
  color: var(--accent-color);
}

.nav-item.active {
  color: var(--accent-color);
  font-weight: 700;
  border-bottom: 2px solid var(--accent-color);
  padding-bottom: 0.25rem;
}

.btn-primary {
  margin-left: 1rem;
}

.mobile-toggle {
  display: block;
}

@media (min-width: 768px) {
  .mobile-toggle {
    display: none;
  }
}

.toggle-btn {
  background: none;
  border: none;
  color: var(--white);
  cursor: pointer;
  padding: 0.5rem;
}

.icon {
  width: 24px;
  height: 24px;
}

.mobile-menu {
  background-color: var(--primary-dark);
  padding: 1rem 0;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

@media (min-width: 768px) {
  .mobile-menu {
    display: none;
  }
}

.mobile-item {
  display: block;
  color: var(--white);
  padding: 0.75rem 1rem;
  transition: background-color 0.3s ease;
}

.mobile-item:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

.mobile-btn {
  display: block;
  text-align: center;
  background-color: var(--accent-color);
  color: var(--text-dark);
  margin: 1rem;
  padding: 0.75rem;
  border-radius: var(--radius-full);
  font-weight: bold;
}

.mobile-btn:hover {
  background-color: var(--accent-hover);
}
</style>
