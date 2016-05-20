<?php
	include_once 'dbconfig.php';
	if(isset($_POST['btn-upload'])){
		
		// Check if file is .pdf
		if ($_FILES['file']['type'] != "application/pdf") {
			?>
			<script>
				alert("Please ensure file is .pdf");
				window.location.href='../admin/index.php';
			</script>
			<?php
		}
		
		// Check file has name		
		if(!$_FILES['file']['tmp_name']){
			?>
			<script>
				alert("Please ensure file has a name");
				window.location.href='../admin/index.php';
			</script>
			<?php
		}

		// Check filesize
		if($_FILES['file']['size'] > 500000){
			?>
			<script>
				alert("File is over 500kb");
				window.location.href='../admin/index.php';
			</script>
			<?php
		}

		/* // Upload file
		if(!move_uploaded_file($_FILES['file']['tmp_name'], 'certs/' . $_FILES['file']['name'])){
			echo('Error uploading file - check destination is writeable.');
		} */

		$file =  $_FILES['file']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder="../certs";

		// new file size in KB
		$new_size = $file_size/1024;  
		// new file size in KB

		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case

		$final_file=str_replace(' ','-',$new_file_name);

		// Check if the file exists
		if(file_exists('../certs/' . $final_file)){
			?>
			<script>
				alert("File already exists");
				window.location.href='../admin/index.php';
			</script>
			<?php
		}
		
		if(move_uploaded_file($file_loc,"$folder/$final_file")){
			$sql="INSERT INTO certs (file,type,size) VALUES ('$final_file','$file_type','$new_size')";
			mysqli_query($conn, $sql);
			?>
			<script>
				alert('successfully uploaded');
				window.location.href='view.php';
			</script>
			<?php
			} else {
				if($_FILES['file']['error'] > 0){
				die('An error ocurred when uploading.');
			}
		}
	}
?>