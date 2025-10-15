<template>
  <router-view></router-view>
  <ToastNotification ref="toastRef" />
</template>

<script setup>
import { ref, provide } from 'vue';
import ToastNotification from './components/ToastNotification.vue';

const toastRef = ref(null);

// provide a global toast() method accessible from child components
provide('toast', (message, type = 'success') => {
  toastRef.value.showToast(message, type);
});
</script>
