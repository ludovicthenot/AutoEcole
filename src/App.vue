<template>
  <div class="font-sans text-gray-900 flex flex-col min-h-screen">
    <Navbar />

    <main class="flex-grow">
      <router-view />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
</script>

<style>
@import "tailwindcss";

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  padding: 0;
  background-color: #f9fafb;
}
</style>
