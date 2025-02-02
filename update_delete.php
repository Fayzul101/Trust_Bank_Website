<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        
        .box-container{
            border: 3px solid green;
            margin: auto;
            width: 55rem;
            height: 30rem;
            overflow-y: auto;
            border-radius: 5px;
            scrollbar-color: green #d1e7dd;
        }

        #scroll-box{
            border: 1px solid blue;
            margin: 10px 10px;
            height: 7rem;
            border-radius: 8px;
        }
        .image img{
            border: 3px solid black;
            height: 5rem;
            width: 5rem;
            border-radius: 50%;
        }
        .info{
            /* border: 1px solid green; */
            height: 5rem;
            width: 30rem;
        }
        .id{
            /* border: 1px solid brown; */
            height: 2.5rem;
            display: flex;
            font-size: 18px;
            align-items:last baseline;
        }
        .id span{
            font-weight: 600;
            margin-left: 3px;
        }
        .name{
            /* border: 1px solid purple; */
            height: 2.5rem;
            font-size: 20px;
            align-items: center;
            display: flex;
            align-items:first baseline;
        }
        .buttons{
            /* border: 1px solid purple; */
            height: 5rem;
            width: 17rem;
            margin-right: 10px;
        }
        /* inside modal */
        .preview-container {
            margin-top: 20px;
        }

        .preview-image {
            max-width: 200px;
            max-height: 200px;
            border: 2px solid #ccc;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <section class="p-5">
        <div class="container">
        <h2 class="text-center">Partner Modification page</h2>
        <div class="box-container mt-4">
            <?php
        include("connection.php");
        $query = "select * from trusted_partners";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){

            $selectedCategories = explode(" ", $row['category']);

            echo "
            <div class='box d-flex align-items-center' id='scroll-box'>
                <div class='image ms-3'>
                    <img src='data:image/jpeg;base64," . base64_encode($row['partner_img']) . "' class='img-fluid'>
                </div>
                <div class='info ms-3'>
                    <div class='id'>ID:<span>$row[partner_id]</span></div>
                    <div class='name'>$row[partner_name]</div>
                </div>
                <div class='buttons ms-2 d-flex align-items-center justify-content-around'>
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#readModal_$row[partner_id]'>READ</button>
                    <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#updateModal_$row[partner_id]'>UPDATE</button>
                    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal_$row[partner_id]'>DELETE</button>
                </div>
            </div>
        
            <div class='modal fade' id='readModal_$row[partner_id]'>
                <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5'>$row[partner_name]</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body py-3'>
                            <div class='box' style='display: flex;'>
                                <div class='image2 my-auto me-4'>
                                    <img src='data:image/jpeg;base64," . base64_encode($row['partner_img']) . "' class='img-fluid' alt='...'>
                                </div>
                                <div class='writting'>
                                    <div class='card-body' style='width: 510px;'>
                                        $row[partner_description]
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class='modal fade' id='updateModal_$row[partner_id]'>
                <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h1 class='modal-title fs-5'>Update</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body py-3'>
                            <div class='box' style='display: flex;'>
                                <div class='image2 my-auto me-4'>
                                    <img src='data:image/jpeg;base64," . base64_encode($row['partner_img']) . "' class='img-fluid' alt='...'>
                                </div>
                                <div class='writting'>
                                    <div class='card-body' style='width: 510px; max-height:250px; overflow-y:auto'>
                                        <form action='action_update_delete.php' method='post'>
                                            <input name='partner_update' type='text' value='$row[partner_id]' hidden>
                                            <label for='part_name'>Partner Name: </label>
                                            <input type='text' name='part_name' id='part_name' value='$row[partner_name]'><br><br>
        
                                            <input type='checkbox' name='category[]' value='Brand_Shop' " . (in_array('Brand_Shop', $selectedCategories) ? 'checked' : '') . ">Brand Shop<br>
                                            <input type='checkbox' name='category[]' value='Hospital_&_Medical_Services' " . (in_array('Hospital_&_Medical_Services', $selectedCategories) ? 'checked' : '') . ">Hospital & Medical Services<br>
                                            <input type='checkbox' name='category[]' value='Hotel,_Resorts_&_Restaurants' ". (in_array('Hotel,_Resorts_&_Restaurants', $selectedCategories) ? 'checked' : '') . ">Hotel, Resorts & Restaurants<br>
                                            <input type='checkbox' name='category[]' value='BOGO_Facility' " . (in_array('BOGO_Facility', $selectedCategories) ? 'checked' : '') . ">BOGO Facility<br>
                                            <input type='checkbox' name='category[]' value='Online_Shop' " . (in_array('Online_Shop', $selectedCategories) ? 'checked' : '') . ">Online Shop<br>
                                            <input type='checkbox' name='category[]' value='Travel' " . (in_array('Travel', $selectedCategories) ? 'checked' : '') . ">Travel<br>
                                            <input type='checkbox' name='category[]' value='Gadget_&_Accessories' " . (in_array('Gadget_&_Accessories', $selectedCategories) ? 'checked' : '') . ">Gadget & Accessories<br>
                                            <input type='checkbox' name='category[]' value='Mobile_Shop' " . (in_array('Mobile_Shop', $selectedCategories) ? 'checked' : '') . ">Mobile Shop<br>
                                            <input type='checkbox' name='category[]' value='Furniture' " . (in_array('Furniture', $selectedCategories) ? 'checked' : '') . ">Furniture<br>
                                            <input type='checkbox' name='category[]' value='Automobile' " . (in_array('Automobile', $selectedCategories) ? 'checked' : '') . ">Automobile<br>
                                            <input type='checkbox' name='category[]' value='Software_Development_Platform' " . (in_array('Software_Development_Platform', $selectedCategories) ? 'checked' : '') . ">Software Development Platform<br>
                                            <input type='checkbox' name='category[]' value='Electronics_&_Home_Appliances' " . (in_array('Electronics_&_Home_Appliances', $selectedCategories) ? 'checked' : '') . ">Electronics & Home Appliances<br>
                                            <input type='checkbox' name='category[]' value='Others' " . (in_array('Others', $selectedCategories) ? 'checked' : '') . ">Others<br><br>
        
                                            <input type='file' name='image' id='fileInput' ><br>
                                            <div class='preview-container'>
                                                <img id='previewImage' class='preview-image' src='' alt='Image Preview' style='display: none;'>
                                            </div><br>
        
                                            <label for='description'>Description</label><br>
                                            <textarea name='description' id='description' cols='40' rows='8'>$row[partner_description]</textarea><br><br>
                                            <button name='buttonName' type='submit' class='btn btn-success' value='update'>Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class='modal fade' id='deleteModal_$row[partner_id]'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>Delete</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <p>Do you want to delete this content?</p>
                        </div>
                        <div class='modal-footer'>
                        <form action='action_update_delete.php' method='post'>
                            <input name='partner_delete' type='text' value='$row[partner_id]' hidden>
                            <button name='buttonName' type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                            <button name='buttonName' type='submit' class='btn btn-success' value='delete'>Delete</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        ?>
        </div>
        </div>
        <script>
            const fileInput = document.getElementById('fileInput');
        const previewImage = document.getElementById('previewImage');

        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0]; // Get the selected file

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Set the src of the image to the file's data URL
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block'; // Show the image
                };

                reader.readAsDataURL(file); // Read the file as a data URL
            } else {
                previewImage.src = '';
                previewImage.style.display = 'none'; // Hide the image if no file is selected
            }
        });
        </script>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>