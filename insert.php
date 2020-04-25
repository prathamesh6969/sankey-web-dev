<?php
        $link = mysqli_connect("localhost", "root", "root", "demo");

        // Check connection
        if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $target_path = "assets/events/";  
        $target_path = $target_path.basename( $_FILES['e_image']['name']);   

        // Escape user inputs for security
        // $eid = mysqli_real_escape_string($link, $_REQUEST['eid']);
        $e_name = mysqli_real_escape_string($link, $_REQUEST['e_name']);
        $e_date = mysqli_real_escape_string($link, $_REQUEST['e_date']);
        $e_title = mysqli_real_escape_string($link, $_REQUEST['e_title']);
        $e_content = mysqli_real_escape_string($link, $_REQUEST['e_content']);
        $e_location = mysqli_real_escape_string($link, $_REQUEST['e_location']);
        // $e_image = mysqli_real_escape_string($link, $_REQUEST['e_image']);
        $e_link = mysqli_real_escape_string($link, $_REQUEST['e_link']);
        $sid = rand(10,1000);

        $time = strtotime($e_date);
        $newformat = date('Y-m-d',$time);
        // $fileTarget = 'assets/events/' . 'e_image';
        if(move_uploaded_file($_FILES['e_image']['tmp_name'], $target_path)) {  
            // echo "File uploaded successfully!";  
        } else{  
            // echo "Sorry, file not uploaded, please try again!";  
        }  
        // Attempt insert query execution
        $sql = "INSERT INTO events (eid,e_name,e_date,e_title,e_content,e_location,e_image,e_link,sid) VALUES (null, '$e_name', '$newformat', '$e_title', '$e_content', '$e_location', '$target_path','$e_link','$sid')";
        if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // Close connection
        mysqli_close($link);
?>