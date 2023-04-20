const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoText: ""
        }
    },
    methods: {
        // Get all tasks from axios
        getTodoList() {

            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                });
        },

        // Add new tasks 
        addToList() {

            const data = {
                item: this.todoText
            }

            axios.post('server.php', data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }
            ).then(response => {
                this.todoList = response.data;
                this.todoText = "";
            });
        }
    },
    mounted() {
        this.getTodoList();
    }

}).mount('#app')