<template>
  <section id="services" class="services-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Nos Formules & Tarifs</h2>
        <p class="section-subtitle">
          Nous proposons différentes formations pour répondre à vos besoins.
        </p>
      </div>
      
      <div class="services-grid">
        <div v-for="(formule, index) in listeFormules" :key="index" class="service-card">
          <h3 class="card-title">{{ formule.nom }}</h3>
          <p class="card-desc">{{ formule.description }}</p>
          
          <div class="card-price">{{ formule.prix }}</div>
          
          <ul class="card-features">
            <li v-for="(point, pIndex) in formule.points" :key="pIndex" class="feature-item">
              <span class="check-icon">✔</span> {{ point }}
            </li>
          </ul>
          
          <router-link to="/contact" class="card-btn">
            Choisir cette formule
          </router-link>
        </div>
      </div>

      <div class="payment-info">
        <h3 class="info-title">Facilités de paiement & Tarifs</h3>
        <p class="info-text">Possibilité de régler en 3 fois ou 4 fois sans frais pour les forfaits 20h.</p>
        <p class="info-note">Tarif dégressif pour les heures supplémentaires au-delà des 20h obligatoires.</p>
      </div>
    </div>
  </section>
</template>

<script setup>
const listeFormules = [
  {
    nom: "Permis B (Classique)",
    description: "Formation complète sur boîte manuelle.",
    prix: "990 €",
    points: ["20h de conduite", "Code illimité", "Livret pédagogique"]
  },
  {
    nom: "AAC (Accompagnée)",
    description: "Apprentissage dès 15 ans avec les parents.",
    prix: "1150 €",
    points: ["20h de conduite", "Rendez-vous pédagogiques", "Taux de réussite élevé"]
  },
  {
    nom: "Permis AM",
    description: "Formation pour scooter 50cm3 (dès 14 ans).",
    prix: "250 €",
    points: ["8h de formation pratique", "Attestation immédiate"]
  },
  {
    nom: "Permis Moto (A2)",
    description: "Formation complète sur piste privée.",
    prix: "750 €",
    points: ["Plateau et circulation", "Piste privée", "Équipement fourni"]
  },
  {
    nom: "Stage Intensif",
    description: "Passez votre permis en 3 semaines.",
    prix: "1450 €",
    points: ["Planning accéléré", "Priorité aux examens"]
  },
  {
    nom: "Boîte Automatique",
    description: "Formation simplifiée sans passage de vitesses.",
    prix: "790 €",
    points: ["13h de conduite minimum", "Plus simple et rapide"]
  }
]
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.services-section {
  @apply py-16 bg-white;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.section-header {
  @apply text-center mb-12;
}
.section-title {
  @apply text-3xl font-bold text-gray-900 border-b-4 border-blue-700 inline-block pb-2 mb-4;
}
.section-subtitle {
  @apply text-gray-600;
}
.services-grid {
  @apply grid md:grid-cols-2 lg:grid-cols-3 gap-6;
}
.service-card {
  @apply border border-gray-200 rounded p-6 shadow hover:shadow-lg transition;
}
.card-title {
  @apply text-xl font-bold text-blue-700 mb-4;
}
.card-desc {
  @apply text-gray-700 text-sm mb-4;
}
.card-price {
  @apply text-2xl font-bold text-gray-900 mb-4;
}
.card-features {
  @apply text-sm text-gray-600 space-y-2 mb-6;
}
.feature-item {
  @apply flex items-center;
}
.check-icon {
  @apply text-green-600 mr-2;
}
.card-btn {
  @apply block w-full text-center bg-blue-700 text-white py-2 rounded hover:bg-blue-600 font-bold transition;
}
.payment-info {
  @apply mt-12 bg-gray-100 p-6 rounded text-center border-l-8 border-blue-700;
}
.info-title {
  @apply text-xl font-bold mb-2;
}
.info-text {
  @apply mb-2;
}
.info-note {
  @apply text-sm text-gray-600 italic;
}
</style>
