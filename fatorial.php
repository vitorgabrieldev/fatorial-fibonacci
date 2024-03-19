<!DOCTYPE html>
<html>
<head>

    <title>PHP | Fatorial</title>
    
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
        }

        td {
            border: 1px solid #000;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        td:hover {
            transition: .33s ease;
            padding: 10px 20px;
        }
    </style>

</head>
<body>

    <table>
    <?php
        $num = 5;
        $total = 0;

        while( $num >= 1 ) {
            $num2 = $num - 1;
            $total = $num2 * $num;
            $num--;
            echo "<td title='$total'>$total</td>";
        };
        ?>
    </table>
</body>
</html>