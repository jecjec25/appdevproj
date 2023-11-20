import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/LandingPage/home.vue'

const routes = [
  {
    path: '/',
    component: IndexPage
  },
  {
    path: '/finance',
    name: 'finance',
    // route level code-splitting
    // this generates a separate chunk (finance.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "finance" */ '../views/LandingPage/finance.vue')
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
