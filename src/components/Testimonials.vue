<template>
  <section id="testimonials" class="testimonials-section">
    <div class="container">
      <h2 class="section-title">Avis de nos élèves</h2>
      
      <div class="testimonials-grid">
        <div v-for="(avis, index) in listeAvis" :key="index" class="testimonial-card">
          <p class="card-quote">"{{ avis.texte }}"</p>
          <div class="card-author">{{ avis.nom }}</div>
          <div class="card-info">{{ avis.info }}</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const listeAvis = [
  {
    nom: "Thomas L.",
    info: "Permis obtenu du 1er coup",
    texte: "Très bonne auto-école. Les moniteurs sont patients et expliquent très bien."
  },
  {
    nom: "Sarah M.",
    info: "Formation AAC",
    texte: "J'ai adoré ma formation. Le suivi est sérieux et on se sent en sécurité."
  },
  {
    nom: "Nicolas P.",
    info: "Stage intensif",
    texte: "Formation rapide et efficace. J'ai eu mon permis en seulement 3 semaines."
  }
]
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.testimonials-section {
  @apply py-12 bg-gray-50;
}
.container {
  @apply max-w-7xl mx-auto px-4 text-center;
}
.section-title {
  @apply text-2xl font-bold mb-8;
}
.testimonials-grid {
  @apply grid md:grid-cols-3 gap-6;
}
.testimonial-card {
  @apply bg-white p-6 rounded shadow border border-gray-100;
}
.card-quote {
  @apply text-gray-600 italic mb-4;
}
.card-author {
  @apply font-bold text-blue-700;
}
.card-info {
  @apply text-xs text-gray-400;
}
</style>
