<?php 
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60
    // Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    // Snack 5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
?>

<?php 
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60
   $arr_Partite = [
       [
           'casa' => [
               'nome' => 'Roma',
               'punti' => '55'
           ],
           'ospite' => [
                'nome' => 'Firenze',
                'punti' => '60'
            ]

       ]
   ]
?>

<?php 
    // Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Time</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
        
        <div class="snack">
            <h1>Snack 1</h1>
            <?php for ($_i=0; $_i < count($arr_Partite); $_i++) {  ?>
                <h3><?= $arr_Partite[$_i]['casa']['nome'] ?> </h3> - 
                <h3><?= $arr_Partite[$_i]['ospite']['nome'] ?> </h3> |
                <span><?= $arr_Partite[$_i]['casa']['punti'] ?> </span> - 
                <span><?= $arr_Partite[$_i]['ospite']['punti'] ?> </span> 
                <?php
            } ?>
        </div>

        <div class="snack">
            <h1>Snack 2</h1>
            <form action="" method="POST">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="username">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="insert your email">
                <label for="age"></label>
                <input type="number" name="age" id="age" placeholder="Your age?">
                <button>Login</button>
            </form>
            <?php
               
               if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {
                
                    if (strlen($_POST['name']) > 3) {
                        if ($_POST['age'] > 17) {
                            echo '<br><br> Accesso riuscito';
                        } else {
                            echo '<br><br> Accesso negato must +17!';
                        }
                        
                    } else {
                        echo '<br><br> Accesso negato';
                       }

                //    if ($_POST['name'])
                
               } 
            ?>
        </div>
    </div>
    
</body>
</html>
