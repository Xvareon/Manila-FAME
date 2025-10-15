<template>
  <div class="card p-4 shadow-sm">
    <h4 class="mb-3">Step 2: Company Information</h4>

    <div v-if="errors.length" class="alert alert-danger">
      <ul class="mb-0">
        <li v-for="(err, index) in errors" :key="index">{{ err }}</li>
      </ul>
    </div>

    <div class="mb-3">
      <label>Company Name</label>
      <input v-model="store.company.name" class="form-control" type="text" />
    </div>

    <div class="mb-3">
      <label>Address</label>
      <input v-model="store.company.address_line" class="form-control" type="text" />
    </div>

    <div class="row">
      <div class="col-md-4 mb-3">
        <label>City</label>
        <input v-model="store.company.city" class="form-control" type="text" />
      </div>
      <div class="col-md-4 mb-3">
        <label>Region</label>
        <input v-model="store.company.region" class="form-control" type="text" />
      </div>
      <div class="col-md-4 mb-3">
        <label>Country</label>
        <input v-model="store.company.country" class="form-control" type="text" />
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Year Established</label>
        <input v-model="store.company.year_established" class="form-control" type="number" />
      </div>
      <div class="col-md-6 mb-3">
        <label>Website</label>
        <input v-model="store.company.website" class="form-control" type="url" />
      </div>
    </div>

    <div class="mb-3">
      <label>Brochure (PDF/DOC/DOCX)</label>
      <input class="form-control" type="file" @change="handleFileUpload" />
    </div>

    <div class="d-flex justify-content-between">
      <button class="btn btn-secondary" @click="store.prevStep()">Back</button>
      <button class="btn btn-primary" @click="nextStep">Next</button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();
const errors = ref([]);

function handleFileUpload(event) {
  store.company.brochure = event.target.files[0];
}

function nextStep() {
  errors.value = [];

  if (!store.company.name) errors.value.push('Company name is required.');
  if (!store.company.address_line) errors.value.push('Company address is required.');
  if (!store.company.city) errors.value.push('City is required.');
  if (!store.company.country) errors.value.push('Country is required.');
  if (!store.company.year_established)
    errors.value.push('Year established is required.');
  else if (store.company.year_established < 1900)
    errors.value.push('Invalid year.');

  if (errors.value.length === 0) {
    store.nextStep();
  }
}
</script>
