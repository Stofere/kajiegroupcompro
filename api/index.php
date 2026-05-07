<?php

/**
 * Vercel Serverless Entry Point
 * This file allows Laravel to run on Vercel.
 */

// Ensure Vercel /tmp directory for views exists
$compiledViewPath = '/tmp/storage/framework/views';
if (!is_dir($compiledViewPath)) {
    mkdir($compiledViewPath, 0755, true);
}

// Load the Laravel public index
require __DIR__ . '/../public/index.php';
