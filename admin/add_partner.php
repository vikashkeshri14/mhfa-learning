<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Partner</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" enctype="multipart/form-data">
								
										<label>Pic:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="file" id="fileInput" type="file" required>
                                          </div>
                                        </div>
									
										
										  
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" required name="name" id="focusedInput" type="text" placeholder = "Name">
                                          </div>
                                        </div>
										
									
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					    <?php
                            if (isset($_POST['save'])) {
                           
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


                                $name = $_POST['name'];
                            
                                $image =  $fileName;
								
								
								$query = mysqli_query($conn,"select * from partners where name = '$name' ")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{

                                mysqli_query($conn,"insert into partners (name,image)
								values ('$name','$fileName')         
								") or die(mysqli_error()); ?>
								<script>
							 	window.location = "partner.php"; 
								</script>
								<?php   }} ?>
						 
						 