# PHP File Handling Bug: Incomplete Error Handling

This repository demonstrates a common error in PHP file handling: insufficient error checking after file operations such as `fopen()`, `fwrite()`, etc.  The bug and its solution are presented in separate PHP files.

## Bug (`bug.php`)
The `bug.php` file contains code that attempts to open a file.  However, the error handling is incomplete, failing to catch all potential errors.