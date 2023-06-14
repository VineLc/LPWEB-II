<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <link rel="stylesheet" href="main.css">
</head>
<tbody>
    <div class="page">
        <a href='/visualizar'>Inicio</a>
            <form action="{{ route('deletar_veiculo',['id' => $veiculo ->id]) }}" method="POST" class="formLogin">
            @csrf    
            <h1>Excluir esse produto?</h1>
                <input type="text" name="fabricante" value="{{ $veiculo->fabricante}}" autofocus="true" /></br>
                <input type="text" name="modelo" value="{{ $veiculo->modelo}}" autofocus="true" /></br>
                <input type="text" name="veiculo" value="{{ $veiculo->veiculo}}" autofocus="true" /></br>
                <input type="text" name="categoria"  value="{{ $veiculo->categoria}}" autofocus="true" /></br>
                <input type="integer" name="preco" value="{{ $veiculo->preco}}" autofocus="true" /></br>
                <input type="integer" name="disponibilidade" value="{{ $veiculo->disponibilidade}}" autofocus="true" /></br>
                <input type="submit" value="Excluir" class="btn" />
            </form>
    </div>
 </tbody>
    
</html>