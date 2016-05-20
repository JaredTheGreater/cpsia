<?php
	$pageTitle = "ARP CPSIA Admin";
	include ("../inc/header.php");
?>
		<div class="row text-center">
			<h1>Enter GCC Number</h1>
		</div>
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<p><a href="../inc/view.php">Click Here for Full GCC List</a></p>
				<form class="form-inline margin text-center" action="../inc/upload.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="upload">Upload GCC</label>
						<input id="upload" type="file" class="form-control" name="file" placeholder="GCC #">
					</div>
					<button type="submit" name="btn-upload" class="btn btn-default">Upload</button>
				</form>
				<br />
				<form class="form-inline margin text-center" action="../inc/search.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="search">Search GCC</label>
						<input id="search" type="text" class="form-control" name="file" placeholder="GCC #">
					</div>
					<button type="submit" name="btn-search" class="btn btn-default">Search</button>
				</form>
				<br />
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.</p>
				<p>The GCC number can be found on a tag or label attached to your Exxel Outdoors/ARP product.IF YOU HAVE ANY PROBLEM FINDING THE DESIRED GCC, PLEASE CALL 1-303-357-2769 AND SPEAK WITH AN ASSISTANT.</p>
			</div>
			<?php
			if(isset($_GET['success']))
			{
			?>
			<label>File Uploaded Successfully...  <a href="../inc/view.php">click here to view file.</a></label>
			<?php
			}
			else if(isset($_GET['fail']))
			{
			?>
			<label>Problem While File Uploading !</label>
			<?php
			}
			?>
		</div>
	</div>
<?php
	include ("../inc/footer.php");
?>