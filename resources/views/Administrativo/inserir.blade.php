<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="page">
        <form action="{{ route('registrar_veiculo')}}" method="POST" class="formLogin">
        <a href='/visualizar'>Inicio</a>
        @csrf    
        <h1>Inserção</h1>
            <input type="text" name="fabricante" placeholder="fabricante" autofocus="true" />
            <input type="text" name="modelo" placeholder="modelo" autofocus="true" />
            <input type="text" name="veiculo" placeholder="veiculo" autofocus="true" />
            <input type="text" name="categoria"  placeholder="categoria" autofocus="true" />
            <input type="integer" name="preco" placeholder="preço" autofocus="true" />
            <input type="integer" name="disponibilidade" placeholder="disponibilidade" autofocus="true" />
            <input type="submit" value="enviar" class="btn" />
        </form>
    </div>
    
</body>
</html>