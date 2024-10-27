<?php
// Placeholder for any functions you might need in the future

/**
 * Function to sanitize form inputs
 * @param string $data
 * @return string
 */
function sanitizeInput($data)
{
    return htmlspecialchars(trim($data));
}
