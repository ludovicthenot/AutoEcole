<template>
  <section id="about" class="about-section">
    <div class="container">
      <div class="about-wrapper">
        <div class="about-content">
          <h2 class="about-title">À Propos de nous</h2>
          <p class="about-intro">
            Située en plein cœur de la ville, <strong>Plop auto</strong> est née d'une passion pour l'enseignement de la conduite sécurisée. 
            Notre objectif est simple : vous offrir un accompagnement personnalisé pour faire de vous un conducteur serein et responsable.
          </p>
          
          <div class="feature-list">
            <div class="feature-item">
              <div class="icon-box">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </div>
              <div class="feature-text">
                <h3 class="feature-title"></h3>
                <p class="feature-desc">
                  Diplômé d'État avec plus de 10 ans d'expérience, Ludovic vous accompagne avec patience et pédagogie. 
                  Son approche personnalisée permet d'atteindre un taux de réussite de 78%.
                </p>
              </div>
            </div>

            <div class="feature-item">
              <div class="icon-box">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
              </div>
              <div class="feature-text">
                <h3 class="feature-title">Nos Véhicules : Renault Clio</h3>
                <p class="feature-desc">
                  Apprenez sur nos nouvelles **Renault Clio**, réputées pour leur confort et leur maniabilité. 
                  Nous disposons de modèles en **boîte manuelle** et en **boîte automatique** pour s'adapter à votre choix de formation.
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
              src="https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&q=80&w=800" 
              alt="Véhicule Auto-école" 
              class="about-image"
            />
            <div class="stat-badge">
              <div class="stat-num">78%</div>
              <div class="stat-label">Taux de réussite</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.about-section {
  @apply py-16 bg-white;
}
.container {
  @apply max-w-7xl mx-auto px-4;
}
.about-wrapper {
  @apply flex flex-col md:flex-row gap-12 items-center;
}
.about-content {
  @apply md:w-1/2;
}
.about-title {
  @apply text-3xl font-bold text-gray-900 mb-6 border-l-8 border-blue-700 pl-4 uppercase tracking-wider;
}
.about-intro {
  @apply text-gray-700 mb-6 text-lg leading-relaxed;
}
.feature-list {
  @apply space-y-6;
}
.feature-item {
  @apply flex items-start gap-4;
}
.icon-box {
  @apply bg-blue-100 p-3 rounded-full text-blue-700;
}
.icon {
  @apply w-6 h-6;
}
.feature-text {
  @apply flex-1;
}
.feature-title {
  @apply font-bold text-gray-900 text-xl mb-1;
}
.feature-desc {
  @apply text-gray-600;
}
.about-actions {
  @apply mt-10;
}
.btn-primary {
  @apply inline-block bg-blue-700 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 transition shadow-md;
}
.about-image-wrapper {
  @apply md:w-1/2;
}
.image-container {
  @apply relative;
}
.about-image {
  @apply rounded-2xl shadow-2xl border-4 border-white;
}
.stat-badge {
  @apply absolute -bottom-6 -left-6 bg-yellow-500 text-gray-900 p-6 rounded-xl shadow-xl hidden lg:block;
}
.stat-num {
  @apply text-3xl font-extrabold;
}
.stat-label {
  @apply font-bold text-sm uppercase;
}
</style>
