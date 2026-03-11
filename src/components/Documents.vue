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
            <IdCard class="card-icon" />
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
            <FileText class="card-icon" />
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
import { IdCard, FileText } from 'lucide-vue-next';
</script>

<style scoped>
.documents-section {
  padding: 6rem 0;
  background-color: var(--white);
}

.container {
  max-width: 48rem;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.section-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--primary-dark);
  margin-bottom: 2rem;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.section-subtitle {
  color: var(--text-medium);
  margin-bottom: 4rem;
  text-align: center;
  font-size: 1.125rem;
  max-width: 42rem;
  margin-left: auto;
  margin-right: auto;
  line-height: 1.6;
}

.documents-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 2.5rem;
}

@media (min-width: 768px) {
  .documents-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

.doc-card {
  background-color: #eff6ff;
  padding: 2rem;
  border-radius: 1rem;
  border-left: 8px solid var(--primary-light);
  box-shadow: var(--shadow-md);
  transition: all 0.3s ease;
}

.doc-card:hover {
  box-shadow: var(--shadow-lg);
  transform: translateY(-2px);
}

.card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.card-icon {
  width: 2rem;
  height: 2rem;
  color: var(--primary-light);
}

.doc-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  color: var(--text-medium);
}

.doc-item {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
}

.bullet {
  color: var(--primary-light);
  font-weight: bold;
  font-size: 1.25rem;
  line-height: 1;
}

.doc-footer {
  margin-top: 4rem;
  background-color: #fefce8; /* Yellow 50 */
  padding: 2rem;
  border-radius: 1rem;
  border: 1px solid #fef08a; /* Yellow 200 */
  text-align: center;
  box-shadow: var(--shadow-sm);
}

.footer-text {
  color: #1f2937; /* Gray 800 */
  font-weight: 500;
  font-size: 1.125rem;
}

.footer-actions {
  margin-top: 2rem;
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
}

.btn-primary:hover {
  background-color: var(--primary-dark);
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
</style>
