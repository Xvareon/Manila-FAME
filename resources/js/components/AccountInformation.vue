<template>
  <div class="mf-card p-5 shadow-sm">
    <!-- Title -->
    <h4 class="h-display mb-4 text-center text-uppercase">
      Step 1: Account Information
    </h4>

    <!-- Error Box -->
    <div v-if="errors.length" class="alert alert-danger rounded-3 py-3 px-4 mb-4">
      <ul class="mb-0 small">
        <li v-for="(err, index) in errors" :key="index">{{ err }}</li>
      </ul>
    </div>

    <!-- Form -->
    <form @submit.prevent="nextStep">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label fw-semibold text-uppercase small">First Name</label>
          <input
            v-model="store.account.first_name"
            class="form-control brand-input"
            type="text"
            placeholder="Enter your first name"
          />
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label fw-semibold text-uppercase small">Last Name</label>
          <input
            v-model="store.account.last_name"
            class="form-control brand-input"
            type="text"
            placeholder="Enter your last name"
          />
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold text-uppercase small">Email</label>
        <input
          v-model="store.account.email"
          class="form-control brand-input"
          type="email"
          placeholder="example@email.com"
        />
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold text-uppercase small">Username</label>
        <input
          v-model="store.account.username"
          class="form-control brand-input"
          type="text"
          placeholder="Choose a username"
        />
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label fw-semibold text-uppercase small">Password</label>
          <input
            v-model="store.account.password"
            class="form-control brand-input"
            type="password"
            placeholder="Enter password"
          />
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label fw-semibold text-uppercase small">Confirm Password</label>
          <input
            v-model="store.account.password_confirmation"
            class="form-control brand-input"
            type="password"
            placeholder="Re-enter password"
          />
        </div>
      </div>

      <div class="mb-4">
        <label class="form-label fw-semibold text-uppercase small">Type of Participation</label>
        <select
          v-model="store.account.participation_type"
          class="form-select brand-input"
        >
          <option disabled value="">Select type</option>
          <option>Buyer</option>
          <option>Exhibitor</option>
          <option>Visitor</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/" class="btn btn-mf-primary px-4 py-2">
          <i class="bi bi-arrow-left ms-2"></i> Back to Home
        </a>
        <button class="btn btn-mf-primary px-4 py-2" type="submit">
          Next Step <i class="bi bi-arrow-right ms-2"></i>
        </button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();
const errors = ref([]);

function nextStep() {
  errors.value = [];

  if (!store.account.first_name) errors.value.push('First name is required.');
  if (!store.account.last_name) errors.value.push('Last name is required.');
  if (!store.account.email) errors.value.push('Email is required.');
  else if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(store.account.email))
    errors.value.push('Email format is invalid.');
  if (!store.account.username) errors.value.push('Username is required.');
  if (!store.account.password) errors.value.push('Password is required.');
  if (store.account.password !== store.account.password_confirmation)
    errors.value.push('Passwords do not match.');
  if (!store.account.participation_type)
    errors.value.push('Please select a participation type.');

  if (errors.value.length === 0) store.nextStep();
}
</script>

<style scoped>
/* Additional step-specific refinements */
.brand-input {
  border-radius: 10px;
  border: 1.5px solid rgba(107, 76, 59, 0.25);
  padding: 0.75rem 1rem;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}
.brand-input:focus {
  border-color: var(--mf-gold);
  box-shadow: 0 0 0 0.25rem rgba(212, 160, 23, 0.2);
}

.alert-danger {
  background-color: rgba(255, 111, 97, 0.1);
  border: 1px solid rgba(255, 111, 97, 0.4);
  color: var(--mf-brown);
}

button.btn-mf-primary i {
  font-size: 1rem;
  vertical-align: middle;
}
</style>
