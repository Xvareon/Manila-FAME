import { createRouter, createWebHistory } from 'vue-router';
import Register from '../views/Register.vue';

const routes = [
  {
    path: '/',
    redirect: '/register'
  },
  {
    path: '/register',
    name: 'register',
    component: Register
  }
];

export default createRouter({
  history: createWebHistory(),
  routes,
});