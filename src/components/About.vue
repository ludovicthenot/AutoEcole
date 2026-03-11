<template>
  <section id="about" class="about-section">
    <div class="container">
      <div class="about-wrapper">
        <div class="about-content">
          <h2 class="about-title">À Propos de Accident Auto</h2>
          <p class="about-intro">
            Située en plein cœur de la ville, <strong>Accident Auto</strong> est née d'une passion pour l'enseignement de la conduite sécurisée. 
            Notre objectif est simple : vous offrir un accompagnement personnalisé pour faire de vous un conducteur serein et responsable.
          </p>
          
          <div class="feature-list">
            <div class="feature-item">
              <div class="icon-box">
                <MapPin />
              </div>
              <div class="feature-text">
                <h3 class="feature-title">Emplacement Idéal</h3>
                <p class="feature-desc">
                  Proche des lycées et des transports en commun, notre agence est facile d'accès pour tous nos élèves.
                </p>
              </div>
            </div>

            <div class="feature-item">
              <div class="icon-box">
                <CarFront />
              </div>
              <div class="feature-text">
                <h3 class="feature-title">Nos Véhicules : Renault Clio</h3>
                <p class="feature-desc">
                  Apprenez sur nos nouvelles <strong>Renault Clio</strong>, réputées pour leur confort et leur maniabilité. 
                  Nous disposons de modèles en <strong>boîte manuelle</strong> et en <strong>boîte automatique</strong> pour s'adapter à votre choix de formation.
                </p>
              </div>
            </div>

            <div class="feature-item">
              <div class="icon-box">
                <UserCheck />
              </div>
              <div class="feature-text">
                <h3 class="feature-title">Votre Moniteur : Manuel</h3>
                <p class="feature-desc">
                  Tout juste titulaire de son permis depuis mardi dernier, Manuel découvrira la route en même temps que vous !
                  Sa méthode pédagogique est simple : "Si je passe, tu passes". Profitez de sa fraîcheur (et de ses hésitations aux ronds-points) pour une formation pleine de surprises.
                </p>
              </div>
            </div>
          </div>

          <div class="about-actions">
            <router-link to="/formules" class="btn-primary">
              Découvrir nos formations
            </router-link>
          </div>
        </div>

        <div class="about-image-wrapper">
          <div class="image-container">
            <img 
              src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" 
              alt="Moniteur auto-école" 
              class="about-image"
            />
            <div class="stat-badge">
              <div class="stat-num">98%</div>
              <div class="stat-label">de Satisfaction</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { MapPin, CarFront, UserCheck } from 'lucide-vue-next';
</script>

<style scoped>
.about-section {
  padding: 6rem 0;
  background-color: var(--white);
}

.about-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4rem;
}

@media (min-width: 768px) {
  .about-wrapper {
    flex-direction: row;
  }
}

.about-content {
  flex: 1;
}

.about-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 2rem;
  border-left: 8px solid var(--primary-color);
  padding-left: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.about-intro {
  color: var(--text-medium);
  margin-bottom: 2rem;
  font-size: 1.125rem;
  line-height: 1.75;
}

.feature-list {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.feature-item {
  display: flex;
  align-items: flex-start;
  gap: 1.25rem;
}

.icon-box {
  background-color: #eff6ff;
  padding: 1rem;
  border-radius: 0.75rem;
  color: var(--primary-color);
  box-shadow: var(--shadow-sm);
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon {
  width: 2rem;
  height: 2rem;
}

.feature-text {
  flex: 1;
}

.feature-title {
  font-weight: 700;
  color: var(--text-dark);
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

.feature-desc {
  color: var(--text-medium);
  line-height: 1.6;
}

.about-actions {
  margin-top: 3rem;
}

.btn-primary {
  display: inline-block;
  background-color: var(--primary-color);
  color: var(--white);
  padding: 1rem 2.5rem;
  border-radius: var(--radius-full);
  font-weight: bold;
  transition: all 0.3s ease;
  box-shadow: var(--shadow-lg);
  text-decoration: none;
}

.btn-primary:hover {
  background-color: var(--primary-dark);
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}

.about-image-wrapper {
  flex: 1;
}

.image-container {
  position: relative;
}

.about-image {
  width: 100%;
  border-radius: 1.5rem;
  box-shadow: var(--shadow-2xl);
  border: 4px solid var(--white);
  transform: rotate(1deg);
  transition: transform 0.5s ease;
}

.about-image:hover {
  transform: rotate(0);
}

@media (max-width: 768px) {
  .about-image {
    transform: none;
  }
}

.stat-badge {
  position: absolute;
  bottom: -2rem;
  left: -2rem;
  background-color: var(--accent-color);
  color: var(--text-dark);
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: var(--shadow-xl);
  transform: rotate(-3deg);
  transition: transform 0.3s ease;
}

.stat-badge:hover {
  transform: rotate(0);
}

@media (max-width: 1024px) {
  .stat-badge {
    display: none;
  }
}

.stat-num {
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 0.25rem;
  line-height: 1;
}

.stat-label {
  font-weight: 700;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
</style>
