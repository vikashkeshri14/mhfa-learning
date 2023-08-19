<?php 
$sql = mysqli_query($conn,"select * from team where id='$_GET[id]'") or die(mysqli_error());
$row = mysqli_fetch_array($sql);
?>
<div class="row-fluid">
       <a href="our_team.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Team</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Team</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" enctype="multipart/form-data">
							
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" name="file" type="file" >
                                          </div>
                                        </div>
									
									
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" required value="<?php echo $row['name']; ?>" name="name" id="focusedInput" type="text" placeholder = "Name">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <textarea class="input focused" required name="description" placeholder = "Description"><?php echo $row['description']; ?></textarea>
                                            
                                          </div>
                                        </div>
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
				   <?php
                            if (isset($_POST['update'])) {
                       
                                $name = $_POST['name'];
                                $description = $_POST['description'];
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

								
								
								
								if($fileName){
                                    mysqli_query($conn,"update team set name = '$name' , description = '$description' , image = '$fileName' where id = '$get_id' ")or die(mysqli_error());	
                                } else{
                                    mysqli_query($conn,"update team set name = '$name' , description = '$description'  where id = '$get_id' ")or die(mysqli_error());	
                                }
								
								
								?>
								<script>
							 	window.location = "our_team.php"; 
								</script>
								<?php   } ?>
						 
						 