<?php
    include_once '../Controllers/usersRequestController.php';
    include_once '../Controllers/errorMessages.php';

    $idProfile = (int) $_POST['idProfile']-1;
    $nextUser;
    $previousUser;

    if ($idProfile == 0){        
        alertMessageFirstProfile(); 
        $previousUser = 1;     
    }else{
        $previousUser = $idProfile;
    }

    if($idProfile == count($userList)){
        alertMessageLastProfile();
    }
    
    if ($idProfile == count($userList)){                                       
        $nextUser = --$idProfile;
    }else{
        $nextUser = $idProfile+2;
    }
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
  <h1 class="font-italic row justify-content-md-center">View User </h1>

  <div class="container">    
        <div class="row justify-content-around">
            <div class="col-1">
                <form method="post" action="profile.php">
                    <input type="hidden" name="idProfile" value=" <?php echo $previousUser?> ">
                    <input class="btn btn-outline-success" type = "submit" value="Previus" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"> 
                </form> 
            </div>   
            <div class="col-1">
                <form method="post" action="profile.php">
                    <input type="hidden" name="idProfile" value="<?php echo $nextUser?>">
                    <input class="btn btn-outline-success" type = "submit" value="Next"> 
                </form> 
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-2"></div>
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
                <th scope="col">Id</th>                
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>                
                <th scope="col">Phone</th>
                <th scope="col">Website</th>                 
                <th scope="col">Company</th>
                <th scope="col">Todos</th>  
                
            </tr>
        </thead>
        <tbody>
            <?php          

                echo "<tr>";
                echo "<th scope=\"row\">".$userList[$idProfile]->id."</th>";
                echo "<td><img src=\"".$userList[$idProfile]->portraitsProfile."\"></td>";   
                echo "<td>".$userList[$idProfile]->name."</td>";
                echo "<td>".$userList[$idProfile]->username."</td>";
                echo "<td>".$userList[$idProfile]->email."</td>";

                //Address
                echo "<td><strong>Street: </strong>".$userList[$idProfile]->address->street."<br>";                
                echo "<strong>Suite: </strong>".$userList[$idProfile]->address->suite."<br>";                
                echo "<strong>City: </strong>".$userList[$idProfile]->address->city."<br>";                
                echo "<strong>Zipcode: </strong>".$userList[$idProfile]->address->zipcode."<br>";   
                //Address Geo
                echo "<strong>--- Geo ---</strong><br>";
                echo "<strong>Ltd: </strong>".$userList[$idProfile]->address->geo->lat."<br>";                
                echo "<strong>Lng: </strong>".$userList[$idProfile]->address->geo->lng."</td>";
            
                echo "<td>".$userList[$idProfile]->phone."</td>";
                echo "<td>".$userList[$idProfile]->website."</td>";

                //Company
                echo "<td><strong>Name: </strong>".$userList[$idProfile]->company->name."<br>";                
                echo "<strong>CacthPrase: </strong>".$userList[$idProfile]->company->cacthPhrase."<br>";                
                echo "<strong>BS: </strong>".$userList[$idProfile]->company->bs."</td>";            
                
                echo "<td>"."<form method=\"post\" action=\"todos.php\"><input type=\"hidden\" name=\"idProfile\" value=\"".$userList[$idProfile]->id."\"><input type=\"hidden\" name=\"userName\" value=\"".$userList[$idProfile]->name."\"><input type=\"submit\" class=\"btn btn-info\" value=\"Todos of user ".$userList[$idProfile]->id."\"></input></form></td>";
                echo "</tr>";
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