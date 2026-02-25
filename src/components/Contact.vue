<template>
  <section id="contact" class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto px-4">
      <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">Contact & Pré-inscription</h2>
        <p class="text-gray-600 mb-8 text-center">
          Remplissez le formulaire ci-dessous pour nous contacter ou demander une pré-inscription.
        </p>
        
        <form @submit.prevent="envoyerFormulaire" class="space-y-4">
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 font-bold mb-2" for="nom">Nom Complet</label>
              <input 
                type="text" 
                id="nom" 
                v-model="formData.nom" 
                required 
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700"
                placeholder="Ex: Jean Dupont"
              >
            </div>
            <div>
              <label class="block text-gray-700 font-bold mb-2" for="tel">Téléphone</label>
              <input 
                type="tel" 
                id="tel" 
                v-model="formData.tel" 
                required 
                class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700"
                placeholder="Ex: 06 01 02 03 04"
              >
            </div>
          </div>

          <div>
            <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
            <input 
              type="email" 
              id="email" 
              v-model="formData.email" 
              required 
              class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700"
              placeholder="votre@email.fr"
            >
          </div>

          <div>
            <label class="block text-gray-700 font-bold mb-2">Type de Permis Souhaité</label>
            <select 
              v-model="formData.permis" 
              class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700"
            >
              <option value="B">Permis B (Classique)</option>
              <option value="AAC">Conduite Accompagnée</option>
              <option value="AM">Permis AM (BSER)</option>
              <option value="Moto">Permis Moto</option>
              <option value="Intensif">Stage Intensif</option>
            </select>
          </div>

          <div>
            <label class="block text-gray-700 font-bold mb-2" for="msg">Message / Questions</label>
            <textarea 
              id="msg" 
              v-model="formData.message" 
              rows="4" 
              class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700"
              placeholder="Votre message ici..."
            ></textarea>
          </div>

          <div class="flex items-center space-x-2">
            <input type="checkbox" id="rgpd" required class="w-4 h-4 text-blue-700">
            <label for="rgpd" class="text-sm text-gray-600">
              J'accepte que mes données soient utilisées pour traiter ma demande.
            </label>
          </div>

          <button 
            type="submit" 
            class="w-full bg-blue-700 text-white py-3 rounded font-bold hover:bg-blue-600 transition"
          >
            Envoyer ma demande
          </button>
        </form>
      </div>
    </div>
  </section>
</template>
