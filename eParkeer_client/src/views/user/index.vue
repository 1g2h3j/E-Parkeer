<template>
     <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <router-link
                    :to="{ name:'user.create' }"
                    class="btn btn-outline-primary btn-sm shadow mb-3"
                >Tambah Data</router-link>

                <div class="card rounded shadow">
                    <div class="card-header">List</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Nomor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(user, index) in users.data" :key="index">
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.username }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.nomor }}</td>
                                    <td>
                                        <router-link :to="{ name : 'user.edit', params:{id: user.id} }" class="btn btn-sm btn-outline-warning">Edit</router-link>
                                        <button class="btn btn-sm btn-outline-danger ms-2" @click.prevent="destroy(user.id, index)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { onMounted, ref } from "vue"

export default{
    setup()  {
        let users = ref([]);

        onMounted(() => {
            axios.get(`http://127.0.0.1:8000/api/user`)
            .then((result) => {
                users.value = result.data
            }).catch((err) => {
                console.log(err.response)
            });
        });

        function destroy(id, index) {
            axios.delete(`http://127.0.0.1:8000/api/user/${id}`)
            .then(() => {
                users.value.data.spilce(index, 1)
                location.reload()
            }).catch((err) => {
                console.log(err.response.data);
            });
        }

        return {
            users,
            destroy
        }
    }
}
</script>