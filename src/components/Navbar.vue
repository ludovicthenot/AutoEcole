<template>
  <nav class="bg-blue-700 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <router-link to="/" class="flex items-center">
          <span class="text-xl font-bold text-white uppercase tracking-wide">
            Auto-École Pro
          </span>
        </router-link>
        
        <div class="hidden md:flex items-center space-x-2">
          <router-link to="/" class="text-white hover:bg-blue-800 px-3 py-2 rounded transition" active-class="bg-blue-900" exact-active-class="bg-blue-900">Accueil</router-link>
          <router-link to="/formules" class="text-white hover:bg-blue-800 px-3 py-2 rounded transition" active-class="bg-blue-900">Formules</router-link>
          <router-link to="/contact" class="bg-yellow-500 text-gray-900 px-4 py-2 rounded font-bold hover:bg-yellow-400 transition ml-2">
            S'inscrire
          </router-link>
        </div>

        <div class="lg:hidden">
          <button @click="menuOuvert = !menuOuvert" class="text-white p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path v-if="!menuOuvert" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div v-if="menuOuvert" class="lg:hidden bg-blue-800 py-2 border-t border-blue-600">
      <router-link to="/" @click="menuOuvert = false" class="block text-white px-4 py-2">Accueil</router-link>
      <router-link to="/formules" @click="menuOuvert = false" class="block text-white px-4 py-2">Formules</router-link>
      <router-link to="/contact" @click="menuOuvert = false" class="block text-white px-4 py-2 font-bold text-yellow-500">S'inscrire</router-link>
    </div>
  </nav>
</template>

<script setup>
import { ref } from 'vue'
const menuOuvert = ref(false)
</script>

<style scoped>
.router-link-active {
  font-weight: bold;
}
</style>
