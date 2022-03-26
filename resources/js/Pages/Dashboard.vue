<template>
  <app-layout title="Dashboard">

    <div class="py-2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
          class="overflow-hidden shadow-xl sm:rounded-lg overflow-auto"
        >
          <div class="flex flex-wrap justify-evenly sm:my-2">
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
            <image-card></image-card>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
import ImageCard from "@/Jetstream/MyComponents/ImageCard.vue";

export default defineComponent({
  components: {
    AppLayout,
    Welcome,
    ImageCard,
  },
});
</script>
