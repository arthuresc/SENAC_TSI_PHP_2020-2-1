<!DOCTYPE html>
<html lang="pt-br">
<?php include './head-templ.php'; ?>

<body class="bg-dark d-flex flex-column">
    <div class="container bg-dark text-light h-100 d-flex flex-row align-items-center">
        <form action="" class="form-group col-3 bg-light text-dark mx-auto p-4 rounded mt-5 d-flex flex-column">
            <h2 class="text-center h3">Login</h2>
            <label for="userName" class="mt-3">Usuário</label>
            <input type="text" class="form-control" id="userName" name="userName" placeholder="Insira seu Usuário">
            <label for="userPass" class="mt-3">Senha</label>
            <input type="pasword" class="form-control" id="userPass" name="userPass" placeholder="Insira sua Senha">
            <!-- <small class="mt-1 muted form-text text-danger ">Mensagem de erro</small> -->
            <?php
                if (isset($msg)){echo '<small class="mt-1 muted form-text text-danger">Mensagem de erro</small>';}else{echo '<div style="height: 24px;"></div>';}
            ?>

            
            <button type="submit" class="btn btn-dark mt-3" name="submit" value="submit">Sign in</button>
            <a type="submit" class="btn btn-outline-dark mt-3" href="cadastro.php">Cadastre-se</a>
        </form>
    </div>

    <?php ?>

</body>

</html>