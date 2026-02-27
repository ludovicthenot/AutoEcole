<template>
  <section id="stats" class="stats-section">
    <div class="container">
      <h2 class="stats-title">Nos Chiffres Clés</h2>
      
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number">78%</div>
          <div class="stat-label">Taux de réussite</div>
          <p class="stat-desc">Au permis B (moyenne annuelle)</p>
        </div>
        
        <div class="stat-card">
          <div class="stat-number">15+</div>
          <div class="stat-label">Nouveaux élèves</div>
          <p class="stat-desc">Par mois en moyenne</p>
        </div>
        
        <div class="stat-card">
          <div class="stat-number">100%</div>
          <div class="stat-label">Sérieux</div>
          <p class="stat-desc">Accompagnement personnalisé</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.stats-section {
  @apply py-12 bg-blue-50;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.stats-title {
  @apply text-2xl font-bold text-center mb-8;
}
.stats-grid {
  @apply grid grid-cols-1 md:grid-cols-3 gap-8 text-center;
}
.stat-card {
  @apply bg-white p-6 rounded shadow;
}
.stat-number {
  @apply text-4xl font-bold text-blue-700 mb-2;
}
.stat-label {
  @apply text-gray-700 font-bold uppercase;
}
.stat-desc {
  @apply text-sm text-gray-500 mt-2;
}
</style>
