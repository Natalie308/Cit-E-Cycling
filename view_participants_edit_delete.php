<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viewing the people table</title>
</head>
<body>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        a.button {
            
            padding:5px;
            background-color:green;
            color:white;
            border-radius:3px;
            margin-top:3px;
            display:block;
            width:130px;
            text-decoration:none;
        }
        a.dbutton {
        
            padding:5px;
            background-color:red;
            color:white;
            border-radius:3px;
            margin-top:3px;
            display:block;
            width:130px;
            text-decoration:none;
        }
    </style>
    <table>
        <tr>
				<th>ID</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Power Output</th><th>Distance</th><th>Club_id</th><th>Update</th><th>Delete</th>
        </tr>
    <?php
        
      //database connection variables for the database on your web server
      include 'dbconnect.php';

        //we start a try and catch block to attempt to connect to our database and run the query. If it fails, we see the error/exception generated by the catch
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //building a new PDO connection object
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
            
            //Selecting multiple rows from a MySQL database using the PDO::query function.
            //SOrting the data by the ID field and limiting the results to the last 50 for the purpose of this example
            $sql = "SELECT * FROM participant ORDER BY id ASC LIMIT 50";
            
            //For each result that we return, loop through the result and perform the echo statements.
            //Data will be formatted into a table
            //$row is an array with the fields for each record returned from the SELECT
                foreach($conn->query($sql, PDO::FETCH_ASSOC) as $row){
                    echo '<tr>';
                    echo '<td>'. $row['id'] . '</td>';
                    echo '<td>'. $row['firstname'] . '</td>';
                    echo '<td>'. $row['surname'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>'. $row['power_output'] . '</td>';
                    echo '<td>'. $row['distance'] . '</td>';
                    echo '<td>'. $row['club_id'] . '</td>';
                   
                    //Updated script now includes a link to update or delete the person
                    //The link passes over the id of the person to the URL, to use on either the delete or the update script. 
                    echo '<td><a href="edit_participant.php?id='.$row['id'].'" class="button">Edit this participant</a></td>';
                    echo '<td><a href="delete.php?id='.$row['id'].'" class="dbutton" onclick="return confirm(\'Are you sure you want to delete this person?\');">Delete this person</a></td>';
                    
                    echo '</tr>';
                }
            
            }
        catch(PDOException $e)
            {
            echo "Error" . $e->getMessage(); //If we are not successful we will see an error
            }
        ?>

        </table>
	
	<a href="index.html">Back to Homepage</a>
</body>
</html>