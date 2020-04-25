<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <p>
        <label for="Event Id">Event ID:</label>
        <input type="number" name="eid" id="eid" required>
    </p>
    <p>
        <label for="Event Name">Event Name:</label>
        <input type="text" name="e_name" id="e_name" required>
    </p>
    <p>
        <label for="Event Date">Event Date:</label>
        <input type="text" name="e_date" id="e_date" required>
    </p>
    <p>
        <label for="Event Title">Event Title:</label>
        <input type="text" name="e_title" id="e_title" required>
    </p>
    <p>
        <label for="Event Content">Event Content:</label>
        <input type="text" name="e_content" id="e_content" required>
    </p>
    <p>
        <label for="Event Location">Event Location:</label>
        <input type="text" name="e_location" id="e_location" required>
    </p>
    <p>
        <label for="Event Image">Event Image:</label>
        <input type="text" name="e_image" id="e_image" required>
    </p>

    <input type="submit" value="Submit">
</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/events_form.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<div class="events-form">
    <form action="../insert.php" method="post" id="submit-event" enctype="multipart/form-data">
        <p>
            <label for="Event Name">Event Name:</label>
            <input type="text" name="e_name" id="e_name" required>
        </p>
        <p>
            <label for="Event Date">Event Date:</label>
            <input type="date" name="e_date" id="e_date" onkeydown="return false" required>
        </p>
        <p>
            <label for="Event Title">Event Title:</label>
            <input type="text" name="e_title" id="e_title" required>
        </p>
        <p>
            <label for="Event Content">Event Content:</label>
            <input type="text" name="e_content" id="e_content" required>
        </p>
        <p>
            <label for="Event Location">Event Location:</label>
            <input type="text" name="e_location" id="e_location" required>
        </p>
        <p>
            <label for="Event Image">Event Image:</label>
            <input type="file" name="e_image" id="e_image" required>
        </p>
        <input type="submit" value="Submit">
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
<script>
    // Variable to hold request
    var request;

    $(document).ready(function(){

        // Bind to the submit event of our form
        $("#submit-event").submit(function(event){

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            // Abort any pending request
            if (request) {
                request.abort();
            }
            // setup some local variables
            var $form = $(this);

            // Let's select and cache all the fields
            var $inputs = $form.find("input, button");

            // Serialize the data in the form
            var serializedData = $form.serialize();
            // console.log(flag_name);
            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            $inputs.prop("disabled", true);

            // Fire off the request to /index.php
            request = $.ajax({
                url: "insert.php",
                type: "post",
                data: serializedData
            });
    
            // console.log(flag_name);
            // Callback handler that will be called on success
            request.done(function (response, textStatus, jqXHR){
                // Log a message to the console
                // console.log("Hooray, it worked!");
                $.toast({
                    text:'Submitted successfully',
                    icon: 'info'
                })
            });

            // console.log(flag_name);
            // Callback handler that will be called on failure
            request.fail(function (jqXHR, textStatus, errorThrown){
                // Log the error to the console
                // console.error(
                //     "The following error occurred: "+
                //     textStatus, errorThrown
                // );
                $.toast({
                    text:'Error while submitting query',
                    icon: 'error'    
                })
            });

            // Callback handler that will be called regardless
            // if the request failed or succeeded
            request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
            });
        });
    });
</script>
</body>
</html>