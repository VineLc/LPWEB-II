<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <link rel="stylesheet" href="main.css">
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#383838}
</style>

</head>
<tbody>
    <div class="page">
        <a href='/inserir'>Novo</a> 
        <table class="table table-hover text-nowrap">
            <thead>
                <td>ID</td>
                <td>FABRICANTE</td>
                <td>MODELO</td> 
                <td>VEICULO</td> 
                <td>CATEGORIA</td> 
                <td>PREÇO</td> 
                <td></td>
                <td></td>
            </thead>
            <tbody>
            <?php 
                    foreach ($lista as $linha) 
                    {
                        echo "<tr>".
                                "<td>".$linha['id']."</td>",
                                "<td>".$linha['fabricante']."</td>",
                                "<td>".$linha['modelo']."</td>",
                                "<td>".$linha['veiculo']."</td>",
                                "<td>".$linha['categoria']."</td>",
                                "<td>".$linha['preco']."</td>",
                                "<td>
                                <a href='/editar/".$linha['id']."' class='btn'>
                                EDITAR</a> 
                                </td>
                                <td>
                                <a href='/excluir/".$linha['id']."' class='btn'>
                                EXCLUIR</a>
                                </a>
        
                                </td>".
                            "</tr>";
                    }
                ?>
            </tbody>
        </table>
                </div>
</tbody>
</html>