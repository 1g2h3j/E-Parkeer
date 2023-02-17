<template>
    <!-- Section: Design Block -->
<section>
  <!-- Jumbotron -->
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your business</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form @submit.prevent="store()">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="name">Nama</label>
                      <input type="text" id="name" class="form-control" v-model="user.name">
                      <div v-if="validation.name" class="text-danger">{{ validation.name[0] }}</div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="username">Username</label>
                      <input type="text" id="username" class="form-control" v-model="user.username">
                      <div v-if="validation.username" class="text-danger">{{ validation.username[0] }}</div>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" class="form-control" v-model="user.email">
                  <div v-if="validation.email" class="text-danger">{{ validation.email[0] }}</div>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control" v-model="user.password">
                  <div v-if="validation.password" class="text-danger">{{ validation.password[0] }}</div>
                </div>
                
                
                <!-- Nomor input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="nomor">Nomor</label>
                  <input type="text" id="nomor" class="form-control" v-model="user.nomor">
                  <div v-if="validation.nomor" class="text-danger">{{ validation.nomor[0] }}</div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Registrasi
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</template>

<style scoped>
  .text-danger{
    font-size: 14px;
  }
</style>

<script>

import { reactive, ref } from 'vue'
import { useRouter } from 'vue-router'
import axios from 'axios'

export default {
    setup() {
        const user = reactive({
            name : '',
            username : '',
            email : '',
            password : '',
            nomor : '',
        });

        const validation = ref([]);

        const router = useRouter();

        function store() {
            axios.post(
                'http://127.0.0.1:8000/api/user',
                user
            )
            .then(() => {
                router.push({
                    name: 'user.index'
                })
            }).catch((err) => {
                validation.value = err.response.data
            });
        }

        return {
            user,
            validation,
            router,
            store
        }
    }
}
</script>