<template>
  <Head title="Welcome" />

  <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> -->
  <!-- <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>
            </template>
        </div> -->

  <!-- NAVBAR -->
  <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
    <div class="container">
      <!-- Navbar brand (mobile) -->
      <a class="navbar-brand d-lg-none" href="#"
        ><img
          class="img-rounded"
          width="100px"
          src="assets/logo/emblem.png"
          alt=""
          srcset=""
      /></a>

      <!-- Navbar toggler -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Navbar nav -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link"
              href="#"
              style="font-family: 'Comfortaa', cursive; font-size: 15px"
              >Welcome to Marian Girls Alumni</a
            >
          </li>
        </ul>

        <!-- Navbar brand -->
        <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="">
          <img class="img-rounded" width="100px" src="" alt="" srcset="" />
        </a>

        <!-- Navbar nav -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- WELCOME -->
  <header
    data-jarallax
    data-speed=".8"
  >
    <div
      class="
        d-flex
        flex-column
        min-vh-100
        bg-black-50
        pt-10 pt-md-8
        pb-7 pb-md-0
      "
    >
      <div class="container my-auto">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">
            <!-- Preheading -->
            <!-- <h6 class="text-xs text-white-75">
                <span class="text-primary">Café</span> / Restaurant
              </h6> -->

            <!-- Heading -->
            <h5 class="display-5 text-white mb-4">
              Marian Girls Alumni Association
            </h5>

            <!-- Subheading -->
            <p class="text-center text-white-75 mb-7">
              CONNECT, EXPAND AND GIVE BACK
            </p>

            <Link
              v-if="canRegister"
              :href="route('register')"
              class="
                btn btn-outline-primary
                text-white text-primary-hover
                mb-7 mb-md-0
              "
            >
              Register
            </Link>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md">
            <!-- Social links -->
            <ul class="list-inline text-center text-md-start mb-3 my-md-5">
              <li class="list-inline-item">
                <a class="text-white-75 text-primary-hover" href="#!">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item ms-5">
                <a class="text-white-75 text-primary-hover" href="#!">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item ms-5">
                <a class="text-white-75 text-primary-hover" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md">
            <!-- Address -->
            <p
              class="
                font-serif
                text-white-75 text-center text-md-end text-lg-end
                my-md-5
              "
            >
              <i class="fas fa-map-marker-alt text-primary me-3"></i> HV9W+2MC,
              Bagamoyo
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- MAP -->
  <iframe
    style="height: 30rem; width: 100%; border: 0"
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15858.804360770346!2d38.8966468!3d-6.4324296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf4ba1c893c1da4f!2sMarian%20Girls%20Secondary%20School!5e0!3m2!1sen!2stz!4v1637687246815!5m2!1sen!2stz"
    width="600"
    height="450"
    allowfullscreen=""
    loading="lazy"
  ></iframe>

  <!-- FOOTER -->
  <footer class="py-7 py-md-9 bg-black">
    <div class="container px-4">
      <div class="row gx-7">
        <div class="col-sm-4">
          <!-- Heading -->
          <h5 class="text-xs text-primary">About Us</h5>

          <!-- Text -->
          <p class="mb-6">
            This website by launched by Marian Girls High School Alumni whose
            aim is to support Tanzania education to the young generation and
            celebrate every achievements associated with it.
          </p>
        </div>
        <div class="col-sm-4">
          <!-- Heading -->
          <h5 class="text-xs text-primary">Contact info</h5>

          <!-- List -->
          <ul class="list-unstyled mb-6">
            <li class="d-flex mb-2">
              <div class="fas fa-map-marker-alt me-3 mt-2 fs-sm"></div>
              HV9W+2MC, Bagamoyo
            </li>
            <li class="d-flex mb-2">
              <div class="fas fa-phone me-3 mt-2 fs-sm"></div>
              +255 753 782 188
            </li>
            <li class="d-flex">
              <div class="far fa-envelope me-3 mt-2 fs-sm"></div>
              <a href="mailto:admin@domain.com">mariamCommunity@gmail.com</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <!-- Heading -->
          <h5 class="text-xs text-primary">Associated By</h5>

          <!-- Text -->
          <!-- <div class="mb-3">
              <div class="">Fredrick <span class="text-primary">Shayo</span></div>
               <div class=""><span class="text-primary">Fredrick</span> Shayo</div>
              <div class="font-serif text-xs">Developers</div>
            </div> -->

          <!-- Text -->
          <!-- <div class="mb-6">
              <div class="text-xs">Friday - Sunday</div>
              <div class="font-serif">12:00 AM - 03:00 AM</div>
            </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- Copyright -->
          <div class="d-flex align-items-center">
            <hr class="hr-sm me-3" style="height: 1px" />
            &copy; 2021 Marian Alumni Association. All rights reserved.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--  -->
  <!-- TOAST -->
  <div
    class="
      toast
      position-fixed
      bottom-0
      start-50
      translate-middle-x
      mb-3 mb-md-5
    "
    id="notification"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
  >
    <div class="d-flex">
      <div class="toast-body mx-auto"></div>
    </div>
  </div>
</template>

<style scoped>
.bg-gray-100 {
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
  color: #718096;
  color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
  color: #4a5568;
  color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
  color: #1a202c;
  color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-gray-800 {
    background-color: #2d3748;
    background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    background-color: #1a202c;
    background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
  }

  .dark\:border-gray-700 {
    border-color: #4a5568;
    border-color: rgba(74, 85, 104, var(--tw-border-opacity));
  }

  .dark\:text-white {
    color: #fff;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
  }
}
</style>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Head,
    Link,
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
});
</script>
