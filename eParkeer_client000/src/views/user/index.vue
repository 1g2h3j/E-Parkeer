<!-- <template>
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
</script> -->

<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top main-color">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/innovation-group.png" alt="logo" width="50">
                    <span>
                        <h5 class="ps-2">E-Parkeer</h5>
                    </span>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#profile">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">Sevices</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <input type="search" class="search ms-2" placeholder="Search">
                    </div>
                </div>
            </div>
        </nav>

        <section id="home" class="mb-4">
            <div class="row d-flex align-items-center pt-5">
                <div class="col-lg-7 order-lg-first order-last">
                    <!-- <h1 class="fs-5">WEBSITE</h1> -->
                    <h1 class="fw-bold pb-2">
                        <span style="color: #1463f3;">E-</span>
                        <span>Parkeer</span>
                    </h1>
                    <p class="lh-lg fst-italic">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, alias rerum nisi tempore
                        sequi impedit. Necessitatibus et deleniti earum recusandae ipsum consectetur ullam aliquam
                        quos quam delectus consequatur vel odit nesciunt eum saepe, quisquam atque maxime veniam
                        consequuntur! Aliquid, minus!
                    </p>
                    <!-- <button class="btn btn-outline-dark shadow" type="submit">Button</button> -->
                </div>
                <div class="col-lg-5 order-lg-last order-first text-center">
                    <img src="img/parking.png" alt="logo" width="400" class="p-2 ms-5 " />
                </div>
            </div>
        </section>

        <section id="profile" class="mt-5">
            <div class="row d-flex align-items-center pt-4">
                <div class="profile col-lg-12 text-center">
                    <h1 class="fw-bold">About Us</h1>
                    <p class="fst-italic pt-3 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</p>
                    <p class="lh-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum porro aliquam
                        beatae sunt repellat ea? Molestias a dolorem temporibus quos, eveniet, culpa quibusdam
                        voluptate odio cupiditate cum pariatur recusandae, ullam ad error. Enim minus omnis
                        repellendus? Ipsam quidem temporibus quibusdam.</p>
                    <p class="lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis expedita
                        veniam sint libero nisi, tempore voluptatibus. Odio atque fuga dolores perspiciatis, sit
                        error voluptatibus animi, culpa commodi nemo doloremque nihil.</p>
                </div>
            </div>
        </section>

        <section id="service" class="m-5">
            <h2 class="text-center mt-4 pb-4 fw-bold">SERVICE</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center ">
                    <img src="img/HTML.png" alt="html" class="mb-3">
                    <h5>HyperText Markup Language</h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        repudiandae architecto amet temporibus impedit soluta eum reprehenderit maiores culpa quae.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/CSS.png" alt="css" class="mb-3">
                    <h5>Cascading Style Sheets</h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                        eveniet praesentium repellendus assumenda corporis ducimus eius quaerat nemo labore
                        eligendi!</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/JS.png" alt="js" class="mb-3">
                    <h5>JavaScript</h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem
                        deserunt quos reprehenderit aut dignissimos odit dolor numquam quisquam maiores recusandae.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/PHP.png" alt="php" class="mb-3">
                    <h5> Hypertext Preprocessor</h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                        repudiandae architecto amet temporibus impedit soluta eum reprehenderit maiores culpa quae.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/C++.png" alt="cpp" class="mb-3">
                    <h5>C Plus Plus</h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                        eveniet praesentium repellendus assumenda corporis ducimus eius quaerat nemo labore
                        eligendi!</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/PY.png" alt="py" class="mb-3">
                    <h5></h5>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem
                        deserunt quos reprehenderit aut dignissimos odit dolor numquam quisquam maiores recusandae.
                    </p>
                </div>
            </div>
        </section>

        <section id="call" class="text-light main-color">
            <div class="row ms-5">
                <div class="col-lg-9 lh-base">
                    <h3 class="pb-3">Contact us for more information</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad nostrum perferendis optio.
                    Accusamus commodi praesentium fugiat facilis nihil necessitatibus assumenda voluptates quasi,
                    esse libero deleniti voluptatum repellat! Tempore eligendi quod aut blanditiis est odit atque
                    voluptate veritatis, temporibus non ducimus deserunt doloribus. Facilis iusto fugit culpa
                    officiis mollitia dolore?
                </div>
                <div class="col-lg-3">
                    <div class="clearfix">
                        <span class="float-end mt-5 pt-4"><button class="btn btn-outline-light">Button
                                Button</button></span>
                    </div>
                </div>
            </div>
        </section>

        <section id="question">
            <h2 class="text-center pb-4 fw-bold">Q & A</h2>
            <div class="row">
                <div class="col">
                    <div class="accordion" id="accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, esse voluptate!
                                    Quas assumenda voluptates corrupti sequi quidem blanditiis consectetur hic,
                                    vitae alias eligendi dolores, ducimus eius. Aliquid, perferendis error
                                    consequuntur possimus natus ipsam, deserunt doloribus deleniti amet eveniet
                                    facilis laudantium commodi animi at. Impedit obcaecati ad nisi illo et adipisci.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis, amet
                                    eveniet suscipit illum doloribus quaerat voluptatem vitae in unde nam facilis
                                    praesentium iusto? Quas nulla quae temporibus voluptas vel voluptatem sit,
                                    voluptates aliquam illum laudantium culpa pariatur ipsa dignissimos, dolor,
                                    animi nostrum explicabo nemo et cumque velit perferendis cupiditate ut atque
                                    veniam! Libero ipsam placeat numquam! Repellendus, in provident!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet consectetur?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error vel odit maxime
                                    nulla repudiandae distinctio fugit? Repellat voluptates enim, incidunt nesciunt
                                    veritatis, animi quibusdam quia et facere numquam aliquam quidem. Velit quam
                                    dolorem laborum facilis. Obcaecati fugit vitae animi non!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lorem ipsum dolor sit?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias.
                                    Ratione sint similique autem soluta, tempora a non voluptas reiciendis
                                    consequuntur corrupti consequatur iusto cum quos eum veritatis necessitatibus
                                    beatae velit facere? Reiciendis at et esse.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia fugiat ipsam
                                    dolor, voluptate aspernatur reprehenderit beatae id tempore harum quasi vitae ad
                                    ullam pariatur iure libero, vel, obcaecati in non consequatur. Ducimus,
                                    asperiores. Nostrum, ipsam eius sunt commodi vero quidem laboriosam veniam fugit
                                    explicabo illum non ab architecto sequi optio provident? Facilis nostrum sed
                                    commodi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapsesSix">
                                    Lorem ipsum dolor sit amet consectetur adipisicing?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero
                                    exercitationem? Fugit saepe illum amet, vitae delectus nam! Ut quam omnis
                                    architecto maxime iste porro voluptatum vel cum veritatis dignissimos? Quidem,
                                    aspernatur et id repellendus minima hic ullam quos esse nam tempora ipsam sint
                                    nobis velit doloremque ratione ducimus reiciendis eius deserunt cum non dolor
                                    sapiente odio exercitationem?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="main-color">
            <div class="row d-flex align-items-baseline">
                <div class="col-lg-3 text-light">
                    <h3 class="fw-bold pb-4">Company Name</h3>
                    <p class="fw-light lh-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Praesentium nesciunt sapiente recusandae quod, excepturi corporis. Totam, odit. Praesentium,
                        repellendus rerum repudiandae nesciunt quod expedita placeat odio reiciendis nemo molestiae
                        odit.</p>
                </div>
                <div class="col-lg-3 ps-4 text-start text-light">
                    <h3 class="fw-bold pb-4">Alamat</h3>
                    <a href="https://goo.gl/maps/N7eDHudGMuqLrpsn7" style="text-decoration: none;"
                        class="fw-light">JP62+G7M, Parakancanggah, Kec. Banjarnegara, Kab. Banjarnegara, Jawa Tengah
                        53412</a>
                    <p></p>
                    <a href="https://goo.gl/maps/evtDQB3wbZSqfKS19" style="text-decoration: none;" class="fw-light">Jl.
                        Udowo Bar. I No.12, Bulu Lor, Kec. Semarang Utara, Kota Semarang, Jawa
                        Tengah 50179</a>
                </div>
                <div class="col-lg-6 ps-5 text-light">
                    <form>
                        <div class="mb-3">
                            <label form="InputEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="InputEmail">
                            <!-- <input type="email" class="form-control id="InputEmail" aria-describedby="emailHelp"> -->
                        </div>
                        <div class="mb-3">
                            <label for="FormControlTextarea" class="form-label">Message</label>
                            <textarea class="form-control" id="FormControlTextarea" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-light">Submit</button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="m-3">
            <h5 class="text-center fs-5">Copyright &copy; 2022</h5>
        </footer>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,200;1,400;1,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins";
    }

    .accordion-button:focus {
        outline: none !important;
        box-shadow: none !important;
    }

    .main-color {
        background-color: #1463f3 !important;
    }

    section {
        padding: 15vh;
        height: 93vh;
    }

    #question {
        height: auto;
    }

    a {
        text-decoration: none;
        color: white !important;
    }

    #profile {
        height: auto;
        background-image: linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)), url(/img/parking-state.jpg);
        background-size: cover;
        background-attachment: fixed;
        color: whitesmoke;
    }

    #call {
        height: auto;
        background-image: linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)), url(/img/cars.jpg);
        background-size: cover;
        background-attachment: fixed;
        color: whitesmoke;
    }

    .search {
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 18px;
        padding-left: 36px;
        background: url('src/assets/icon-search.svg') no-repeat 10px/16px, #ececec;
        cursor: pointer;
    }

    .search {
        transition-property: width, border-radius, box-shadow;
        transition-duration: 600ms;
    }

    .search:focus {
        width: 200px;
        border-radius: 20px;
        box-shadow: 0 0 0 2px #000;
        outline: none;
        cursor: auto;
    }

    @media (max-width: 992px) {
        #home {
            height: 130vh;
        }

        #home img {
            margin-bottom: 50px;
        }

        #home .name {
            margin: 20px;
        }

        #home .btn {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 992px) {
        #profile {
            height: 130vh;
        }

        #profile img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }

        #profile .col-lg-8 {
            text-align: center;
        }
    }

    @media (max-width: 992px) {
        #service {
            height: 140vh;
        }
    }

    @media (max-width: 992px) {
        #call {
            height: 75vh;
        }
    }

    @media (max-width: 992px) {
        #question {
            height: 100%;
        }
    }

    @media (max-width: 992px) {
        #contact {
            height: 140vh;
        }
    }
</style>