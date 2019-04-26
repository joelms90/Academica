<template>
    <div class="col-12" >
        <h1 class="display-4">Tareas de Academica</h1>
        <br>
        
        <form action="#" @submit.prevent="createTask()">
            <div class="input-group">
                <input v-model="task.description" type="text" name="description" class="form-control" placeholder="Escribe una nueva tarea" autofocus>

                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </span>
            </div>
        </form>
        <br>
     

        <h2 class="text-center text-muted font-weight-bold">Mis Tareas</h2>
        

    
        <ul class="list-group text-center">
            <li v-if='list.length === 0'>¡Aún no tienes tareas!</li>
            <li class="list-group-item" v-for="(task, index) in list">
                 <table  class="table-responsive text-center">
                     <th class="col-3 " scope="col">

                        <p v-if="seen"> {{ task.description}}</p>
                     <input v-if="!seen" v-model="task.description" type="text" name="description" class="form-control" placeholder="Escribe una nueva tarea" autofocus>

                     </th>

                     <th  class="col-3" scope="col">
                         
                         <button v-if="seen" @click="statusTask(task.id)" class="btn btn-warning btn-xs pull-right">{{ task.status}}</button>

                         <button v-if="!seen" @click="editTask(task.id)" class="btn btn-warning btn-xs pull-right">{{ task.status}}</button>

                     </th>
                     <th  class="col-3" scope="col">
                         <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right">Borrar</button>
                     </th>
                     <th  class="col-3" scope="col">
                         <button v-if="!seen" @click="editTask(task)" class="btn btn-primary btn-xs pull-right">Guardar</button>
                         

                        <p><button v-if="seen" class="btn btn-lg btn-primary" v-on:click="seen = !seen">Editar</button></p>
                     </th>

                 </table> 
                 
            </li>
        </ul>
    </div>
</template>
<script>


    export default {

       props: ['currentUser'],
        data() {
            return {
                user:this.currentUser.id,
                seen: true,
                list: [],
                task: {
                    id: '',
                    description: '',
                    user: this.currentUser.id
                }
            };
        },
        
        created() {
            this.fetchTaskList();
        },
        
        methods: {
            fetchTaskList() {
                axios.get('/api/tasks').then((res) => {
                    this.list = res.data;
                    this.list.seen=true;
                });
            },
 
            createTask() {
           
                axios.post('/api/tasks', this.task)
                    .then((res) => {
                        this.task.description = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteTask(id) {
                axios.delete('/api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },
            statusTask(id) {
                axios.put('/api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },
            editTask(task) {
                this.seen = !this.seen;
                axios.post('/api/tasks', task)
                    .then((res) => {
                        this.task.description = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>

<style scoped>
.th{
width:200px;
}
</style>