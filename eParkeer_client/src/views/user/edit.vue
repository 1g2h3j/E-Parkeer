<template>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <router-link
                    :to="{ name:'user.index' }"
                    class="btn btn-outline-primary btn-sm shadow mb-3"
                >Back</router-link>

                <div class="card rounded shadow">
                    <div class="card-header">Edit user</div>
                    <div class="card-body">
                        <form @submit.prevent="update()">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" v-model="user.name">
                                <div v-if="validation.name" class="text-danger">{{ validation.name[0] }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" v-model="user.username">
                                <div v-if="validation.username" class="text-danger">{{ validation.username[0] }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" v-model="user.email">
                                <div v-if="validation.email" class="text-danger">{{ validation.email[0] }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" v-model="user.password">
                                <div v-if="validation.password" class="text-danger">{{ validation.password[0] }}</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor</label>
                                <input type="text" class="form-control" v-model="user.nomor">
                                <div v-if="validation.nomor" class="text-danger">{{ validation.nomor[0] }}</div>
                            </div>
                            <button class="btn btn-outline-primary">Submit</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { reactive, ref, onMounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import axios from 'axios'

export default {
    setup() {
        let user = reactive({
            name : '',
            username : '',
            email : '',
            password : '',
            nomor : '',
        });

        const validation = ref([]);
 
        const router = useRouter();
        const route = useRoute();

        onMounted(() => {
            axios.get(`http://127.0.0.1:8000/api/user/${route.params.id}`)
            .then((result) => {
                user.name = result.data.data.name
                user.username = result.data.data.username
                user.email = result.data.data.email
                user.password = result.data.data.password
                user.nomor = result.data.data.nomor
            }).catch((err) => {
                console.log(err.response.data)
            })
        })

        function update() {
            axios.put(
                `http://127.0.0.1:8000/api/user/${route.params.id}`,
                user,
                {
                    headers: {
                        'Content-Type' : 'application/json'
                    }
                }
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
            update
        }
    }
}
</script>