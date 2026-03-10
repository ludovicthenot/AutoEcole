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
    nom: "Lucas D.",
    info: "Permis B",
    texte: "Manuel m'a appris à démarrer en côte... sur du plat. Une expérience inoubliable, surtout quand il m'a dit que le frein à main, c'était 'juste pour décorer'."
  }
]
</script>

<style scoped>
.testimonials-section {
  padding: 6rem 0;
  background-color: #f9fafb;
}

.section-title {
  font-size: 2.25rem;
  font-weight: 800;
  margin-bottom: 4rem;
  color: var(--text-dark);
  text-align: center;
}

.testimonials-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
}

@media (min-width: 768px) {
  .testimonials-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

.testimonial-card {
  background-color: var(--white);
  padding: 2.5rem;
  border-radius: 1rem;
  box-shadow: var(--shadow-lg);
  border: 1px solid #f3f4f6;
  position: relative;
  transition: all 0.3s ease;
}

.testimonial-card:hover {
  box-shadow: var(--shadow-xl);
  transform: translateY(-2px);
}

.card-quote {
  color: var(--text-medium);
  font-style: italic;
  margin-bottom: 2rem;
  font-size: 1.125rem;
  line-height: 1.6;
}

.card-author {
  font-weight: 700;
  color: var(--primary-dark);
  font-size: 1.25rem;
}

.card-info {
  font-size: 0.875rem;
  color: var(--primary-light);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-top: 0.25rem;
}
</style>
