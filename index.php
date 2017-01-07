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
					$random = array_rand($catalog, 4);
					foreach ($random as $id) {
						echo getItemHtml($id, $catalog[$id]);
					} ?>
				</ul>

			</div>

		</div>


	</div> <!-- end content -->
<?php include("includes/footer.php"); ?>
