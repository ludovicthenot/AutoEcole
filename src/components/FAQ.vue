<template>
  <section id="faq" class="py-12 bg-white">
    <div class="max-w-3xl mx-auto px-4">
      <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center border-b-2 border-blue-700 inline-block">
        Questions Fréquentes
      </h2>
      
      <div class="space-y-2">
        <div v-for="(item, index) in questions" :key="index" class="border border-gray-200 rounded">
          <button 
            @click="selectionnerQuestion(index)" 
            class="w-full text-left px-4 py-3 font-bold flex justify-between items-center hover:bg-gray-50"
          >
            <span>{{ item.question }}</span>
            <span>{{ indexActif === index ? '-' : '+' }}</span>
          </button>
          
          <div v-if="indexActif === index" class="px-4 py-3 text-gray-700 bg-gray-50 border-t border-gray-200">
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
