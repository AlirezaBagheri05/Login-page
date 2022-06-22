<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once 'config.php';
        include_once 'libs/db_users.php';
        
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>mah ramadan</title>
        <link rel="stylesheet" href="css/login.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/navbar.css"/>
        
<!--        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/login.js" type="text/javascript"></script>-->
        <script src="javascript/timeout.js"></script>
        
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Demo CSS -->
        <link rel="stylesheet" href="css/demo.css">
        <script src="js/info.js" type="text/javascript"></script>
    </head>
    <body>
        <?php 
//            add_fara_User('fara_user');
//            add_tb_User('users');
//            add_tb_admin('admins');
        if(!isset($_COOKIE['fara'])){
            if(isset($_GET['email'])){
               $email =  $_GET['email'];
               $password = $_GET['password'];
               $user = get_fara_user('fara_user', $email);
               $Oemail = $user['email'];
               $Opassword = $user['password'];
               if($email === $Oemail){
                   if($password === $Opassword){
                       setcookie('fara' , 'true');
                       header("Refresh: 1");
                   } 
               }
            }
        }
           
           
//            $email = 'negarBagheri8413@gmail.com';
//            var_dump($user);
        if(!isset($_COOKIE['fara'])){
            include_once 'temps/popupLogin.php';
        }
        
            include_once 'temps/navbar_1.php';
            include_once 'temps/comment.php';
            
            if(isset($_POST['name_admin'])){
                $name = $_POST['name_admin'];
                $password = $_POST['ps_admin'];
                if(get_admin('admins',"$name")){
                     $value = get_admin('admins',"$name");
                        $NM =  $value['name'];
                        $PS = $value['password'];
                        if($NM === $name){
                            if($PS === $password){
                                ?>
                               <div class="alert center_1 alert-success top_pup" role="alert">
                                <h4 class="alert-heading  direction_rtl">خوش اومدی <?PHP echo  ' '.$name.' '; ?>:)</h4>
                              </div>
                           <?PHP
                                $date_1 = get_dates('users');
                                ?>
                                <div class="div_table">
                                    <table class="table table-striped table-dark">
                                        <thead>
                                          <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                            <th scope="col">phone</th>
                                            <th scope="col">date</th>
                                            <th scope="col">date_user</th>
                                            <th scope="col">model</th>
                                            <th scope="col">ip</th>
                                            <th scope="col">resulotion</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?PHP
                                    foreach ($date_1 as $key => $value) {
                                        $id = $value['id'];
                                        $name = $value['name'];
                                        $family = $value['family'];
                                        $phone = $value['phone'];
                                        $date = $value['date'];
                                        $date_user = $value['date_user'];
                                        $model = $value['model'];
                                        $ip = $value['ip'];
                                        $resulotion = $value['resulotion'];
                                    ?>
                                      <tr>
                                        <th scope="row"><?PHP echo $id; ?></th>
                                        <td><?PHP echo $name.' '.$family; ?></td>
                                        <td><?PHP echo $phone; ?></td>
                                        <td><?PHP echo $date; ?></td>
                                        <td><?PHP echo $date_user; ?></td>
                                        <td><?PHP echo $model; ?></td>
                                        <td><?PHP echo $ip; ?></td>
                                        <td><?PHP echo $resulotion; ?></td>
                                      </tr>
                                    <?PHP
                                }
                                ?>
                                    </tbody>
                                  </table>
                                </div>
                                <?PHP
                                
                            } else {
                            include_once 'temps/error.php';
                           }
                        } else {
                            include_once 'temps/error.php';
                        }
                        } else {
                            include_once 'temps/error.php';
                        }
                        
            }
         ?>
            
        <p id="demo"></p>
        <form method="POST" id='form' style='display: none;' class="form-inline center_1">
            <div class="form-group mb-2">
              <label for="staticEmail2" class="sr-only">name</label>
              <input type="name"  name='name_admin' class="form-control" id="staticEmail2" placeholder="name">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="password" name='ps_admin' class="form-control" id="inputPassword2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
      </form>
        
         <?PHP
            include_once 'temps/footer.php';
         ?>
        
        <div class="dropdown"></div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
        <!-- jQuery -->
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
        <!-- Popper JS -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
        <!-- Bootstrap JS -->
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
         <!-- Custom Script -->      
        <script  src="js/script.js"></script>
    </body>
</html>
