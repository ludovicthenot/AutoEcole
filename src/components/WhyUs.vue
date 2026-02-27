<template>
  <section id="why-us" class="why-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Pourquoi nous choisir ?</h2>
        <p class="section-subtitle">
          Découvrez ce qui fait la force de notre auto-école et pourquoi nos élèves nous font confiance.
        </p>
      </div>

      <div class="why-grid">
        <div class="why-card">
          <div class="card-icon">🏆</div>
          <h3 class="card-title">78% de Réussite</h3>
          <p class="card-text">
            Un taux de réussite officiel au-dessus de la moyenne départementale pour le permis B.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">🤝</div>
          <h3 class="card-title">Suivi Personnalisé</h3>
          <p class="card-text">
            Nous ne sommes pas une "usine" : chaque élève bénéficie d'un accompagnement sur mesure.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">🚗</div>
          <h3 class="card-title">Renault Clio</h3>
          <p class="card-text">
            Apprenez sur des véhicules récents et confortables, disponibles en manuel et automatique.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">💳</div>
          <h3 class="card-title">3x ou 4x Sans Frais</h3>
          <p class="card-text">
            Des facilités de paiement pour votre forfait 20h, afin de maîtriser votre budget.
          </p>
        </div>
      </div>

      <div class="section-footer">
        "Votre réussite est notre plus belle récompense."
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.why-section {
  @apply py-16 bg-blue-700 text-white;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.section-header {
  @apply text-center mb-12;
}
.section-title {
  @apply text-3xl font-bold border-b-4 border-yellow-500 inline-block pb-2 mb-4 uppercase tracking-wider;
}
.section-subtitle {
  @apply text-blue-100 max-w-2xl mx-auto;
}
.why-grid {
  @apply grid md:grid-cols-2 lg:grid-cols-4 gap-8;
}
.why-card {
  @apply bg-blue-800 p-8 rounded-lg text-center shadow-md border border-blue-600 hover:border-yellow-500 transition duration-300;
}
.card-icon {
  @apply text-4xl mb-4;
}
.card-title {
  @apply text-xl font-bold mb-3;
}
.card-text {
  @apply text-sm text-blue-100;
}
.section-footer {
  @apply mt-12 text-center italic text-blue-200;
}
</style>
