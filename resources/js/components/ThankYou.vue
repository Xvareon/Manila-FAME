<template>
  <div class="card p-5 text-center shadow-sm">
    <h2 class="text-success mb-3">
      <i class="bi bi-check-circle-fill me-2"></i> Registration Successful!
    </h2>
    <p class="fs-5 mb-4">
      Thank you for registering for <strong>Manila FAME</strong>.  
      We’ve received your information successfully.
    </p>
    <p class="text-muted">
      You may close this window or return to the registration form to add another participant.
    </p>
    <button class="btn btn-primary mt-4" @click="goToStart">
      <i class="bi bi-arrow-repeat me-1"></i> Register Another
    </button>
  </div>
</template>

<script setup>
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();

function goToStart() {
  store.reset();
}
</script>
