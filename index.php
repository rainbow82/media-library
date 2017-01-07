<?php
include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Home";
$section = null;

include ("includes/header.php"); ?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
					<?php
					foreach ($catalog as $id => $item) {
						echo getItemHtml($id, $item);
					} ?>
				</ul>

			</div>

		</div>


	</div> <!-- end content -->
<?php include("includes/footer.php"); ?>
