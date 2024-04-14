<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .error {
        color: red;
    }
    </style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>

    <?php

    $submit = !empty($_POST["submit"]) ? $_POST["submit"] : "";
    $firstname = !empty($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname = !empty($_POST["lastname"]) ? $_POST["lastname"] : "";

    if(!$submit || !$firstname || !$lastname || !isset($_POST["country"])){

        
        echo '<form method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" value="'.$firstname.'" placeholder="Your First Name...">';
                if(!$firstname) {
                    echo '<span class="error">First name can not be empty!</span><br>';
                }

        echo    '<label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" value="'.$lastname.'"placeholder="Your Last Name...">';
                if(!$lastname) {
                    echo '<span class="error">Last name can not be empty!</span><br>';
                }

        echo    '<label for="country">Country</label>
                <select id="country" name="country">
                <option selected="true" disabled="disabled">Select an option</option>
                <option value="West China">West China</option>
                <option value="Republic of Congo">Republic of Congo</option>
                <option value="Somalia">Somalia</option>
                <option value="Ghana">Ghana</option>
                <option value="Wakanda">Wakanda</option>
                </select>
                <input type="submit" name="submit" value="Submit">
            </form>';
        
    } else {
        echo "My Name is: " . $_POST["firstname"] . "<br>\n";
        echo "My Last name is: " . $_POST["lastname"] . "<br>\n";
        echo "My Country is: " . $_POST["country"] . "<br>\n";
    }
    ?>
  
</div>

</body>
</html>


