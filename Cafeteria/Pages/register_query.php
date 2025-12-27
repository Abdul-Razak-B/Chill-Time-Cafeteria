<?php
include('conn.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    //$date = $_POST['date'];
    $dob = $_POST['dob'];

    if($name != null  && $username != null && $email!= null && $password!= null && $phone!= null){
        $users = "INSERT INTO users (`name`, `img`, `username`, `email`, `password`, `city`, `country`, `phone`, `dob`)
                        VALUES ('$name', '$img', '$username', '$email', '$password', '$city', '$country', '$phone', $dob)";
        $result = mysqli_query($conn, $users);
        if (!$result) {
            ?>
            <script>
                alertify.set('notifier','position', 'top-center');
                alertify.error('Error');
            </script>
            <?php
        }
        else{
            //$success_msg = '<div class="alert alert-warning alert-dismissible fade show""><i class="fa fa-utensils"></i>&nbsp;&nbsp;Item Stored!</div>';
            ?>
            <script>
                //alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Item Successfully Added') }
                //, function(){ alertify.error('Cancel')});
                alertify.set('notifier','position', 'top-center');
                alertify.success('Account Successfully Created!');
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
            //alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Item Successfully Added') }
            //, function(){ alertify.error('Cancel')});
            alertify.set('notifier','position', 'top-center');
            alertify.danger('User Not Added Please Fill Necessary Information');
        </script>
        <?php
    }
}
?>