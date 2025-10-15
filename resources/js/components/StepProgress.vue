<template>
  <div class="d-flex justify-content-center mb-4">
    <div class="step-container d-flex justify-content-between w-75">
      <div
        v-for="n in 3"
        :key="n"
        class="step text-center flex-fill position-relative"
      >
        <div
          class="circle mx-auto"
          :class="{ active: store.step >= n }"
        >
          {{ n }}
        </div>
        <small class="d-block mt-2 fw-semibold">
          {{ stepTitles[n - 1] }}
        </small>

        <div
          v-if="n < 3"
          class="position-absolute top-50 start-100 translate-middle-y"
          :class="{ active: store.step > n }"
        ></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useRegistrationStore } from '../store/registration';
const store = useRegistrationStore();

const stepTitles = [
  'Account Information',
  'Company Information',
  'Summary & Submit'
];
</script>

<style scoped>
.step-container {
  position: relative;
}

.circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #e0e0e0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  transition: 0.3s;
}
.circle.active {
  background-color: #0d6efd;
  color: white;
}
</style>
