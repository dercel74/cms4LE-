<?php
// post_view.php – Ansicht der einzelnen Beiträge
// Status: Bearbeitet, Stand: 16.02.2025 11:20 (MEZ)
// Zuletzt: 16.02.2025 11:20 || Heute: 16.02.2025 11:20
// Pfad: /views/post_view.php (UID: 6a7b0f9d)

include('header.php');

echo '<div class="post-view">';

// Beitrag anzeigen
echo '<h1>' . htmlspecialchars($post['title']) . '</h1>';
echo '<p>' . nl2br(htmlspecialchars($post['content'])) . '</p>';

// Kommentarsektion
echo '<div class="comments">';
echo '<h3>Kommentare</h3>';
foreach ($comments as $comment) {
    echo '<div class="comment">';
    echo '<p>' . htmlspecialchars($comment['author']) . ' schrieb:</p>';
    echo '<p>' . nl2br(htmlspecialchars($comment['content'])) . '</p>';
    echo '</div>';
}
echo '</div>';

echo '</div>';

include('footer.php');
