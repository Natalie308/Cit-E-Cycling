<?php
//one single echo statement to include the entire person update form
//this contains a hidden input field so that we know which person to update
echo '
<form action="edit_participant.php" method="POST">
<input type="hidden" name="id" value="'.$id.'">
<p>Firstname</p>
        <input type="text" name= "firstname" value="'.$firstname.'">
        <p>Lastname</p>
        <input type="text" name= "surname" value="'.$surname.'">
        <p>Email</p>
        <input type="email" name= "email" value="'.$email.'">
        <p>Power Output</p>
        <input type="number" name= "power_output" value="'.$power_output.'">
        <p>Distance Travelled</p>
        <input type="number" name= "distance" value="'.$distance.'">
        <p>Club ID</p>
        <input type="number" name= "club_id" value="'.$club_id.'">
        <br />
<input type="submit" value="Update">
</form>';
?>