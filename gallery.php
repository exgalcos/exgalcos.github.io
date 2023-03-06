---
title: Gallery
permalink: /gallery/
---

<?php
// check if the user has entered the correct password
if (!isset($_POST['password']) || $_POST['password'] !== 'stat306') {
    // display the password form
    echo '<form method="post">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Submit">
          </form>';
} else {
    // display the gallery
    echo '<h1>Gallery</h1>';
    $files = glob('gallery/*');
    foreach ($files as $file) {
        echo '<a href="' . $file . '" target="_blank"><img src="' . $file . '" width="200"></a>';
    }
}
?>