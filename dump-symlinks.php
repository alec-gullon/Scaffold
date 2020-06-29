<?php

define('PROJECT_PATH', __DIR__);
define('REPOS_PATH', PROJECT_PATH . '\\repos\\');

function setupSymlinks() {
    $symlinks = require 'config\symlinks.php';

    foreach ($symlinks as $location => $destination) {
        if (file_exists($location)) {
            if (is_file($location)) {
                unlink($location);
            }
            if (is_dir($location)) {
                rmdir($location);
            }
        }

        if (!file_exists($destination)) {
            echo '-- Skipping symlink to ' . $destination . "\n";
        } else {
            echo '-- ' . $location . ' <-> ' . $destination . "\n";
            if (!symlink($destination, $location)) {
                echo 'Error with ' . $destination . '<->' . $location . "\n";
                die();
            };
        }
    }

}

echo "Generating symlinks...\n";
setupSymlinks();