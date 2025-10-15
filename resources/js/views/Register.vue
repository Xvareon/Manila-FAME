<template>
  <div class="container py-5">
    <StepProgress v-if="!store.completed" />
    <component :is="currentComponent"></component>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import { useRegistrationStore } from '../store/registration';
import StepProgress from '../components/StepProgress.vue';
import AccountInformation from '../components/AccountInformation.vue';
import CompanyInformation from '../components/CompanyInformation.vue';
import RegistrationSummary from '../components/RegistrationSummary.vue';
import ThankYou from '../components/ThankYou.vue';

const store = useRegistrationStore();

const currentComponent = computed(() => {
  if (store.completed) return ThankYou;

  switch (store.step) {
    case 1: return AccountInformation;
    case 2: return CompanyInformation;
    case 3: return RegistrationSummary;
    default: return AccountInformation;
  }
});
</script>
