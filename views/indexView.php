<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Template e-commerce</h1>
<p>Derniers articles :</p>

<div class="row">

<?php
while ($data = $posts->fetch())
{
?>
<!----->

  <div class="col-sm-6 col-md-4">
    <a href="/PHP_MVC_Template/?action=post&id=<?= $data['id'] ?> ">
    <div class="thumbnail">


      <img src="./public/img/t-shirt.jpg" alt="...">
      <div class="caption">
            <!---->
        <h3>
            <?= htmlspecialchars($data['title']) ?>

        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />

            <p></a></p>
        </p>
      </div>
      </div>
    </div>

<?php
}
$posts->closeCursor();
?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
