<?php
include 'inc/header.php';

echo '<h1>Welcome to our<br />Treehouse Story Game</h1>';
echo '<p>Enter the requested words and create your story.</p>';
echo '<p><a class="btn btn-default btn-lg" href="play.php" role="button">Play</a></p>';

echo '<h2>Reread Your Saved Stories</h2>';
if (isset($_COOKIE)) {
    foreach($_COOKIE as $key => $value) {
        if ($key != 'PHPSESSID') {
            echo '<div class="form-group">';
            echo '<a class="btn btn-info" href="inc/cookie.php?read=' . urlencode($key) . '">';
            echo substr($key, 0, -10);
            echo ' ';
            echo date('d M Y H:i:s', (int) substr($key, -10));
            echo '</a>';
            echo '</div>';

            echo '<a class="btn btn-danger" href="inc/cookie.php?delete=' . urlencode($key) . '">X</a>';
        }
    }
}

include 'inc/footer.php';