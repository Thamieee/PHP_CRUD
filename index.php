<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Primeiro Site PHP </title>
</head>

<body>
    <h1>Formulário do CRUD </h1>
    <form action="controller\Controlador.php" method="get">
        Código: <input type="text" name="txtCodigo" /> <br />
        Descrição: <input type="text" name="txtDescricao" /> <br />
        Preço: <input type="text" name="txtPreco" /> <br /><br />
        <input type="submit" name="b1" value="Gravar" />
        <input type="submit" name="b1" value="Alterar" />
        <input type="submit" name="b1" value="Remover" />
        <input type="submit" name="b1" value="Listar" />
    </form>
</body>

</html>