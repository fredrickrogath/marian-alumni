<template>
<!-- component -->
<div class="bg-gray-200 flex items-center justify-center sm:mb-4 mb-2">

  <div class="border-gray-300 w-96 border">
    
   <!-- <post-card-content
   @some-event="setComments"
   ></post-card-content>
   <comments></comments> -->

   <component :is="selectedComponent"
   
   ></component>
    
  </div>
  
</div>
</template>

<script>
    import { defineComponent } from 'vue';
    import Comments from "@/Jetstream/MyComponents/Comments.vue";
    import PostCardContent from "@/Jetstream/MyComponents/PostCardContent.vue";

    export default defineComponent({
      components:{
        Comments,
        PostCardContent,
      },
      data(){
        return {
          selectedComponent: 'post-card-content',
        }
      },
        props: ['user-name'],

        inject: [],

        provide(){ return {switchToComments: this.setComments,}},

        methods: {
          setComments(){
            this.selectedComponent = 'comments';
          },
        },

        watch: {},

        computed: {},
    })
</script>
