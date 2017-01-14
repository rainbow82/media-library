<?php

if($_SERVER["REQUEST_METHOD"]  == "POST")
{
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));

    if($name == "" || $email == "" || $details == "")
    {
        echo "Please fill in the required fields: Name, Email, Details";
        exit;
    }

    if(_POST["address"] != "")
    {
        echo "Bad form input";
        exit;
    }

    require("includes/phpmailer/class.phpmailer.php");

    echo "<pre>";
    $email_body = "";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Details: " . $details . "\n";
    echo $email_body;
    echo "</pre>";

    header("location:thanks.php?status=thanks");
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";
include ("includes/header.php");?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>Am I missing something? Let me know by completing the form.</p>
        <form method="post" action="suggest.php">
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" id="name" name="name" /></td>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <td><input type="email" id="email" name="email" /></td>
                </tr>
                <tr>
                    <th><label for="details">Suggest Item Details</label></th>
                    <td><textarea id="details" name="details"></textarea></td>
                </tr>
                <tr style="display:none">
                    <th><label for="address">address</label></label></th>
                    <td><input type="address" id="address" name="address" />
                        <p>Please leave this field blank</p>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Send" />
        </form>
    </div><!-- end wrapper -->

</div>


<?php include("includes/footer.php"); ?>
