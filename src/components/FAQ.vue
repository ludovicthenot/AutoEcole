<template>
  <section id="faq" class="faq-section">
    <div class="container">
      <h2 class="section-title">Questions Fréquentes</h2>
      
      <div class="faq-list">
        <div v-for="(item, index) in questions" :key="index" class="faq-item">
          <button @click="selectionnerQuestion(index)" class="faq-btn">
            <span>{{ item.question }}</span>
            <span class="faq-toggle">{{ indexActif === index ? '-' : '+' }}</span>
          </button>
          
          <div v-if="indexActif === index" class="faq-content">
            {{ item.reponse }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const indexActif = ref(0)

function selectionnerQuestion(index) {
  if (indexActif.value === index) {
    indexActif.value = -1
  } else {
    indexActif.value = index
  }
}

const questions = [
  {
    question: "Quels sont les documents à fournir ?",
    reponse: "Il faut une pièce d'identité, un justificatif de domicile, 4 photos d'identité et l'ASSR2 ou l'ASR."
  },
  {
    question: "Proposez-vous le paiement en plusieurs fois ?",
    reponse: "Oui, nous proposons le paiement en 3x ou 4x sans frais par carte bancaire."
  },
  {
    question: "Quels sont vos horaires de conduite ?",
    reponse: "Nos moniteurs sont disponibles du lundi au samedi, de 7h à 20h."
  },
  {
    question: "Où se trouve l'auto-école ?",
    reponse: "Nous sommes situés au 123 Avenue de la République, 75011 Paris."
  }
]
</script>

<style scoped>
.faq-section {
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
  color: var(--text-dark);
  margin-bottom: 3rem;
  text-align: center;
  position: relative;
  display: inline-block;
  width: 100%;
}

.section-title::after {
  content: '';
  display: block;
  width: 4rem;
  height: 0.25rem;
  background-color: var(--primary-light);
  margin: 1rem auto 0;
  border-radius: var(--radius-full);
}

.faq-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.faq-item {
  border: 1px solid #e5e7eb;
  border-radius: 1rem;
  overflow: hidden;
  transition: all 0.3s ease;
}

.faq-item:hover {
  box-shadow: var(--shadow-md);
}

.faq-btn {
  width: 100%;
  text-align: left;
  padding: 1.25rem 1.5rem;
  font-weight: 700;
  font-size: 1.125rem;
  color: #1f2937; /* Gray 800 */
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: var(--white);
  border: none;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.faq-btn:hover {
  background-color: #f9fafb; /* Gray 50 */
}

.faq-toggle {
  font-size: 1.5rem;
  color: var(--primary-light);
  font-weight: 300;
}

.faq-content {
  padding: 1.25rem 1.5rem;
  color: var(--text-medium);
  background-color: #f9fafb; /* Gray 50 */
  border-top: 1px solid #f3f4f6; /* Gray 100 */
  line-height: 1.6;
}
</style>
