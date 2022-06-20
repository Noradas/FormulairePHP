<?php require_once('connect.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>
    <h1>Contact</h1>

    <form  method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
                                                                                    
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <label for="priority">priority</label>
        <select id="priority" name="priority">
          <option value="1">Low</option>  
          <option value="2" selected>Medium</option>
          <option value="3">Hight</option>
        </select>

         <fieldset> 
          <legend>Type</legend>

           <label>
            <input type="radio" name="type" value="1" checked>
            Complaint
          </label>

          <br>

          <label>
            <input type="radio" name="type" value="2">
            Suggestion
          </label>
        </fieldset>

        
       <br>

       <button name="submit">Modifier</button>
        <?php
            if(isset($_POST['submit'])){
                
                $id=$_GET['id'];
                $name = $_POST['name'];
                $message = $_POST['message'];
                $priority = filter_input(INPUT_POST, "priority" , FILTER_VALIDATE_INT);
                $type = filter_input(INPUT_POST, "type" , FILTER_VALIDATE_INT);
                
                $req="UPDATE message SET name='$name',body='$message',priority=$priority, type=$type WHERE id=$id ";
                $result=mysqli_query($conn,$req);
                if($result){
                    echo "Modification réussie";
                    header('location:afficher.php');
                } else {
                    echo "Modification échouée";
            
                }
            }
        
        ?>
    </form>
   
</body>
</html>