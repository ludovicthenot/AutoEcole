<template>
  <section id="testimonials" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold mb-8">Avis de nos élèves</h2>
      
      <div class="grid md:grid-cols-3 gap-6">
        <div v-for="(avis, index) in listeAvis" :key="index" class="bg-white p-6 rounded shadow border border-gray-100">
          <p class="text-gray-600 italic mb-4">"{{ avis.texte }}"</p>
          <div class="font-bold text-blue-700">{{ avis.nom }}</div>
          <div class="text-xs text-gray-400">{{ avis.info }}</div>
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
