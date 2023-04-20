<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List JSON</title>

    <link rel="stylesheet" href="./css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    <body class="bg-dark">
    
        <div id="app">
            <section>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            
                        <div class="card">
                            <div class="card-header">
                                <h2>Tasks</h2>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-danger" v-if="todoList.length == 0">
                                        Nessun task da mostrare
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" v-for="(item, index) in todoList">
                                        <span class="list-group-item-sx"> 
                                            <i v-if="item.status == 'done'" class="fa-solid fa-check text-success"></i>
                                            <i v-else class="fa-solid fa-minus "></i>
                                    
                                            <span class="list-group-inner ms-2" :class="item.status" @click="toggleStatus(index)">{{ item.text }}</span>                  
                                        </span>
                                        <button class="btn btn-danger" @click="removeItem(index)">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
           
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <div class="row row-cols-auto justify-content-between">
                                    <div class="col-lg-10">
                                        <label for="todo" class="visually-hidden">Add new task...</label>
                                        <input type="text" class="form-control" id="todo" placeholder="Add new task..." v-model="todoText" @keyup.enter="addToList">
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-dark" @click="addToList">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
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