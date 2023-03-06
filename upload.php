<?php
// check if the password is correct
if ($_POST['password'] !== 'stat306') {
    die('Incorrect password');
}

// check if a file was uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    // get the file name and extension
    $name = $_FILES['image']['name'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    
    // create a unique filename to avoid overwriting existing files
    $filename = uniqid() . '.' . $ext;
    
    // move the uploaded file to the gallery folder
    move_uploaded_file($_FILES['image']['tmp_name'], 'gallery/' . $filename);
    
    // redirect to the gallery page
    header('Location: gallery.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h1>Upload Image</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>