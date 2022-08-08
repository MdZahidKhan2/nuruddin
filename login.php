<?php include 'doc_start.php'; ?>


<?php include 'header.php'; ?>

<?php include 'core/user.php'; ?>

<?php   

$user = new user();

?>



<br>
<br>
<br>
<br>
<br>
<div class ="container">
    <div class = "row">
        <div class = "col-12 text-center">
            <h3>Login</h3>
            <?php
            if(isset($_POST['submit'])){
                if (!empty($_POST['username']) && !empty($_POST['password'])){
                    $response= $user->loginCheck($_POST['username'],$_POST['password']);

                    if(count($response) == 1){
                        print_r($response);
                        session_start();

                        $_SESSION['user_id'] = $response[0]['id'];
                        $_SESSION['username'] = $response[0]['username'];
                        header('location: dashboard.php');

                    }else { 
                        echo "<li class = 'alert alert-danger'> Invalid Credentials!</li>";
                    }

                } else { 
                     echo "<li class = 'alert alert-danger'> All Fields required! </li>";
                }
            }
            ?>


            <from action="" method="POST" class = "from-group">
                <input class="from control" type = "text" name="username" placeholder = "user Name"><br>
                <input class="from control" type = "email" name="email" placeholder = "email"><br>
                <input class="from control" type = "password" name="password" placeholder = "password"><br>
                <input class="btn btn-success btn-block" type = "submit" name="submit" ><br>
            </from>
        </div>
    </div>
 

</div>


<?php include 'footer.php'; ?>



<?php include 'doc_end.php'; ?>