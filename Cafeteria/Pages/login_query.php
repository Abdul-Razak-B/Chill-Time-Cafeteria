<?php
//Connection
include('conn.php');
session_start();

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $ad_login_query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
    $ad_login_query_res = mysqli_query($conn, $ad_login_query);
    if (mysqli_num_rows($ad_login_query_res) > 0) {

        $_SESSION['login'] = true;
        $data = mysqli_fetch_array($ad_login_query_res);
        $id = $data['id'];
        $name = $data['name'];
        $img = $data['img'];
        $email = $data['email'];
        $username = $data['username'];
        $phone = $data['phone'];
        $city = $data['city'];
        $country = $data['country'];
        $dob = $data['dob'];
        $date = $data['date'];

        $_SESSION['ad_info'] = [
            'id' => $id,
            'name' => $name,
            'img' => $img,
            'email' => $email,
            'username' => $username,
            'phone' => $phone,
            'city' => $city,
            'country' => $country,
            'dob' => $dob,
            'date' => $date
        ];


        $_SESSION['message'] = ''.$name.' <strong>Logged in</strong> Successfully!';
        header("Location: index.php");
    }
    else{
        $_SESSION['message'] = "invalid credentials";
        header("Location: login.php");
    }
    $conn->close();
}
?>