<template>
  <app-layout title="Dashboard">
    <div class="py-2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg overflow-auto">
          <div class="flex flex-wrap justify-evenly sm:my-2">
            <post-card
              v-for="user in users"
              :key="user.id"
              :user-name="user.name"
            ></post-card>
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
import PostCard from "@/Jetstream/MyComponents/PostCard.vue";

export default defineComponent({
  components: {
    AppLayout,
    Welcome,
    PostCard,
  },
  data() {
    return {
      users: [],
    };
  },
  beforeMount() {
    this.fetchUsers();
  },
  mounted() {
    // this.getNextUser();
  },
  methods: {
    fetchUsers() {
      // POST request using fetch with error handling
      const requestOptions = {
        method: "GET",
        headers: {
          "Content-Type": "application/json",
          Authorization: "Bearer 1|H1OrjYLqsPL92YYs9FNjsB311IL9riHIzx0gzL9y",
        },
        // body: JSON.stringify({ title: 'Vue POST Request Example' })
      };
      fetch("http://127.0.0.1:8000/api/posts", requestOptions)
        .then(async (response) => {
          const data = await response.json();
          this.users = data.data;

          // check for error response
          if (!response.ok) {
            // get error message from body or default to response status
            const error = (data && data.message) || response.status;
            return Promise.reject(error);
          }

          // this.postId = data.id;
        })
        .catch((error) => {
          this.errorMessage = error;
          console.error("There was an error!", error);
        });
    },getNextUser() {
      window.onscroll = () => {
        let bottomOfWindow = document.documentElement.scrollTop + window.innerHeight === document.documentElement.offsetHeight;
        if (bottomOfWindow) {
          axios.get(`http://127.0.0.1:8000/api/posts`).then(response => {
            this.users.push(response.data.results[0]);
          });
        }
      }
    }
  },
});
</script>


<style>
@import './../../../public/css/app.css';
</style>