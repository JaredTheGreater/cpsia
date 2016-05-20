<?php
	$pageTitle = "ARP CPSIA";
	include ("header.php");
	
	// string to search in a filename.
	$searchString = $_POST['file'];

	// all files in my/dir with the extension 
	$files = glob('../certs/*');

	// containing the search string.
	$filesFound = array();

	// iterate through the files and determine 
	// if the filename contains the search string.
	foreach($files as $file) {
		$name = pathinfo($file, PATHINFO_FILENAME);
		// determines if the search string is in the filename.
		if(strpos(strtolower($name), strtolower($searchString)) === false) {
		} else {
			$filesFound[] = $name;
		}
	}
	
	$first_value = reset($filesFound);
?>
		<div class="row text-center">
			<h1>Enter GCC Number</h1>
		</div>
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<form class="form-inline margin text-center" action="search.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="file" placeholder="GCC #">
					</div>
					<button type="submit" name="btn-search" class="btn btn-default">Search</button>
				</form>
				<br/>
				<div id="result" class="col-md-12 text-center">
					<p><embed src="../certs/<?php echo $first_value ?>.pdf" width="800" height="1200"></embed></p>
				</div>
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.</p>
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.IF YOU HAVE ANY PROBLEM FINDING THE DESIRED GCC, PLEASE CALL 1-303-357-2769 AND SPEAK WITH AN ASSISTANT.</p>
			</div>
			
		</div>
	</div>
<?php
	include ("footer.php");
?>