<?php

include('connection.php');
$button_value = $_POST['buttonName'];
echo $button_value;

if($button_value == 'delete'){
    $part_id = $_POST['partner_delete'];
    $query = "DELETE FROM trusted_partners WHERE partner_id=$part_id;";
    if($conn->query($query)){
        echo "Row Deleted Successfully";
        header("Location: update_delete.php");
    }else{
        echo "Error Occured";
    }
    $conn->close();

} else if($button_value == 'update'){
    $partner_name = $_POST['part_name'];
    $partner_id = $_POST['partner_update'];

// Retrieve categories from the form
$categories = isset($_POST['category']) ? $_POST['category'] : [];
// Combine the selected categories into a single space-separated string
$categoriesString = is_array($categories) ? implode(" ", $categories) : "";

// Check if the image file was uploaded without errors
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    // Retrieve the temporary file path
    $imageTmpPath = $_FILES['image']['tmp_name'];

    // Convert the image file to binary data
    $imageBinary = file_get_contents($imageTmpPath);

    $partner_description = $_POST['description'];


    // echo "$part_id, $part_name, $categoriesString, $partner_description";

    // Use prepared statements for inserting data safely
    $updateQuery = "UPDATE trusted_partners SET partner_name = ?, category = ?, partner_img = ?, partner_description = ? WHERE partner_id = ?";
    $stmt = $conn->prepare($updateQuery);

    if (!$stmt) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind parameters (s = string, b = binary)
    $stmt->bind_param("ssssi", $partner_name, $categoriesString, $imageBinary, $partner_description, $partner_id); // Temporary placeholders for binary

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
        // Redirect to the create.php page
        header("Location: update_delete.php");
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

}

else{
    $partner_description = $_POST['description'];


    echo "$part_id, $part_name, $categoriesString, $partner_description";

    // Use prepared statements for inserting data safely
    $updateQuery = "UPDATE trusted_partners SET partner_name = ?, category = ?, partner_description = ? WHERE partner_id = ?";
    $stmt = $conn->prepare($updateQuery);

    if (!$stmt) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind parameters (s = string, b = binary)
    $stmt->bind_param("sssi", $partner_name, $categoriesString, $partner_description, $partner_id); // Temporary placeholders for binary

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
        // Redirect to the create.php page
        header("Location: update_delete.php");
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

}

?>