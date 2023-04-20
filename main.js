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

        postAndUpdate(data) {

            axios.post('server.php', data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }
            ).then(response => {
                this.todoList = response.data;
            });

        },

        // Add new tasks 
        addToList() {
            if (this.todoText != '') {
                const data = {
                    item: this.todoText
                }

                this.postAndUpdate(data);
                this.todoText = "";
            }
        },

        //Remove task
        removeItem(el) {

            const data = {
                remove: el
            }

            this.postAndUpdate(data);
            this.todoText = "";

        },

        //Toggle task status
        toggleStatus(el) {

            const data = {
                toggle: el
            }

            this.postAndUpdate(data);
            this.todoText = "";
        }


    },
    mounted() {
        this.getTodoList();
    }

}).mount('#app')