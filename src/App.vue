<template>
  <div class="app-layout">
    <Navbar />

    <main class="main-content">
      <router-view />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
</script>

<style lang="postcss">
@reference "tailwindcss";

.app-layout {
  @apply font-sans text-gray-900 flex flex-col min-h-screen;
}

.main-content {
  @apply flex-grow;
}

body {
  margin: 0;
  padding: 0;
  background-color: #f9fafb;
}
</style>
