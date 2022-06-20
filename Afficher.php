<?php require_once('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table> 
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>message</th>
            <th>priority</th>
            <th>type</th>
            <th>supprimer</th>
            <th>Modifier</th>
        </tr>
        <?php 
            $req= "SELECT * FROM message";
            $result= mysqli_query($conn,$req);
            while($ligne= mysqli_fetch_assoc($result))
            {

        ?>
        <tr>
                <td><?php echo $ligne['id'];?></td>
                <td><?php echo $ligne['name'];?></td>
                <td><?php echo $ligne['body'];?></td>
                <td><?php echo $ligne['priority'];?></td>
                <td><?php echo $ligne['type'];?></td>
                <td><a href="del.php?id=<?php echo $ligne['id'];?>">Supprimer</a></td>
                <td><a href="edit.php?id=<?php echo $ligne['id'];?>">Modifier</a></td>
        </tr>
            <?php }?>

    </table>
    
</body>
</html>