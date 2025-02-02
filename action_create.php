<?php
$partner_name = $_POST['part_name'];

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

    // Include database connection
    include("connection.php");

    // Retrieve the last partner ID and calculate the new ID
    $query = "SELECT partner_id FROM trusted_partners ORDER BY partner_id DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result && $row = $result->fetch_assoc()) {
        $partner_id = $row['partner_id'] + 1;
    } else {
        $partner_id = 1; // Start with ID 1 if there are no rows
    }

    // Use prepared statements for inserting data safely
    $sql = "INSERT INTO trusted_partners (partner_id, partner_name, category, partner_img, partner_description) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind parameters (s = string, b = binary)
    $stmt->bind_param("issss", $partner_id, $partner_name, $categoriesString, $imageBinary, $partner_description); // Temporary placeholders for binary

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
        // Redirect to the create.php page
        header("Location: create.php");
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Error uploading the image: " . $_FILES['image']['error'];
}
?>
