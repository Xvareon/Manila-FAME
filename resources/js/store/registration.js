import { defineStore } from 'pinia';

export const useRegistrationStore = defineStore('registration', {
  state: () => ({
    step: 1,
    completed: false,
    account: {
      first_name: '',
      last_name: '',
      email: '',
      username: '',
      password: '',
      password_confirmation: '',
      participation_type: '',
    },
    company: {
      name: '',
      address_line: '',
      city: '',
      region: '',
      country: '',
      year_established: '',
      website: '',
      brochure: null,
    },
  }),
  actions: {
    nextStep() {
      if (this.step < 3) this.step++;
    },
    prevStep() {
      if (this.step > 1) this.step--;
    },
    reset() {
      this.step = 1;
      this.completed = false;
      this.account = {
        first_name: '',
        last_name: '',
        email: '',
        username: '',
        password: '',
        password_confirmation: '',
        participation_type: '',
      };
      this.company = {
        name: '',
        address_line: '',
        city: '',
        region: '',
        country: '',
        year_established: '',
        website: '',
        brochure: null,
      };
    }
  }
});

