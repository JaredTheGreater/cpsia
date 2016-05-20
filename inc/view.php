<?php
	$pageTitle = "ARP CPSIA Admin";
	include ("../inc/header.php");
	// all files in my/dir with the extension 
	$files = glob('../certs/*');	
?>
	<div class="container-fluid margin">
		<table class="table">
			<tr>
			<th colspan="4">Full GCC List</th>
			</tr>
			<tr>
				<td><a href="../admin/index.php">Upload another file</a></td>
			</tr>
			<tr>
				<td>File Name</td>
			</tr>
			<?php
			// iterate through the files and determine 
			// if the filename contains the search string.
			foreach($files as $file) {
				$name = pathinfo($file, PATHINFO_FILENAME);
				// determines if the search string is in the filename.
			?>
			<tr>
				<td><?php echo $name ?></td>
				<td><a href="../certs/<?php echo $name ?>.pdf" target="_blank">view file</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
<?php
	include ("../inc/footer.php");
?>