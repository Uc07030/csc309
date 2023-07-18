  $server = 'localhost'; // 127.0.0.1

    $username = 'root';

    $password = '';

    $db = 'csc309';



    // Open a new connection

    $con = new mysqli($server, $username, $password, $db);



    // Check connection

    if ($con->connect_error){

        die("Connection failed: " . $con->connect_error);

    }



    // Query  once the submit button is cliked the data will be sent to the database
// and to users table 
    if(isset($_POST['submit'])){ 
//WE  are storing the key value pairs from our formt to $variabls=$_POST ['name'];
    $firstname = $_POST['firstname'];

    $lastname = $_POST['lastname'];

    $email = $_POST['email'];

    $gender = $_POST['gender'];

    $date_of_birth = $_POST['date_of_birth'];



    $sql = "INSERT INTO users (`firstname`, `lastname`, `email`,`gender`,`date_of_birth`) 

    VALUES ('$firstname', '$lastname', '$email','$gender', '$date_of_birth ')";// variables containing values from form 

 

     $result = $con->query($sql);



    if ($result === true) {
// checking if records are successfully sent to the dabase table users
        echo 'Record inserted successfully';

    } else {

        echo 'Error inserting record: ' . $con->error;

    }





    }

    

   



    

    $con->close();



    // Close connection



?>
