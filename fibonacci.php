<!DOCTYPE html>
<html>
<head>

    <title>PHP | Fibonacci</title>
    
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
         @import url('https://fonts.googleapis.com/css2?family=Madimi+One&display=swap');
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(90deg, rgb(245, 194, 255), rgb(242, 199, 255));
        }

        * {
            font-family: "Madimi One", sans-serif;
            font-size: 32px
        }

        span {
            color: #888;
            font-weight: 700;
            margin-left: 10px
        }
    </style>

</head>
<body>
    <?php
        // Função de calculo por meio de parâmetros
        // Recebe o número pela var $number
        function fibonacci($number) {

            // Verifica se $number é menor ou igual a 1, ou seja, esteja no primeiro ou no segundo termo da sequência.
            if ($number <= 1) {
                // Caso verdadeiro: Retorna o $number e acaba a função
                return $number;
            } else {
                // Caso falso: Faz uma chamada para a função, passando o $number novamente, porém -1 do valor + chamada da função passando o valor de $number - 2;

                // Ele tenta descobrir o valor Enésimo dentro da sequência = Valor  que ocupa uma posição dentro de uma sequência, seu valor vai depender do objeto a ser localizado.
                return fibonacci($number - 1) + fibonacci($number - 2);
                // O valor desse return vai ser o valor Enésimo
                
                // Ele irá retornar essa função até o momento que chegar em $number <= 1
            }
        }

        $num = 10; // Número a ser calculado
        $resultado = fibonacci($num); // Retorno da função com o resultado final
        
        echo "O resultado é : <span> $resultado</span>"; // Impressão do resultado
    ?>

</body>
</html>