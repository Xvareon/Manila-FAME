<template>
  <div class="mf-card p-5 shadow-sm">
    <h4 class="h-display mb-4 text-center text-uppercase">Step 3: Summary & Confirmation</h4>

    <h5 class="h-display mb-4 text-uppercase">Account Info</h5>
    <ul>
      <li><strong>Name:</strong> {{ store.account.first_name }} {{ store.account.last_name }}</li>
      <li><strong>Email:</strong> {{ store.account.email }}</li>
      <li><strong>Username:</strong> {{ store.account.username }}</li>
      <li><strong>Type:</strong> {{ store.account.participation_type }}</li>
    </ul>

    <h5 class="h-display mb-4 mt-4 text-uppercase">Company Info</h5>
    <ul>
      <li><strong>Company:</strong> {{ store.company.name }}</li>
      <li><strong>Address:</strong> {{ store.company.address_line }}, {{ store.company.city }}, {{ store.company.region }}, {{ store.company.country }}</li>
      <li><strong>Year Established:</strong> {{ store.company.year_established }}</li>
      <li><strong>Website:</strong> {{ store.company.website }}</li>
    </ul>

    <div class="d-flex justify-content-between mt-4">
      <button class="btn btn-mf-primary px-4 py-2" @click="store.prevStep()" :disabled="loading"><i class="bi bi-arrow-left ms-2"></i> Back</button>

      <button class="btn btn-mf-primary px-4 py-2" @click="submitRegistration" :disabled="loading">
        <span v-if="loading" class="spinner-border spinner-border-sm me-2" role="status"></span>
        {{ loading ? 'Submitting...' : 'Submit Registration' }}
      </button>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios';
import { ref, inject } from 'vue';
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();
const toast = inject('toast'); // get global toast

const loading = ref(false);

async function submitRegistration() {
  loading.value = true;

  try {
    const formData = new FormData();
    Object.entries(store.account).forEach(([key, value]) => formData.append(key, value));
    Object.entries(store.company).forEach(([key, value]) => {
      if (key === 'brochure' && value instanceof File) {
        formData.append(`company[${key}]`, value);
      } else if (key !== 'brochure') {
        formData.append(`company[${key}]`, value);
      }
    });

    const response = await axios.post('/api/register', formData, {
      headers: { 'Content-Type': 'multipart/form-data' }
    });

    toast(response.data.message, 'success');
    store.completed = true;
  } catch (error) {
    if (error.response && error.response.status === 422) {
      const errors = error.response.data.errors;
      Object.values(errors).forEach(msgs => toast(msgs[0], 'error'));
    } else {
      toast('Registration failed. Please check your information.', 'error');
    }
  } finally {
    loading.value = false;
  }
}

</script>
