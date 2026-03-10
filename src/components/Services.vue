<template>
  <section id="services" class="services-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Nos Formules & Tarifs</h2>
        <p class="section-subtitle">
          Choisissez la formation qui vous correspond. Toutes nos formules incluent un accompagnement personnalisé par Manuel, votre moniteur dédié.
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

<style scoped>
.services-section {
  padding: 6rem 0;
  background-color: #f9fafb;
}

.section-header {
  text-align: center;
  margin-bottom: 4rem;
  opacity: 0;
  animation: fadeIn 0.8s ease-out 0.2s forwards;
}

.section-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 1rem;
  position: relative;
  display: inline-block;
}

.section-title::after {
  content: '';
  display: block;
  width: 6rem;
  height: 0.375rem;
  background-color: var(--primary-color);
  margin: 1rem auto 0;
  border-radius: var(--radius-full);
}

.section-subtitle {
  color: var(--text-medium);
  font-size: 1.125rem;
  max-width: 42rem;
  margin: 1rem auto 0;
}

.services-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2rem;
  opacity: 0;
  animation: fadeIn 0.8s ease-out 0.4s forwards;
}

@media (min-width: 768px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1024px) {
  .services-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

.service-card {
  background-color: var(--white);
  border: 1px solid #f3f4f6;
  border-radius: 1rem;
  padding: 2rem;
  box-shadow: var(--shadow-lg);
  display: flex;
  flex-direction: column;
  transition: all 0.3s ease;
}

.service-card:hover {
  transform: translateY(-0.5rem);
  box-shadow: var(--shadow-xl);
}

.card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--text-dark);
  margin-bottom: 1rem;
}

.card-desc {
  color: var(--text-medium);
  margin-bottom: 1.5rem;
  flex-grow: 1;
}

.card-price {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--primary-color);
  margin-bottom: 1.5rem;
}

.card-features {
  margin-bottom: 2rem;
}

.feature-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 0.75rem;
  color: var(--text-medium);
}

.check-icon {
  color: #22c55e;
  margin-right: 0.75rem;
  font-weight: bold;
}

.card-btn {
  display: block;
  width: 100%;
  text-align: center;
  background-color: var(--text-dark);
  color: var(--white);
  padding: 0.75rem;
  border-radius: 0.75rem;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.card-btn:hover {
  background-color: var(--primary-color);
}

.payment-info {
  margin-top: 4rem;
  background-color: var(--white);
  padding: 2rem;
  border-radius: 1rem;
  text-align: center;
  border: 1px solid #e5e7eb;
  box-shadow: var(--shadow-sm);
  max-width: 48rem;
  margin-left: auto;
  margin-right: auto;
}

.info-title {
  font-size: 1.25rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

.info-text {
  margin-bottom: 0.5rem;
}

.info-note {
  font-size: 0.875rem;
  color: var(--text-medium);
  font-style: italic;
}
</style>
