<?php
/**
 * Bootstrap file - Sets up the include path for Vercel serverless environment.
 * Include this at the top of every entry-point PHP file.
 */

// Set the include path to the api directory so relative includes work
set_include_path(__DIR__);

// Change working directory to the api folder
chdir(__DIR__);
