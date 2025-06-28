<!DOCTYPE html>
<html>
    <?php
    include 'hitung_gaji.php';
    $successMessage = '';
    $errorMessage = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data
        $gajiAwalNew = $_POST['gajiAwalNew'];

        // You should have code here to update the gajiAwal value in your hitung_gaji.php file.
    
        // Assuming the update was successful, set the success message
        $successMessage = "Gaji Awal updated successfully. New value: $gajiAwalNew";
    }

    // Display success or error message if applicable
    if ($successMessage) {
        echo "<p style='color: green;'>$successMessage</p>";
    } elseif ($errorMessage) {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>
</body>
</html>
