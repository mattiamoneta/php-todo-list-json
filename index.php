<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List JSON</title>

    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <body data-bs-theme="dark">
    
        <div id="app">
            <section>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <ul class="list-group">
                                <li class="list-group-item" v-for="item in todoList" :class="item.status">{{ item.text }}</li>
                            </ul>
                            
                            <div class="row py-3">
                                <div class="col-auto">
                                    <label for="todo" class="visually-hidden">Todo</label>
                                    <input type="text" class="form-control" id="todo" placeholder="Todo" v-model="todoText">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary mb-3" @click="addToList">Add</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="./main.js" type="text/javascript"></script>
    </body>
</html>