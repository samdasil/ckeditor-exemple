<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor</title>
</head>
<body>

    <div class="container">

        <div class="row">
            <h3>Utilização do CKEditor com CKFinder</h3>
        </div>
        <hr>
        <form id="formt" name="formt" action="generate.php" method="post">
            <!-- CKEditor v4 -->   
            <div class="form-group">
                <label for="filename">Nome do arquivo</label>
                <input type="text" class="form-control" id="filename" name="filename" aria-describedby="filenameHelp" placeholder="nome_arquivo" required>
                <small id="filenameHelp" class="form-text text-muted">Somente o nome, sem a extensão.</small>
            </div>

            <div class="form-group">
                <label for="editor">Área de criação/edição do post</label>
                <textarea class="form-control" id="editor" name="editor" rows="30" cols="80" required></textarea>
            </div>
            
            <!-- CKEditor v5 -->
            <!-- 
                <div class="form-group">
                <div id="editor">
                    <p>Here goes the initial content of the editor.</p>
                </div>
            </div> 
            -->
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="./vendor/ckeditor/ckeditor.js"></script>
    <script src="./vendor/ckfinder/ckfinder.js"></script>
    <script src="./assets/js/main.js"></script>

</body>
</html>