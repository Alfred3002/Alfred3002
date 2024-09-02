<?php
//formhandler.php
//check if the form is submitted
if($_SERVER["REQUEST_METHOD"]=="POST") {
    //COLLECT FORM OF DATA 

    $firstname=htmlspecialchars(trim($_POST["firstname"]));
    $lastname=htmlspecialchars(trim($_POST["lastname"]));
    $gender=htmlspecialchars(trim($_POST["gender"]));

    //validation, saving

    if(empty($firstname) || empty($lastname)) {
        echo "Firstname and lastname are required";
    } else {
        //displaying the collected data

        echo "Firstname: ".$firstname."<br>";
        echo "Lastname: ".$lastname."<br>";
        echo "Gender: ".$gender."<br>";
    }
} else {
    echo "Form was not submitted correctly";
}

?>