<template>
  <div class="page-container">
    <Legal />
  </div>
</template>

<script setup>
import Legal from '../components/Legal.vue'
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.page-container {
  @apply py-8;
}
</style>
