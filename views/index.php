<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dois BDs</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html,
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                    Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
                    "Helvetica Neue", sans-serifz;
                font-size: 100%;
                min-height: 100vh;
            }

            .debug-info {
                background: #efefef;
                border-left: 10px solid #333;
                border-radius: 5px;
                max-width: 100%;
                overflow-x: auto;
                padding: 1em;
                margin: 1em;
            }

            .u-text-center {
                text-align: center !important;
            }
        </style>
    </head>
    <body>
        <!-- 
        Eu tenho duas conexões com banco de dados distintos que não se conversam. 
        Eu preciso pegar o resultado de cada conexão e juntar em um array. 
        A conexão individual e a junção das bases funciona, porém estou repetindo 
        código pq não sei como fazer minha variável entender 
        que "$this->conexao_2()->prepare($sql)" é um objeto e não uma string. 
        -->
        
        <h1 class="u-text-center">Conectando a 2 bancos simultaneamente</h1>
        <?php $data = isset($data) && !empty($data) ? $data : ''; ?>
        <?php \Models\Debug::showWithDetails($data); ?>
    </body>
</html>
