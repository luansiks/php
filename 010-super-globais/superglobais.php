<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana","segunda", time() + 3600);

                session_start();
                $_SESSION["teste"] = "funcionou";

                print"<h1>Super global GET</h1>";
                var_dump($_GET);
                print"<h1>Super global POST</h1>";
                var_dump($_POST);
                print"<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST);
                print"<h1>Super global COOKIE</h1>";
                var_dump($_COOKIE);
                print"<h1>Super global session</h1>";
                var_dump($_SESSION);
                print"<h1>Super global ENV</h1>";
                var_dump($_ENV);
                /*foreach (getenv() as $c => $v){
                    print"<br>$c -> $v <br>";
                }*/
                print"<h1>Super global SEVER</h1>"; 
                var_dump($_SERVER);
                print"<h1>Super global GLOBALS</h1>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>