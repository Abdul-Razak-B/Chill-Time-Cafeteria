<?php 
session_start();
include('conn.php'); //Connection
//$id = $_SESSION['login']['id'];

if(isset($_SESSION['login'])){ 
    if (isset($_POST['$scope'])) {
        $scope = $_POST['scope'];
        switch($scope)
        {
            case "add":
                $prod_id = $_POST['prod_id'];
                $prod_qnt = $_POST['prod_qnt'];
                $id = $_SESSION['user']['id'];
                
                $sql = "INSERT INTO `cart` (id, p_id, p_qnt) VALUES (`$id`,`$prod_id`, `$prod_qnt`)";
                $sql_run = mysqli_query($conn, $sql_run);
                if($sql_run){
                    echo 201; //Created
                }
                else{
                    echo 500;
                }
                
                break;
            default:
                echo 500;
        }
    }
}
else{
    echo 'Unsuccessfull Go Back';
}

/*if(!isset($_SESSION['login'])){
    if(isset($_POST['scope'])) {
        $scope = $_POST['scope'];
        switch($scope)
        {
            case "add":
                $prod_id = $_POST['prod_id'];
                $prod_qnt = $_POST['prod_qnt'];
                
                $user_id = $_SESSION['ad_info']['id'];
    
                $cart_query = "INSERT INTO `cart` (u_id, p_id, p_qnt) VALUES ('$user_id', '$prod_id', '$prod_qnt')";
                $cart_query_run = mysqli_query($conn, $cart_query);
                if($cart_query_run){
                    echo 201;
                }
                else{
                    echo 500;
                }
    
                break;
            default:
                echo 500;
        }
    }
}
else{
    echo 401;
}*/
?>