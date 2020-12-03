<html>

<body>
    <center>
        <ul>
            <li>
                <form method="post">
                    <?php
                    if (!empty($msg)) {

                        echo "<strong>$msg</strong>";
                    }
                    ?>
                    <label for='nome'>Nome:</label>
                    <input type="text" name="nome"> </td>
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao"> </td>
                    <label for="preco">Preço:</label>
                    <input type="text" name="preco"> </td>

                    <input type="submit" name="gravar" value="Gravar">
                </form>
            </li>
        </ul>
    </center>
</body>

</html>