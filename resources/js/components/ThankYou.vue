<template>
  <div class="mf-card p-5 text-center shadow-sm mx-auto" style="max-width: 600px;">
    <h2 class="h-display mb-3 text-success">
      <i class="bi bi-check-circle-fill me-2"></i> Registration Successful!
    </h2>

    <p class="fs-5 mb-4">
      Thank you for registering for <strong>Manila FAME</strong>.  
      We’ve received your information successfully.
    </p>

    <p class="mf-subtle mb-4">
      You may close this window or return to the registration form to add another participant.
    </p>

    <div class="d-flex justify-content-center gap-3">
      <!-- Landing Page Button -->
      <a href="/" class="btn btn-mf-primary px-4 py-2">
        <i class="bi bi-arrow-left ms-2"></i> Go Back to Home
      </a>

      <!-- Register Another Button -->
      <button class="btn btn-mf-primary px-4 py-2" @click="goToStart">
        <i class="bi bi-arrow-repeat me-2"></i> Register Another
      </button>
    </div>
  </div>
</template>

<script setup>
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();

function goToStart() {
  store.reset();
}
</script>

<style scoped>
/* Optional: slightly bigger icon to match "mf-card" style */
h2 i {
  font-size: 1.5rem;
  vertical-align: middle;
}
</style>
