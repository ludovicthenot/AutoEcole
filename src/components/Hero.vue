<template>
  <section id="home" class="hero-section">
    <div class="container">
      <div class="hero-card">
        <div class="hero-content">
          <h1 class="hero-title">
            Bienvenue chez Accident Auto
          </h1>
          <p class="hero-text">
            Nous vous accompagnons dans l'obtention de votre permis de conduire. 
            Avec un taux de réussite de <strong class="highlight">78%</strong>, nous sommes fiers de la qualité de notre formation.
          </p>
          
          <div class="hero-actions">
            <router-link to="/contact" class="btn-fill">
              S'inscrire en ligne
            </router-link>
            <router-link to="/formules" class="btn-outline">
              Voir nos tarifs
            </router-link>
          </div>
        </div>

        <div class="hero-image-wrapper">
          <img 
            src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=80&w=800" 
            alt="Apprentissage conduite" 
            class="hero-image"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.hero-section {
  background: linear-gradient(to right, #f9fafb, #f3f4f6);
  padding: 5rem 0;
  animation: fadeIn 1s ease-out;
}

@media (min-width: 1024px) {
  .hero-section {
    padding: 7rem 0;
  }
}

.hero-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 3rem;
}

@media (min-width: 768px) {
  .hero-card {
    flex-direction: row;
  }
}

.hero-content {
  flex: 1;
  opacity: 0;
  animation: fadeIn 1s ease-out 0.2s forwards;
}

.hero-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--text-dark);
  line-height: 1.2;
  margin-bottom: 1.5rem;
}

@media (min-width: 768px) {
  .hero-title {
    font-size: 3.75rem;
  }
}

.hero-text {
  font-size: 1.125rem;
  color: var(--text-medium);
  line-height: 1.75;
  margin-bottom: 2rem;
}

@media (min-width: 768px) {
  .hero-text {
    font-size: 1.25rem;
  }
}

.highlight {
  color: var(--primary-color);
  background-color: #dbeafe;
  padding: 0.25rem 0.5rem;
  border-radius: var(--radius-sm);
}

.hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  padding-top: 1rem;
}

.btn-fill {
  background-color: var(--primary-color);
  color: var(--white);
  padding: 1rem 2rem;
  border-radius: var(--radius-full);
  box-shadow: var(--shadow-lg);
  font-weight: bold;
  font-size: 1.125rem;
  transition: all 0.3s ease;
  display: inline-block;
}

.btn-fill:hover {
  background-color: var(--primary-dark);
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
}

.btn-outline {
  border: 2px solid var(--primary-color);
  color: var(--primary-color);
  padding: 1rem 2rem;
  border-radius: var(--radius-full);
  font-weight: bold;
  font-size: 1.125rem;
  transition: all 0.3s ease;
  display: inline-block;
}

.btn-outline:hover {
  background-color: #eff6ff;
}

.hero-image-wrapper {
  flex: 1;
  position: relative;
  opacity: 0;
  animation: fadeIn 1s ease-out 0.5s forwards;
}

.hero-image {
  width: 100%;
  height: auto;
  border-radius: 1rem;
  box-shadow: var(--shadow-2xl);
  transform: rotate(2deg);
  transition: transform 0.5s ease;
}

.hero-image:hover {
  transform: rotate(0);
}

@media (max-width: 768px) {
  .hero-image {
    transform: none;
  }
}
</style>
