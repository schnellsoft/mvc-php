<?php

/**
 * Get the base path
 * @param string path
 * @return string 
 */
function basePath($path = '') {
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}

/**
 * Load a view
 * @param string $name
 * @return void
 */
function loadView($name) {
    $nf = basePath("views/{$name}.view.php");
    if (file_exists($nf)) {
        require_once $nf; 
    } else {
        echo "View {$name} not found"; 
    } 
}

/**
 * Load a partial
 * @param string $name
 * @return void
 */
function loadPartial($name) {
    $nf = basePath("views/partials/{$name}.php");
    // inspect($nf);
    if (file_exists($nf)) {
        require_once $nf; 
    } else {
        echo "Partial {$name} not found"; 
    } 
}

/**
 * Inspect a value
 * @param mixed $value
 * @return void
 */
 function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
 }

/**
 * Inspect a value and die
 * @param mixed $value
 * @return void
 */
 function inspectAndDie($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
 }