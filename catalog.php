<?php
$pageTitle = "Full Catalog";
include("includes/header.php");

if(isset($_GET["cat"]))
{
    if($_GET["cat"] == "books")
    {
        $pageTitle = "Books";
    }elseif ($GET[cat] == "music")
    {
        $pageTitle = "music";
    }elseif ($GET[cat] == "Movies")
    {
        $pageTitle = "Movies";
    }
}

?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("includes/footer.php"); ?>
