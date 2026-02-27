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

<style scoped lang="postcss">
@reference "tailwindcss";

.page-container {
  @apply py-8 bg-white min-h-screen;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.breadcrumb {
  @apply flex mb-8 text-sm text-gray-500;
}
.breadcrumb-list {
  @apply inline-flex items-center space-x-1 md:space-x-3;
}
.breadcrumb-item {
  @apply inline-flex items-center;
}
.breadcrumb-link {
  @apply hover:text-blue-700;
}
.breadcrumb-separator {
  @apply flex items-center;
}
.breadcrumb-current {
  @apply font-medium text-gray-900;
}
</style>
