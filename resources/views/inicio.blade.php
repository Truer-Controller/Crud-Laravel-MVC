<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
<form action="{{route("storeproduto")}}" method="POST">
    @csrf
    <label for="">Nome do produto</label>
    <input type="text" name="nome">
    <br>
    <br>

    <label for="">Valor do produto</label>
    <input type="text" name="valor">
    <br>
    <br>

    <label for="">Quantidade em estoque produto</label>
    <input type="text" name="estoque">
    <br><br>

    <button>Salvar produto</button>
</form>
</body>
</html>
