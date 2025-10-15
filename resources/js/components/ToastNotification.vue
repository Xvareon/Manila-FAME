<template>
  <div
    class="toast-container position-fixed bottom-0 end-0 p-3"
    style="z-index: 1055;"
  >
    <div
      v-for="(toast, index) in toasts"
      :key="index"
      class="toast align-items-center text-white border-0 show mb-2"
      :class="toast.type === 'success' ? 'bg-success' : 'bg-danger'"
      role="alert"
      aria-live="assertive"
      aria-atomic="true"
    >
      <div class="d-flex">
        <div class="toast-body">
          {{ toast.message }}
        </div>
        <button
          type="button"
          class="btn-close btn-close-white me-2 m-auto"
          aria-label="Close"
          @click="removeToast(index)"
        ></button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const toasts = ref([]);

function showToast(message, type = 'success') {
  toasts.value.push({ message, type });

  // auto remove after 4 seconds
  setTimeout(() => {
    toasts.value.shift();
  }, 4000);
}

function removeToast(index) {
  toasts.value.splice(index, 1);
}

// expose function globally
defineExpose({ showToast });
</script>
