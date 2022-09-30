<?php
$tabela=array(
    ['01/09','Aula1', 'Rodrigo', 'jefersom', 'Paulo'],
    ['01/09','Aula2', 'Jefersom', 'Rodrigo', 'Paulo'],
    ['02/09','Aula1', 'Gleidson', 'Rodrigo', 'Edersom'],
    ['02/09','Aula2', 'Helio', 'Rodrigo', 'Edersom'],
    ['05/09','Aula1', 'Jefersom', 'Edersom', 'Ulisses'],
    ['05/09','Aula2', 'Ulisses', 'Edersom', 'Jefersom'],
    ['06/09','Aula1', 'Heltom', 'Jefersom', 'Ulisses'],
    ['06/09','Aula2', 'Gilson', 'Jefersom', 'Ulisses'],
    ['07/09','Aula1', '', 'Paulo', 'Jefersom'],
    ['07/09','Aula2', 'Heltom', 'Paulo', 'Jefersom'],

);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://i.pinimg.com/originals/38/94/4d/38944d6cd3371228c243bc2de9eb3592.png" type="image/x-icon">
    <title>Document</title>
    <style>

        header h1{
            margin: auto;
            text-align: center;
            color: white;
            height: 95px;
        }

        body{
            background-image: url(https://images4.alphacoders.com/808/thumb-1920-808445.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            
        }

        table{
            height: 300px;
            width: 650px;
            margin: auto;
            color: whitesmoke;
            box-sizing: 5px 10px 3px;
        }

        table th{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: x-large;
            color: black;
        }

        table td{
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
        }
    </style>
</head>
<body>
<header>
    <h1>PERÍODO NOTURNO</h1>
</header>

<table border="5px">
    <th>Data</th>
    <th>aulas</th>
    <th>lab01</th>
    <th>lab02</th>
    <th>lab03</th>
<tr>

<?php foreach($tabela as $dado) : ?>

    <td><?php echo $dado[0];?></td>
    <td><?php echo $dado[1];?></td>
    <td><?php echo $dado[2];?></td>
    <td><?php echo $dado[3];?></td>
    <td><?php echo $dado[4];?></td>
</tr>

<?php endforeach; ?>

</table>
    
</body>
</html>