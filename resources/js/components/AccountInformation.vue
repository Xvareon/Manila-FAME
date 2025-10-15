<template>
  <div class="card p-4 shadow-sm">
    <h4 class="mb-3">Step 1: Account Information</h4>

    <div v-if="errors.length" class="alert alert-danger">
      <ul class="mb-0">
        <li v-for="(err, index) in errors" :key="index">{{ err }}</li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label>First Name</label>
        <input v-model="store.account.first_name" class="form-control" type="text" />
      </div>
      <div class="col-md-6 mb-3">
        <label>Last Name</label>
        <input v-model="store.account.last_name" class="form-control" type="text" />
      </div>
    </div>

    <div class="mb-3">
      <label>Email</label>
      <input v-model="store.account.email" class="form-control" type="email" />
    </div>

    <div class="mb-3">
      <label>Username</label>
      <input v-model="store.account.username" class="form-control" type="text" />
    </div>

    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Password</label>
        <input v-model="store.account.password" class="form-control" type="password" />
      </div>
      <div class="col-md-6 mb-3">
        <label>Confirm Password</label>
        <input v-model="store.account.password_confirmation" class="form-control" type="password" />
      </div>
    </div>

    <div class="mb-3">
      <label>Type of Participation</label>
      <select v-model="store.account.participation_type" class="form-select">
        <option disabled value="">Select type</option>
        <option>Buyer</option>
        <option>Exhibitor</option>
        <option>Visitor</option>
      </select>
    </div>

    <button class="btn btn-primary mt-3 float-end" @click="nextStep">Next</button>
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

  if (errors.value.length === 0) {
    store.nextStep();
  }
}
</script>
