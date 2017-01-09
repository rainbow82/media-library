<?php
$pageTitle = "Suggest a Media Item";
$section = "suggest";
include ("includes/header.php");?>





<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <p>Am I missing something? Let me know by completing the form.</p>
        <form method="post">
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
            </table>
            <input type="submit" value="Send" />
        </form>
    </div><!-- end wrapper -->

</div>


<?php include("includes/footer.php"); ?>
