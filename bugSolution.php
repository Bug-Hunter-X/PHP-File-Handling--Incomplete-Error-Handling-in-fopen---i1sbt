```php
$file = fopen("path/to/file.txt", "r");
if ($file === false) {
    // Handle the error appropriately
    $error = error_get_last();
    echo "Error opening file: " . $error['message'] . "\n";
} else {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
}
```
This improved version explicitly checks if the `fopen()` call returned `false`, offering detailed error information using `error_get_last()` for better diagnostics and handling.