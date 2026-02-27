<template>
  <section id="documents" class="documents-section">
    <div class="container">
      <h2 class="section-title">Documents à fournir pour l'inscription</h2>
      <p class="section-subtitle">
        Pour constituer votre dossier, merci de préparer les pièces originales suivantes. 
        Toute demande de pré-inscription en ligne sera validée après réception de ces documents.
      </p>

      <div class="documents-grid">
        <div class="doc-card">
          <h3 class="card-title">
            <svg class="card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
            </svg>
            Identité & Photos
          </h3>
          <ul class="doc-list">
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>Pièce d'identité en cours de validité (CNI ou Passeport)</span>
            </li>
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>4 e-photos d'identité (avec code ANTS)</span>
            </li>
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>Pour les mineurs : pièce d'identité d'un parent</span>
            </li>
          </ul>
        </div>

        <div class="doc-card">
          <h3 class="card-title">
            <svg class="card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Justificatifs & Santé
          </h3>
          <ul class="doc-list">
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>Justificatif de domicile de moins de 6 mois</span>
            </li>
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>Attestation d'hébergement + pièce d'identité de l'hébergeur (si besoin)</span>
            </li>
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>ASSR2 ou ASR (pour les moins de 21 ans)</span>
            </li>
            <li class="doc-item">
              <span class="bullet">•</span>
              <span>Certificat de participation à la JDC (17-25 ans)</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="doc-footer">
        <p class="footer-text">
          <strong>Note :</strong> Nous pouvons vous accompagner dans la numérisation de vos documents lors de votre passage à l'agence.
        </p>
        <div class="footer-actions">
          <router-link to="/contact" class="btn-primary">
            S'inscrire en ligne maintenant
          </router-link>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.documents-section {
  @apply py-16 bg-white;
}
.container {
  @apply max-w-4xl mx-auto px-4;
}
.section-title {
  @apply text-3xl font-bold text-blue-800 mb-8 text-center uppercase tracking-wide;
}
.section-subtitle {
  @apply text-gray-600 mb-12 text-center text-lg;
}
.documents-grid {
  @apply grid md:grid-cols-2 gap-8;
}
.doc-card {
  @apply bg-blue-50 p-6 rounded-xl border-l-4 border-blue-700 shadow-sm;
}
.card-title {
  @apply text-xl font-bold text-blue-900 mb-4 flex items-center gap-2;
}
.card-icon {
  @apply w-6 h-6;
}
.doc-list {
  @apply space-y-3 text-gray-700;
}
.doc-item {
  @apply flex items-start gap-2;
}
.bullet {
  @apply text-blue-700 font-bold;
}
.doc-footer {
  @apply mt-12 bg-yellow-50 p-6 rounded-xl border border-yellow-200 text-center;
}
.footer-text {
  @apply text-gray-800 font-medium;
}
.footer-actions {
  @apply mt-6;
}
.btn-primary {
  @apply bg-blue-700 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 transition shadow-md;
}
</style>
