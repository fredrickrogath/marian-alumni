<template>
  <Head title="Welcome" />

  <!-- Page wrapper -->
  <div class="scrollbar-hide">
    <header class="bg-gray-900">
      <div
        class="w-full bg-cover bg-center header"
        style="background-image: url(assets/logo/emblem.png)"
      >

      <div class="h-16 flex justify-around">
        <div class="mt-2">
          <transition name="head1">
              <h1
                v-if="showHead1"
                class="
                  text-gray-300 text-md
                  mb-5
                  px-4
                  font-semibold
                  uppercase
                  md:text-2xl
                "
              >
                {{ paragraph1 }}
              </h1>
            </transition>
        </div>

        <div class="mt-2">
          <transition name="head1">
              <h1
                v-if="showHead1"
                class="
                  text-gray-300 text-md
                  mb-5
                  px-4
                  font-semibold
                  uppercase
                  md:text-2xl
                "
              >
                {{ paragraph2 }}
              </h1>
            </transition>
        </div>

      </div>
        <div
          class="
            flex
            items-center
            justify-center
            h-full
            w-full
            bg-gray-900 bg-opacity-50
          "
        >
            
          <div class="text-center">
            
            <button
              class="
                md:mt-4
                mt-96
                px-4
                md:ml-10
                ml-4
                py-2
                bg-blue-600
                text-white text-sm
                uppercase
                font-medium
                rounded
                animate-bounce
                hover:bg-blue-500
                focus:outline-none focus:bg-blue-500
              "
            >
              <Link v-if="canRegister" :href="route('register')" class="">
                Welcome
              </Link>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- MAP -->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3386.5075154362626!2d38.89401721428422!3d-6.4336298953453115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c915d83552167%3A0xaf4ba1c893c1da4f!2sMarian%20Girls%20Secondary%20School!5e1!3m2!1sen!2stz!4v1648467018901!5m2!1sen!2stz"
      width="600"
      height="450"
      style="height: 30rem; width: 100%; border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

    <!-- Site footer -->
    <footer class="is bg-gray-900 opacity-100">
      <div class="ax ss ht yo">
        <div class="hu we nz ld v_ oh">
          <div class="in ig" aria-hidden="true">
            <svg
              class="ii ia if nv no op gt"
              width="800"
              height="264"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="400"
                cy="400"
                r="400"
                fill="url(#footerglow_paint0_radial)"
                fill-opacity=".4"
              ></circle>
              <defs>
                <radialGradient
                  id="footerglow_paint0_radial"
                  cx="0"
                  cy="0"
                  r="1"
                  gradientUnits="userSpaceOnUse"
                  gradientTransform="rotate(90 0 400) scale(315.089)"
                >
                  <stop stop-color="#3ABAB4"></stop>
                  <stop
                    offset="1"
                    stop-color="#3ABAB4"
                    stop-opacity=".01"
                  ></stop>
                </radialGradient>
              </defs>
            </svg>
          </div>

          <div class="ud bm fq xw sp yq">
            <div class="yv wp ud fc bv fq">
              <img src="assets/logo/emblem.png" width="200" height="200" />

              <div class="pc">
                <h6 class="pv py sw text-gray-300">Marian</h6>
                <ul>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                </ul>
              </div>
              <div class="pc">
                <h6 class="pv py sw text-gray-300">Marian</h6>
                <ul>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >
                      <!-- &amp; -->
                      Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                </ul>
              </div>
              <div class="pc">
                <h6 class="pv py sw text-gray-300">Marian</h6>
                <ul>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                  <li class="sy">
                    <a
                      class="text-gray-600 dark--text-gray-400 vd d_ dz vr"
                      href="#0"
                      >Marian Alumni</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="bn by bb">
            <ul class="uh sm yh yz yx">
              <li>
                <a
                  class="
                    uh
                    fb
                    fm
                    text-white
                    bg-teal-500
                    mj
                    mn
                    vd
                    hover--bg-teal-600
                    lc
                    d_
                    dz
                    vr
                  "
                  href="#0"
                  aria-label="Twitter"
                >
                  <svg
                    class="ap uj cx"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                    ></path>
                  </svg>
                </a>
              </li>
              <li class="od">
                <a
                  class="
                    uh
                    fb
                    fm
                    text-white
                    bg-teal-500
                    mj
                    mn
                    vd
                    hover--bg-teal-600
                    lc
                    d_
                    dz
                    vr
                  "
                  href="#0"
                  aria-label="Github"
                >
                  <svg
                    class="ap uj cx"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"
                    ></path>
                  </svg>
                </a>
              </li>
              <li class="od">
                <a
                  class="
                    uh
                    fb
                    fm
                    text-white
                    bg-teal-500
                    mj
                    mn
                    vd
                    hover--bg-teal-600
                    lc
                    d_
                    dz
                    vr
                  "
                  href="#0"
                  aria-label="Facebook"
                >
                  <svg
                    class="ap uj cx"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z"
                    ></path>
                  </svg>
                </a>
              </li>
              <li class="od">
                <a
                  class="
                    uh
                    fb
                    fm
                    text-white
                    bg-teal-500
                    mj
                    mn
                    vd
                    hover--bg-teal-600
                    lc
                    d_
                    dz
                    vr
                  "
                  href="#0"
                  aria-label="Instagram"
                >
                  <svg
                    class="ap uj cx"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="20.145" cy="11.892" r="1"></circle>
                    <path
                      d="M16 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"
                    ></path>
                    <path
                      d="M20 24h-8c-2.056 0-4-1.944-4-4v-8c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zm-8-14c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2v-8c0-.935-1.065-2-2-2h-8z"
                    ></path>
                  </svg>
                </a>
              </li>
              <li class="od">
                <a
                  class="
                    uh
                    fb
                    fm
                    text-white
                    bg-teal-500
                    mj
                    mn
                    vd
                    hover--bg-teal-600
                    lc
                    d_
                    dz
                    vr
                  "
                  href="#0"
                  aria-label="Linkedin"
                >
                  <svg
                    class="ap uj cx"
                    viewBox="0 0 32 32"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M23.3 8H8.7c-.4 0-.7.3-.7.7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V8.7c-.1-.4-.4-.7-.8-.7zM12.7 21.6h-2.3V14h2.4v7.6h-.1zM11.6 13c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4v-3.7c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8h-2.4V14h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2h.1z"
                    ></path>
                  </svg>
                </a>
              </li>
            </ul>
            <div class="pc yp di sw yx">
              <a class="text-gray-600 dark--text-gray-400 vd d_ dz vr" href="#0"
                >Terms</a
              >
              ·
              <a class="text-gray-600 dark--text-gray-400 vd d_ dz vr" href="#0"
                >Privacy Policy</a
              >
            </div>
            <div class="text-gray-600 dark--text-gray-400 pc ov">
              © 2022 Appy. All rights reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

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

  data() {
    return {
      showHead1: false,
      paragraph1: 'Marian Girls Alumni Association',
      paragraph2: 'CONNECT, EXPAND AND GIVE BACK'
    };
  },

  mounted() {
    this.$nextTick(function () {
            window.setInterval(() => {
                this.animateHead1();
            },3000);
        })
},

  methods: {
    animateHead1() {
      this.showHead1 = !this.showHead1;
    },
    animateHead2() {},
  },
});
</script>

<style>
@import "./../../../public/assets/css/style.b973ef58d3fd736d16d2.css";

.head1-enter-from {
  opacity: 0;
  transform: translateY(30px);
}

.head1-enter-active {
  transition: all 0.7s ease-out;
}

.head1-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.head1-leave-from {
  opacity: 1;
  transform: translateY(0);
}

.head1-leave-active {
  transition: all 0.7s ease-in;
}

.head1-leave-to {
  opacity: 0;
  transform: translateY(-30px);
}

.header {
  height: 55rem;
}

@media only screen and (max-width: 600px) {
  .header {
    height: 35rem;
  }
}
</style>