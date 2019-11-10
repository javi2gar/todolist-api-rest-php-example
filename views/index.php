<?php
    include_once '../Controllers/usersRequestController.php';
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

    <h1 class="font-italic row justify-content-md-center">View Users List</h1>
    <h2 class="font-italic row justify-content-md-center">API REST PHP Example</h2>
    <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>                
                <th scope="col">photo</th>
                <th scope="col">name</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">profile</th>
                <th scope="col">todos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($userList as $user) {
                    echo "<tr>";
                    echo "<th scope=\"row\">".$user->id."</th>";
                    echo "<td><img src=\"".$user->portraitsThumbnail."\"></td>";   
                    echo "<td>".$user->name."</td>";
                    echo "<td>".$user->username."</td>";
                    echo "<td>".$user->email."</td>";
                    echo "<td>"."<form method=\"post\" action=\"profile.php\"><input type=\"hidden\" name=\"idProfile\" value=\"$user->id\"> <input type=\"submit\" class=\"btn btn-success\" value=\"View ".$user->username."\"></input></form></td>";
                    echo "<td>"."<form method=\"post\" action=\"todos.php\"><input type=\"hidden\" name=\"idProfile\" value=\"$user->id\"><input type=\"hidden\" name=\"userName\" value=\"$user->name\"><input type=\"submit\" class=\"btn btn-info\" value=\"Todos of user ".$user->id."\"></input></form></td>";
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