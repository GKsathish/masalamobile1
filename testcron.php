<?php
/*$servername = "localhost";
$username = "masalamobile_new_user";
$password = "H9lP%v%LL7}+";
$dbname = "masalamobile_newDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  test_cron (status) VALUES ('inserted')";

/*if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}  * /

$conn->close();
*/
?>

<?php
    $postData = array(
        'phone_number' => "+918667462160",
    );
    
    $ch = curl_init('http://13.234.96.218:3000/sendMessage');
    
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
        CURLOPT_POSTFIELDS => json_encode($postData),
    ));
    $response = curl_exec($ch);
      if (curl_errno($ch)) {
                print "Error: " . curl_error($ch);
                exit();
            }
    echo "Response : ".$response;
    curl_close($ch);
    // echo "<script LANGUAGE='JavaScript'>window.alert('Successfully Added for MobileMasala Updates') window.location.href='https://mobilemasala.com/'; </script>";
?>