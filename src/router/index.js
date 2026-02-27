import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ServicesView from '../views/ServicesView.vue'
import ContactView from '../views/ContactView.vue'
import LegalView from '../views/LegalView.vue'
import AboutView from '../views/AboutView.vue'
import FaqView from '../views/FaqView.vue'
import StatsView from '../views/StatsView.vue'
import TestimonialsView from '../views/TestimonialsView.vue'
import WhyUsView from '../views/WhyUsView.vue'
import DocumentsView from '../views/DocumentsView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/formules',
    name: 'services',
    component: ServicesView
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView
  },
  {
    path: '/s-inscrire',
    name: 'inscription',
    component: ContactView // Utilise la même vue car elle contient le formulaire de pré-inscription
  },
  {
    path: '/mentions-legales',
    name: 'legal',
    component: LegalView
  },
  {
    path: '/a-propos',
    name: 'about',
    component: AboutView
  },
  {
    path: '/faq',
    name: 'faq',
    component: FaqView
  },
  {
    path: '/stats',
    name: 'stats',
    component: StatsView
  },
  {
    path: '/avis',
    name: 'testimonials',
    component: TestimonialsView
  },
  {
    path: '/pourquoi-nous',
    name: 'whyus',
    component: WhyUsView
  },
  {
    path: '/documents',
    name: 'documents',
    component: DocumentsView
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0 }
  }
})

export default router
