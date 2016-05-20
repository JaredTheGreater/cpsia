<?php
	$pageTitle = "ARP CPSIA";
	include ("inc/header.php");
?>
		<div class="row text-center">
			<h1>Enter GCC Number</h1>
		</div>
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<form class="form-inline margin text-center" action="inc/search.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="file" placeholder="GCC #">
					</div>
					<button type="submit" name="btn-search" class="btn btn-default">Search</button>
				</form>
				<br/>
				<div id="result" class="col-md-12 text-center">
				</div>
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.</p>
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.IF YOU HAVE ANY PROBLEM FINDING THE DESIRED GCC, PLEASE CALL 1-303-357-2769 AND SPEAK WITH AN ASSISTANT.</p>
			</div>
			
		</div>
	</div>
<?php
	include ("inc/footer.php");
?>