<template>
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="contact-card">
        <h2 class="contact-title">Contact & Pré-inscription</h2>
        <p class="contact-subtitle">
          Remplissez le formulaire ci-dessous pour nous contacter ou demander une pré-inscription. 
          Nous vous répondrons par email avec la liste des documents à fournir.
        </p>
        
        <div v-if="envoye" class="success-alert" role="alert">
          <p class="alert-title">Demande envoyée !</p>
          <p>Merci {{ formData.prenom }}, nous avons bien reçu votre demande. Un email de confirmation vient de vous être envoyé.</p>
        </div>

        <form v-else @submit.prevent="envoyerFormulaire" class="contact-form">
          <div class="form-grid">
            <div class="form-group">
              <label class="label" for="nom">Nom</label>
              <input type="text" id="nom" v-model="formData.nom" required class="input" placeholder="Ex: Dupont">
            </div>
            <div class="form-group">
              <label class="label" for="prenom">Prénom</label>
              <input type="text" id="prenom" v-model="formData.prenom" required class="input" placeholder="Ex: Jean">
            </div>
          </div>

          <div class="form-grid">
            <div class="form-group">
              <label class="label" for="tel">Téléphone (prioritaire)</label>
              <input type="tel" id="tel" v-model="formData.tel" required class="input" placeholder="Ex: 06 01 02 03 04">
            </div>
            <div class="form-group">
              <label class="label" for="email">Email</label>
              <input type="email" id="email" v-model="formData.email" required class="input" placeholder="votre@email.fr">
            </div>
          </div>

          <div class="form-grid">
            <div class="form-group">
              <label class="label">Type de Permis Souhaité</label>
              <select v-model="formData.permis" class="select">
                <option value="B">Permis B (Classique)</option>
                <option value="AAC">Conduite Accompagnée</option>
                <option value="AM">Permis AM (BSER)</option>
                <option value="Moto">Permis Moto (A/A1/A2)</option>
                <option value="Intensif">Stage Intensif</option>
              </select>
            </div>
            <div class="form-group">
              <label class="label">Vos Disponibilités</label>
              <input type="text" v-model="formData.disponibilites" class="input" placeholder="Ex: Soirées, Mercredi après-midi...">
            </div>
          </div>

          <div class="form-group">
            <label class="label" for="msg">Message / Questions</label>
            <textarea id="msg" v-model="formData.message" rows="4" class="textarea" placeholder="Votre message ici..."></textarea>
          </div>

          <div class="checkbox-group">
            <input type="checkbox" id="rgpd" required class="checkbox">
            <label for="rgpd" class="checkbox-label">
              J'accepte que mes données soient traitées par Plop auto pour ma demande de pré-inscription, 
          conformément à la politique de confidentialité (RGPD).
            </label>
          </div>

          <button type="submit" class="submit-btn">
            Envoyer ma demande de pré-inscription
          </button>
        </form>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, reactive } from 'vue'

const envoye = ref(false)
const formData = reactive({
  nom: '',
  prenom: '',
  tel: '',
  email: '',
  permis: 'B',
  disponibilites: '',
  message: ''
})

const envoyerFormulaire = () => {
  console.log('Données envoyées :', formData)
  envoye.value = true
  window.scrollTo({ top: 0, behavior: 'smooth' })
}
</script>

<style scoped lang="postcss">
@reference "tailwindcss";

.contact-section {
  @apply py-16 bg-gray-100;
}
.container {
  @apply max-w-4xl mx-auto px-4;
}
.contact-card {
  @apply bg-white shadow-lg rounded-lg p-8;
}
.contact-title {
  @apply text-3xl font-bold text-blue-800 mb-6 text-center;
}
.contact-subtitle {
  @apply text-gray-600 mb-8 text-center;
}
.success-alert {
  @apply bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded shadow;
}
.alert-title {
  @apply font-bold;
}
.contact-form {
  @apply space-y-4;
}
.form-grid {
  @apply grid md:grid-cols-2 gap-4;
}
.form-group {
  @apply flex flex-col;
}
.label {
  @apply block text-gray-700 font-bold mb-2;
}
.input {
  @apply w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700;
}
.select {
  @apply w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700;
}
.textarea {
  @apply w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-700;
}
.checkbox-group {
  @apply flex items-start space-x-2 py-2;
}
.checkbox {
  @apply mt-1 w-4 h-4 text-blue-700;
}
.checkbox-label {
  @apply text-sm text-gray-600 leading-tight;
}
.submit-btn {
  @apply w-full bg-blue-700 text-white py-3 rounded font-bold hover:bg-blue-600 transition shadow-lg;
}
</style>
