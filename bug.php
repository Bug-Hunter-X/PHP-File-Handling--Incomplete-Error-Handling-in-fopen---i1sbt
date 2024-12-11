```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
    echo "Error opening file.";
}
```
This code is vulnerable to a common error: it doesn't check the return value of `fopen()` thoroughly.  `fopen()` returns `false` on failure, but also returns `false` if the file exists but cannot be opened in the specified mode.  This means that the error handling might not catch all cases.  The same applies to other file operations like `fwrite`, `fread`, etc.