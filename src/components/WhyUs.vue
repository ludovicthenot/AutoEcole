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
            <Trophy />
          </div>
          <h3 class="card-title">78% de Réussite</h3>
          <p class="card-text">
            Un taux de réussite officiel au-dessus de la moyenne départementale pour le permis B.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <Handshake />
          </div>
          <h3 class="card-title">Suivi Personnalisé</h3>
          <p class="card-text">
            Nous ne sommes pas une "usine" : chaque élève bénéficie d'un accompagnement sur mesure.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <Car />
          </div>
          <h3 class="card-title">Renault Clio</h3>
          <p class="card-text">
            Apprenez sur des véhicules récents et confortables, disponibles en manuel et automatique.
          </p>
        </div>

        <div class="why-card">
          <div class="card-icon">
            <CreditCard />
          </div>
          <h3 class="card-title">3x ou 4x Sans Frais</h3>
          <p class="card-text">
            Des facilités de paiement pour votre forfait 20h, afin de maîtriser votre budget.
          </p>
        </div>
      </div>
      
      <div class="section-footer">
        "Notre priorité : faire de vous un conducteur sûr et responsable."
      </div>
    </div>
  </section>
</template>

<script setup>
import { Trophy, Handshake, Car, CreditCard } from 'lucide-vue-next';
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
