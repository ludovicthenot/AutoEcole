<template>
  <section id="stats" class="stats-section">
    <div class="container">
      <h2 class="stats-title">Nos Chiffres Clés</h2>
      
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number">78%</div>
          <div class="stat-label">Taux de réussite</div>
          <p class="stat-desc">Au permis B (moyenne annuelle)</p>
        </div>
        
        <div class="stat-card">
          <div class="stat-number">15+</div>
          <div class="stat-label">Nouveaux élèves</div>
          <p class="stat-desc">Par mois en moyenne</p>
        </div>
        
        <div class="stat-card">
          <div class="stat-number">100%</div>
          <div class="stat-label">Sérieux</div>
          <p class="stat-desc">Accompagnement personnalisé</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.stats-section {
  padding: 5rem 0;
  background: linear-gradient(135deg, #eff6ff, #ffffff);
}

.stats-title {
  font-size: 1.875rem;
  font-weight: 800;
  text-align: center;
  margin-bottom: 3rem;
  color: var(--primary-dark);
  text-transform: uppercase;
  letter-spacing: 0.025em;
}

.stats-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.5rem;
  text-align: center;
}

@media (min-width: 768px) {
  .stats-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

.stat-card {
  background-color: var(--white);
  padding: 2.5rem;
  border-radius: 1.5rem;
  box-shadow: var(--shadow-xl);
  border: 1px solid #dbeafe;
  transition: all 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-0.5rem);
  box-shadow: var(--shadow-2xl);
}

.stat-number {
  font-size: 3.75rem;
  font-weight: 900;
  margin-bottom: 1rem;
  color: var(--primary-light);
  background: linear-gradient(to right, #2563eb, #60a5fa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.stat-label {
  color: #1f2937;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 1.125rem;
  letter-spacing: 0.05em;
}

.stat-desc {
  font-size: 0.875rem;
  color: var(--text-medium);
  margin-top: 0.75rem;
  font-weight: 500;
}
</style>
