<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php include'' ?>
</head>
<body>
    <div class="jumbotron d-flex flex-column flex-nowrap col-6 rounded mx-auto bg-dark my-3">
        <div class="" id="title">
            <h1 class="text-center text-light h3 mb-5">
                Todo List
            </h1>
        </div>
        <div id="todo-list">
            
            <ul class="list-group list-group-flush text-dark ">
                <li class="list-group-item rounded my-2">
                    <form class="d-flex flex-row flex-nowrap justify-content-between">
                        <input class="rounded h4 pt-1" type="text" method="post" name="todoTxt" action="newTodo.php" placeholder="Write your to-do..."> <!-- Pensar em como resolver o php aqui colocar um include -->
                        <div class="btn-group">
                            <button type="submit" class="btn btn-outline-primary">New</button>
                            <button type="button" class="btn btn-outline-danger">Clear</button>
                        </div>
                    </form>
                </li>
                <?php
                include'./printTodos.php';
                ?>
            </ul>
        </div>
    </div>
</body>
</html>

