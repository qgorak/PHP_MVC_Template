<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Template e-commerce</h1>
<p>Derniers articles :</p>


<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />

            <p><a href="/PHP_MVC_Template/?action=post&id=<?= $data['id'] ?> ">Page article</a></p>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
