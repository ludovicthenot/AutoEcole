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
              <input 
                type="text" 
                id="nom" 
                v-model="formData.nom" 
                required 
                minlength="2"
                class="input" 
                placeholder="Ex: Dupont"
              >
              <span class="error-message">Le nom est obligatoire et doit contenir au moins 2 caractères.</span>
            </div>
            <div class="form-group">
              <label class="label" for="prenom">Prénom</label>
              <input 
                type="text" 
                id="prenom" 
                v-model="formData.prenom" 
                required 
                minlength="2"
                class="input" 
                placeholder="Ex: Jean"
              >
              <span class="error-message">Le prénom est obligatoire et doit contenir au moins 2 caractères.</span>
            </div>
          </div>

          <div class="form-grid">
            <div class="form-group">
              <label class="label" for="tel">Téléphone (prioritaire)</label>
              <input 
                type="tel" 
                id="tel" 
                v-model="formData.tel" 
                required 
                pattern="^0[1-9][0-9]{8}$"
                class="input" 
                placeholder="Ex: 0601020304"
              >
              <span class="error-message">Format invalide : 10 chiffres sans espaces (ex: 0601020304).</span>
            </div>
            <div class="form-group">
              <label class="label" for="email">Email</label>
              <input 
                type="email" 
                id="email" 
                v-model="formData.email" 
                required 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                class="input" 
                placeholder="votre@email.fr"
              >
              <span class="error-message">Veuillez saisir une adresse email valide.</span>
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
            <textarea 
              id="msg" 
              v-model="formData.message" 
              rows="4" 
              class="textarea" 
              required
              minlength="20"
              maxlength="500"
              placeholder="Votre message ici... (20 caractères minimum)"
            ></textarea>
            <span class="error-message">Le message doit contenir entre 20 et 500 caractères.</span>
          </div>

          <!-- Protection Anti-Spam (Honeypot + Captcha) -->
          <div class="bot-field">
            <label for="bot-check">Ne pas remplir ce champ</label>
            <input type="text" id="bot-check" v-model="botCheck" tabindex="-1" autocomplete="off">
          </div>

          <div class="form-group">
            <label class="label" for="captcha">Sécurité : Recopiez le code <span class="captcha-code">{{ captchaCode }}</span></label>
            <input 
              type="text" 
              id="captcha" 
              v-model="userCaptcha" 
              required 
              class="input" 
              placeholder="Entrez le code ci-dessus"
            >
            <span v-if="captchaError" class="error-message" style="display: block;">Le code de sécurité est incorrect.</span>
          </div>

          <div class="checkbox-group">
            <input type="checkbox" id="rgpd" required class="checkbox">
            <label for="rgpd" class="checkbox-label">
              J'accepte que mes données soient traitées par Accident Auto pour ma demande de pré-inscription, 
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
import { ref, reactive, onMounted } from 'vue'

const envoye = ref(false)
const botCheck = ref('') // Honeypot field
const userCaptcha = ref('')
const captchaCode = ref('')
const captchaError = ref(false)

const generateCaptcha = () => {
  const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789'
  let result = ''
  for (let i = 0; i < 4; i++) {
    result += chars.charAt(Math.floor(Math.random() * chars.length))
  }
  captchaCode.value = result
}

const formData = reactive({
  nom: '',
  prenom: '',
  tel: '',
  email: '',
  permis: 'B',
  disponibilites: '',
  message: ''
})

onMounted(() => {
  generateCaptcha()
})

const envoyerFormulaire = () => {
  // Vérification Honeypot (doit être vide)
  if (botCheck.value) {
    console.warn('Spam détecté (honeypot rempli)')
    return
  }

  // Vérification Captcha
  if (userCaptcha.value.toUpperCase() !== captchaCode.value) {
    captchaError.value = true
    generateCaptcha() // Nouveau code
    userCaptcha.value = ''
    return
  }
  
  captchaError.value = false
  console.log('Données envoyées :', formData)
  
  // Simulation d'envoi (ici on vide le formulaire après succès)
  envoye.value = true
  
  // Réinitialisation du formulaire
  Object.assign(formData, {
    nom: '',
    prenom: '',
    tel: '',
    email: '',
    permis: 'B',
    disponibilites: '',
    message: ''
  })
  userCaptcha.value = ''
  generateCaptcha() // Nouveau code pour la prochaine fois
  
  window.scrollTo({ top: 0, behavior: 'smooth' })
}
</script>

<style scoped>
.bot-field {
  display: none;
  visibility: hidden;
  opacity: 0;
  position: absolute;
  left: -9999px;
}

.captcha-code {
  background-color: #e5e7eb;
  padding: 0.25rem 0.5rem;
  border-radius: 0.25rem;
  font-family: monospace;
  font-size: 1.1rem;
  letter-spacing: 2px;
  font-weight: bold;
  user-select: none;
  color: var(--primary-dark);
  margin-left: 0.5rem;
  display: inline-block;
  transform: skew(-5deg);
  border: 1px dashed #9ca3af;
}

.contact-section {
  padding: 6rem 0;
  background-color: #f3f4f6;
}

.contact-card {
  background-color: var(--white);
  border-radius: 1.5rem;
  padding: 2.5rem;
  box-shadow: var(--shadow-xl);
  border: 1px solid #e5e7eb;
}

.contact-title {
  font-size: 2.25rem;
  font-weight: 800;
  color: var(--primary-dark);
  margin-bottom: 1.5rem;
  text-align: center;
}

.contact-subtitle {
  color: var(--text-medium);
  margin-bottom: 2.5rem;
  text-align: center;
  font-size: 1.125rem;
  line-height: 1.6;
}

.success-alert {
  background-color: #f0fdf4;
  border-left: 4px solid #22c55e;
  color: #15803d;
  padding: 1.5rem;
  margin-bottom: 2rem;
  border-radius: 0.5rem;
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.alert-title {
  font-weight: 700;
  font-size: 1.125rem;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.form-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 1.5rem;
}

@media (min-width: 768px) {
  .form-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.label {
  display: block;
  color: #1f2937;
  font-weight: 700;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-left: 0.25rem;
}

.input,
.select,
.textarea {
  width: 100%;
  border: 1px solid #d1d5db;
  background-color: #f9fafb;
  padding: 1rem;
  border-radius: 0.75rem;
  font-family: inherit;
  font-size: 1rem;
  transition: all 0.3s ease;
}

.input:focus,
.select:focus,
.textarea:focus {
  outline: none;
  border-color: var(--primary-light);
  box-shadow: 0 0 0 4px #dbeafe;
  background-color: var(--white);
}

.textarea {
  min-height: 150px;
  resize: vertical;
}

.input:invalid:not(:placeholder-shown) {
  border-color: #ef4444;
  background-color: #fef2f2;
}

.input:valid:not(:placeholder-shown) {
  border-color: #22c55e;
}

.error-message {
  display: none;
  color: #ef4444;
  font-size: 0.875rem;
  margin-top: 0.375rem;
  font-weight: 500;
  animation: fadeIn 0.3s ease-in-out;
}

.input:not(:placeholder-shown):invalid + .error-message,
.textarea:not(:placeholder-shown):invalid + .error-message {
  display: block;
}

.checkbox-group {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  padding: 1rem;
  background-color: #eff6ff;
  border-radius: 0.75rem;
  border: 1px solid #dbeafe;
}

.checkbox {
  margin-top: 0.25rem;
  width: 1.25rem;
  height: 1.25rem;
  accent-color: var(--primary-color);
  cursor: pointer;
}

.checkbox-label {
  font-size: 0.875rem;
  color: var(--text-medium);
  line-height: 1.5;
  cursor: pointer;
}

.submit-btn {
  width: 100%;
  background: linear-gradient(to right, var(--primary-color), var(--primary-light));
  color: var(--white);
  padding: 1rem;
  border-radius: 0.75rem;
  font-weight: bold;
  font-size: 1.125rem;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: var(--shadow-lg);
}

.submit-btn:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
  background: linear-gradient(to right, var(--primary-dark), var(--primary-color));
}
</style>
