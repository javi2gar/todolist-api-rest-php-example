<?php
    include_once '../controllers/todosRequestController.php';
    $idProfile = (int) $_POST['idProfile'];    
    $userName = $_POST['userName'];
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../draw/index.css">

    <title>PRTC03_API_REST_javi2gar</title>
</head>
<body>
  <h1 class="font-italic row justify-content-md-center">View Todos List </h1>
  <br>
  <div class="container">    
    <div class="row justify-content-around">
        <div class="col-1">
            <h2><span class="badge badge-secondary"><strong> Id: </strong><?php echo $idProfile ?></span></h2>        
        </div>
        <div class="col-6">    
            <h2><span class="badge badge-secondary"><strong> User Name:  </strong><?php echo $userName ?></span></h2>
        </div>    
        <div class="col-4">
            <form method="post" action="profile.php">
                <input type="hidden" name="idProfile" value="<?php echo $idProfile ?>">
                <input class="btn btn-outline-success" type = "submit" value="Return to profile view"> 
            </form> 
        </div>
        <div class="col-1"> 
            <form method="post" action="index.php">
                <input class="btn btn-outline-danger" type = "submit" value="Go to home">  
            </form> 
        </div>
    </div>
    <br>      
    </div> 

    <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th scope="col">User Id</th>                
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Completed</th>                
            </tr>
        </thead>
        <tbody>

            <?php       
            
                $todosUser = array();

                foreach ($todosList as $todos) {                    
                    if( ($todos->userId) == $idProfile){
                        array_push($todosUser, $todos);                       
                    }
                }

                foreach ($todosUser as $todo) {      
                    echo "<tr>";
                    echo "<th scope=\"row\">".$todo->userId."</th>";
                    echo "<td>".$todo->id."</td>";
                    echo "<td>".$todo->title."</td>";
                        if($todo->completed == true){
                            echo "<td><img  src=\"../draw/checkIcon.png\" width=\"15\" height=\"15\"></td>"; 
                        }else{
                            echo "<td>".$todo->completed."</td>";
                        }
                    echo "</tr>";        
                }
            ?>
        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<footer> 
    <div class="container"> 
        <div class="row justify-content-around">
            <div class="font-italic row justify-content-md-center">
                by javi2gar - DAW 2019-2020 CIP
            </div>            
        </div>
    </div>
</footer>