<?php        
require 'connect.php';
    if(isset($_POST['submit-btn'])) {
    echo'<br>submit';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($email) && !empty($password)) {
        echo '<pre>';
        print_r ($_POST);
        $sql = "INSERT INTO reg_board (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
    else {
        echo "phai nhap het";
    }
}
echo phpversion();
echo "<br> sick my duck ";
echo "<pre>";
print_r ($_POST);
?>

