<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">

                        <button 
                            type="button" 
                            class="btn btn-light mb-3"
                            @click="fetchUsers"
                        >
                            Cargar usuarios
                        </button>

                        <table class = "table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr v-for="user in users" :key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.created_at}}</td>
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
    export default {
        data() {
            return{
                users: {}
            }
        },
        methods: {
            async fetchUsers() {
               const { data: { users } } = await axios.get("/users/list")
               this.users = users
            }
        },
        // created() {
        //     this.fetchUsers()
        // }
    }
</script>
