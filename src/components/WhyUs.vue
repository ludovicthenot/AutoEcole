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
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
              <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
              <path d="M4 22h16"></path>
              <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
              <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
              <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
            </svg>
          </div>
          <h3 class="card-title">78% de Réussite</h3>
          <p class="card-text">
            Un taux de réussite officiel au-dessus de la moyenne départementale pour le permis B.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h3 class="card-title">Suivi Personnalisé</h3>
          <p class="card-text">
            Nous ne sommes pas une "usine" : chaque élève bénéficie d'un accompagnement sur mesure.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 16H9m10 0h3v-3.15a1 1 0 0 0-.84-.99L16 11l-2.7-3.6a1 1 0 0 0-.8-.4H5.24a2 2 0 0 0-1.8 1.1l-.8 1.63A6 6 0 0 0 2 12.42V16h2"></path>
              <circle cx="6.5" cy="17.5" r="2.5"></circle>
              <circle cx="16.5" cy="17.5" r="2.5"></circle>
            </svg>
          </div>
          <h3 class="card-title">Renault Clio</h3>
          <p class="card-text">
            Apprenez sur des véhicules récents et confortables, disponibles en manuel et automatique.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="14" x="2" y="5" rx="2"></rect>
              <line x1="2" x2="22" y1="10" y2="10"></line>
            </svg>
          </div>
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

<style scoped>
.why-section {
  padding: 6rem 0;
  background-color: var(--primary-dark);
  color: var(--white);
  position: relative;
  overflow: hidden;
}

.section-header {
  text-align: center;
  margin-bottom: 5rem;
}

.section-title {
  font-size: 2.25rem;
  font-weight: 800;
  margin-bottom: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--white);
}

.section-subtitle {
  color: #bfdbfe;
  font-size: 1.125rem;
  max-width: 48rem;
  margin: 0 auto;
  line-height: 1.75;
}

.why-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.5rem;
}

@media (min-width: 768px) {
  .why-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1024px) {
  .why-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

.why-card {
  background-color: rgba(30, 58, 138, 0.5);
  backdrop-filter: blur(4px);
  padding: 2rem;
  border-radius: 1rem;
  text-align: center;
  border: 1px solid var(--primary-color);
  transition: all 0.3s ease;
}

.why-card:hover {
  border-color: var(--accent-hover);
  background-color: rgba(30, 58, 138, 0.8);
  transform: translateY(-0.5rem);
}

.card-icon {
  font-size: 3rem;
  margin-bottom: 1.5rem;
  background-color: var(--primary-color);
  width: 5rem;
  height: 5rem;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: var(--radius-full);
  box-shadow: var(--shadow-lg);
  color: var(--accent-color);
}

.card-title {
  font-size: 1.25rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: var(--white);
}

.card-text {
  color: #dbeafe;
  line-height: 1.6;
}

.section-footer {
  margin-top: 4rem;
  text-align: center;
  font-size: 1.25rem;
  font-style: italic;
  color: #bfdbfe;
  font-weight: 500;
}
</style>
