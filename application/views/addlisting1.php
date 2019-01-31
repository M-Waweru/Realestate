<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>RealEstate</title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url() ?>img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">

	<!-- Responsive CSS -->
	<link href="<?php echo base_url() ?>css/responsive/responsive.css" rel="stylesheet">

</head>

<body style="padding-top: 150px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-lg-offset-4">
				<form name="addlisting1" action="<?php echo base_url('listing/addlisting') ?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
					<div class="form-title">
						<h3>Add a Listing</h3>
					</div>
					<div class="form-row">
						<p>Fill in the details below</p>
					</div>
					<div class="form-group">
						<label for="listingname">Listing/Property Name</label>
						<input class="form-control" type="text" id="listingname" name="listingname" required>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category" id="category" class="form-control" required>
							<option selected>Select the category of the property</option>
							<option value="1">Flat and apartments</option>
							<option value="2">Houses</option>
							<option value="3">Commercial</option>
							<option value="4">Land</option>
						</select>
					</div>
					<div class="form-group">
						<label for="type">Type</label>
						<select name="type" id="type" class="form-control" required>
							<option selected>Select the type of property</option>
							<option value="1">Sale</option>
							<option value="2">Rent</option>
						</select>
					</div>
					<div class="form-group">
						<label for="listingdesc">Description</label>
						<textarea name="listingdesc" class="form-control" rows="4" id="listingdesc" required></textarea>
					</div>
					<div class="form-group">
						<label for="area">Location</label>
						<select name="area" id="area" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)" required>
							<option selected>Select the location</option>
							<?php 
							foreach ($areadata as $key => $value) {
								echo "<option value='".$areadata[$key]['Area_no']."'>".$areadata[$key]['Area_name'].", ".$areadata[$key]['County_name']."</option>";
							}
							?>
							<option value="other">Other...</option>
						</select>					
					</div>
					<div id="otherdiv"></div>
					<div class="form-group">
						<label for="price">Price</label>
						<input class="form-control" type="text" name="price" required>
					</div>
					<div class="form-row">
						<div class="col">
							<label for="bedrooms">No of bedrooms</label>
							<input class="form-control" type="text" name="bedrooms" required>
						</div>
						<div class="col">
							<label for="bathrooms">No of bathrooms</label>
							<input class="form-control" type="text" name="bathrooms" required>
						</div>
					</div>
					<br>
					<div class="form-group">
						<b>Media</b><br>
						<?php echo form_open_multipart('upload/do_upload');?>
						<input name="upload_file" type="file" id="fileName" accept=".jpg,.jpeg,.png" onchange="validateFileType()"/>
					</div>
					<div class="form-row">
						<div id="image_preview"></div>
					</div>
					<br>
					<button type="button" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-primary">Done</button>
				</form>
			</div>
		</div>
	</div>
	<br>
</body>
<script type="text/javascript">
	function validateFileType(){
		$('#image_row').remove();
		var fileName = document.getElementById("fileName").value;
		var idxDot = fileName.lastIndexOf(".") + 1;
		var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
		if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
			preview_image();
		}else{
			alert("Only jpg/jpeg and png files are allowed!");
			document.getElementById("fileName").value = null;
		}   
	}

	function validateForm(){

		return true;
	}

	function preview_image() 
	{
		var total_file=document.getElementById("fileName").files.length;
		for(var i=0;i<total_file;i++)
		{
			$('#image_preview').append("<img id='image_row' src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
		}
	}

	function showfield(name){
		if(name=='other')document.getElementById('otherdiv').innerHTML='Other: <input type="text" name="otherarea" />';
		else document.getElementById('otherdiv').innerHTML='';
	}
</script>
</html>