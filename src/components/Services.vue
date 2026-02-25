<template>
  <section id="services" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 border-b-4 border-blue-700 inline-block pb-2 mb-4">
          Nos Formules & Tarifs
        </h2>
        <p class="text-gray-600">
          Nous proposons différentes formations pour répondre à vos besoins.
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div v-for="(formule, index) in listeFormules" :key="index" 
             class="border border-gray-200 rounded p-6 shadow hover:shadow-lg transition">
          <h3 class="text-xl font-bold text-blue-700 mb-4">{{ formule.nom }}</h3>
          <p class="text-gray-700 text-sm mb-4">{{ formule.description }}</p>
          
          <div class="text-2xl font-bold text-gray-900 mb-4">{{ formule.prix }}</div>
          
          <ul class="text-sm text-gray-600 space-y-2 mb-6">
            <li v-for="(point, pIndex) in formule.points" :key="pIndex" class="flex items-center">
              <span class="text-green-600 mr-2">✔</span> {{ point }}
            </li>
          </ul>
          
          <router-link to="/contact" class="block w-full text-center bg-blue-700 text-white py-2 rounded hover:bg-blue-600 font-bold transition">
            Choisir cette formule
          </router-link>
        </div>
      </div>

      <div class="mt-12 bg-gray-100 p-6 rounded text-center border-l-8 border-blue-700">
        <h3 class="text-xl font-bold mb-2">Facilités de paiement & Tarifs</h3>
        <p class="mb-2">Possibilité de régler en 3 fois ou 4 fois sans frais pour les forfaits 20h.</p>
        <p class="text-sm text-gray-600 italic">Tarif dégressif pour les heures supplémentaires au-delà des 20h obligatoires.</p>
      </div>
    </div>
  </section>
</template>

<script setup>
const listeFormules = [
  {
    nom: "Permis B (Classique)",
    description: "Formation complète sur boîte manuelle.",
    prix: "990 €",
    points: ["20h de conduite", "Code illimité", "Livret pédagogique"]
  },
  {
    nom: "AAC (Accompagnée)",
    description: "Apprentissage dès 15 ans avec les parents.",
    prix: "1150 €",
    points: ["20h de conduite", "Rendez-vous pédagogiques", "Taux de réussite élevé"]
  },
  {
    nom: "Permis AM",
    description: "Formation pour scooter 50cm3 (dès 14 ans).",
    prix: "250 €",
    points: ["8h de formation pratique", "Attestation immédiate"]
  },
  {
    nom: "Permis Moto (A2)",
    description: "Formation complète sur piste privée.",
    prix: "750 €",
    points: ["Plateau et circulation", "Piste privée", "Équipement fourni"]
  },
  {
    nom: "Stage Intensif",
    description: "Passez votre permis en 3 semaines.",
    prix: "1450 €",
    points: ["Planning accéléré", "Priorité aux examens"]
  },
  {
    nom: "Boîte Automatique",
    description: "Formation simplifiée sans passage de vitesses.",
    prix: "790 €",
    points: ["13h de conduite minimum", "Plus simple et rapide"]
  }
]
</script>
