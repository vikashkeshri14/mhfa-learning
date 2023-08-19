<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="slider.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Slider</a>
							<!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Slider</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="slider.php"><i class="icon-arrow-left"></i> Back</a>
									   <?php
									   $query = mysqli_query($conn,"select * from sliders where id = '$get_id'")or die(mysqli_error());
									   $row = mysqli_fetch_array($query);
									   ?>
									   
									   <form class="form-horizontal" method="POST" enctype="multipart/form-data">
									   <div class="control-group"> 
											<label class="control-label" for="inputEmail">Pic:</label>
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="file" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="inputEmail">Title</label>
										<div class="controls">
										<input type="text" name="title" id="inputEmail" placeholder="Title" value="<?php echo $row['title']; ?>">
										</div>
										</div>
										
												<div class="control-group">
										<label class="control-label" for="inputPassword">Description</label>
										<div class="controls">
												<textarea name="content" id="ckeditor_full"><?php echo $row['description']; ?></textarea>
										</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['update'])){
											$fileName='';
											if(!empty($_FILES["file"]["name"])){ 
												$targetDir="uploads/";
												$fileName = basename($_FILES["file"]["name"]); 
												$targetFilePath = $targetDir . $fileName; 
												$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
											 
												// Allow certain file formats 
												$allowTypes = array('jpg','png','jpeg','gif'); 
												if(in_array($fileType, $allowTypes)){ 
													// Upload file to server 
													if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
														// Insert image file name into database 
													  // $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
													   
													}else{ 
														$statusMsg = "Sorry, there was an error uploading your file."; 
													} 
												}
											}
										$title = $_POST['title'];
										$content = $_POST['content'];
										if($fileName){
											mysqli_query($conn,"update sliders set title = '$title' , description = '$content', image = '$fileName' where id = '$get_id'")or die(mysqli_error());
										} else{
											mysqli_query($conn,"update sliders set title = '$title' , sliders = '$content' where id = '$get_id'")or die(mysqli_error());
										}
										
										?>
										<script>
										window.location = 'slider.php';
										</script>
										<?php
										}
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>