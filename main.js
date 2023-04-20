const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoText: ""
        }
    },
    methods: {
        getTodoList() {

            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                });
        },

        addToList() {

        }
    },
    mounted() {
        this.getTodoList();
    }

}).mount('#app')