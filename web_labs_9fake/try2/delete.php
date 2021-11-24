<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check that the image ID exists
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM images WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $image = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$image) {
        exit('Image doesn\'t exist with that ID!');
    }
    // Make sure the user confirms before deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            unlink($image['filepath']);
            $stmt = $pdo->prepare('DELETE FROM images WHERE id = ?');
            $stmt->execute([ $_GET['id'] ]);
            $msg = 'You have deleted the image!';
        } else {
            header('Location: index.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Delete')?>

<div class="content delete">
    <h2>Delete Image #<?=$image['id']?></h2>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php else: ?>
        <p>Are you sure you want to delete <?=$image['title']?>?</p>
        <div class="yesno">
            <a href="delete.php?id=<?=$image['id']?>&confirm=yes">Yes</a>
            <a href="delete.php?id=<?=$image['id']?>&confirm=no">No</a>
        </div>
    <?php endif; ?>
</div>

<?=template_footer()?>
