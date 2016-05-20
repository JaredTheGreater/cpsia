<?php
	include_once 'dbconfig.php';
	if(isset($_POST['btn-upload'])){
		
		$file =  $_FILES['ufile']['name'];
		$file_loc = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$folder="/home/exxelcom/public_html/cpsia.exxel.com/certs";

		// new file size in KB
		$new_size = $file_size/1024;  
		// new file size in KB

		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case

		$final_file=str_replace(' ','-',$new_file_name);

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

			if(!$_FILES['file']['tmp_name']){
				die('Please ensure you are uploading a file with a name.');
			}

			// Check filesize
			if($_FILES['file']['size'] > 500000){
				die('File uploaded exceeds maximum upload size.');
			}

			// Check if the file exists
			if(file_exists('certs/' . $_FILES['file']['name'])){
				die('File with that name already exists.');
			}

			// Upload file
			if(!move_uploaded_file($_FILES['file']['tmp_name'], 'certs/' . $_FILES['file']['name'])){
				die('Error uploading file - check destination is writeable.');
			}
		}
	}
?>