<?php
if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $msg) {
        echo '<div class="alert alert-dismissible alert-' . $msg['type'] . '">
            <button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo htmlspecialchars($msg['text']);
        echo '</div>';
    }
    unset($_SESSION['messages']);
}
?>

