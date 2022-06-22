<?php

if( isset($_POST) && !empty($_POST) ) {
    $name = $_POST['filename'];
    $conteudo = $_POST['editor'];
    file_put_contents('./pages/'.$name.'.php', $conteudo);
    $_POST = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor - List Files</title>
</head>
<body>
    
    <?php 
        $path = "./pages/";

        //Listamos o diretório e removemos os pontos da lista
        $listDiretorio = array_diff(
            scandir($path),
            ['.', '..']
        );
    ?>
    <div class="container">
        <div class="row">
            <h3>Lista de páginas</h3>
        </div>
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Filename</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //Percorremos todos os itens da nossa lista
                        $i = 0;
                        foreach($listDiretorio as $diretorio){
                            $isDir = is_dir($path . $diretorio) ? 'Diretório' : 'Arquivo';
                            echo "
                                <tr>
                                    <th scope='row'>".++$i."</th>
                                    <td><a href='{$path}{$diretorio}'>{$diretorio} </a></td>
                                </tr>";
                        }
                    ?>            
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="index.php" class="btn btn-help">Início</button>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>