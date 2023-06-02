<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register your interest</title>
</head>
<body>
    <?php
	session_start();
    //including connection variables  
    include 'dbconnect.php';

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new connection object
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //TODO INSERT - complete the functionality
				
				 $firstname = $_POST['firstname'];
       			 $surname = $_POST['surname'];
       			 $email = $_POST['email'];
        		 
				
				
			 $stmt = $conn->prepare("INSERT INTO interest (firstname, surname, email)
            VALUES (:firstname, :surname, :email)");
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':email', $email);

          
            
            
            $stmt->execute();
            
            echo "New table record created successfully"; 
            
            }
        catch(PDOException $e)
            {
            echo "Error" . $e->getMessage(); 
            }
        ?>


</body>
</html>