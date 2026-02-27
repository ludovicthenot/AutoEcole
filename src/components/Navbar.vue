<template>
  <nav class="navbar">
    <div class="container">
      <div class="nav-wrapper">
        <router-link to="/" class="logo">
          <span class="logo-text">Plop auto</span>
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

<style scoped lang="postcss">
@reference "tailwindcss";

.navbar {
  @apply bg-blue-700 shadow-lg sticky top-0 z-50;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.nav-wrapper {
  @apply flex justify-between items-center h-16;
}
.logo {
  @apply flex items-center;
}
.logo-text {
  @apply text-xl font-bold text-white uppercase tracking-wide;
}
.nav-links {
  @apply hidden md:flex items-center space-x-2;
}
.nav-item {
  @apply text-white hover:bg-blue-800 px-3 py-2 rounded transition;
}
.nav-item.active {
  @apply bg-blue-900 font-bold;
}
.btn-primary {
  @apply bg-yellow-500 text-gray-900 px-4 py-2 rounded font-bold hover:bg-yellow-400 transition ml-2 shadow-md;
}
.mobile-toggle {
  @apply md:hidden;
}
.toggle-btn {
  @apply text-white p-2;
}
.icon {
  @apply w-6 h-6;
}
.mobile-menu {
  @apply md:hidden bg-blue-800 py-2 border-t border-blue-600 shadow-inner;
}
.mobile-item {
  @apply block text-white px-4 py-3 hover:bg-blue-900 transition;
}
.mobile-btn {
  @apply block text-center bg-yellow-500 text-gray-900 mx-4 my-2 py-3 rounded font-bold hover:bg-yellow-400 transition;
}
</style>
