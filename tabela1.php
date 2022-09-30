<?php
$tabela=array(
    ['01/09','Aula1', 'marcelo', 'jefersom', 'Paulo'],
    ['01/09','Aula2', 'marcelo', 'ulisses', 'Paulo'],
    ['02/09','Aula1', 'Gleidson', 'jefersom', 'Paulo'],
    ['02/09','Aula2', '', 'Heltom', 'Paulo'],
    ['05/09','Aula1', 'Ulisses', 'jefersom', 'Paulo'],
    ['05/09','Aula2', 'Ulisses', 'jefersom', 'Rodolfo'],
    ['06/09','Aula1', '', 'Paulo', ''],
    ['06/09','Aula2', 'Jefersom', 'Fernando', 'Ulisses'],
    ['07/09','Aula1', 'Paulo', 'Heltom', 'Ulisses'],
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://files.passeidireto.com/b1b0452c-cc7e-439b-a18e-e1e578cdadba/b1b0452c-cc7e-439b-a18e-e1e578cdadba.png" type="image/x-icon">
    <title>Document</title>
    <style>

        header h1{
            margin: auto;
            text-align: center;
            color: white;
            height: 95px;
        }

        body{
            background-image: url(https://i.pinimg.com/originals/7d/98/84/7d98840fdff1b2e7cd508cc7f3a17403.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            
        }

        table{
            height: 300px;
            width: 650px;
            margin: auto;
            color: wheat;
            box-sizing: 5px 10px 3px;
        }

        table th{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: x-large;
            color: white;
        }

        table td{
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
        }
    </style>
</head>
<body>
<header>
    <h1>PERÍODO DIURNO</h1>
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