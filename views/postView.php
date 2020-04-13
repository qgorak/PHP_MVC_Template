<?php $title = 'Mon blog'; ?>
<?php ob_start(); ?>





<ol class="breadcrumb">
  <li><a href="#">Accueil</a></li>
  <li><a href="#">Homme</a></li>
  <li class="active">T-shirt</li>
</ol>

           <div class="page-header">
            <h1>
                <?= htmlspecialchars($post['title']) ?>

            </h1>
            </div>

            <p>
                    <img src="./public/img/t-shirt.jpg" alt="..."><br>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
            <div>

              <!-- Nav tabs -->
              <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active" ><a  href="#info_produit" aria-controls="info_produit" role="tab" data-toggle="pill">Information Article</a></li>
                <li role="presentation"><a href="#fabrication" aria-controls="fabrication" role="tab" data-toggle="pill">Fabrication</a></li>
                <li role="presentation"><a href="#entretien" aria-controls="entretien" role="tab" data-toggle="pill">Entretien</a></li>
                <li role="presentation"><a href="#a_propos_produit" aria-controls="a_propos_produit" role="tab" data-toggle="pill">À Propos</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel"  class="tab-pane active" id="info_produit">
                  <h3>T-Shirt</h3>

                  <ul>
                    <li>Col simple</li>
                    <li>Patte à trois boutons</li>
                    <li>Manches courtes</li>
                    <li>Coupe classique</li>
                    <li>Taille normalement</li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="fabrication">Article fabriqué en coton biologique Un coton cultivé sans pesticides et avec moins d'eau</div>
                <div role="tabpanel" class="tab-pane fade" id="entretien">...</div>
                <div role="tabpanel" class="tab-pane fade" id="a_propos_produit">...</div>
              </div>

            </div>



            <div class="page-header">
              <h2>Commentaires</h2>
            </div>




        <?php
        while ($comment = $comments->fetch())
        {
        ?>        <div class="media">
                  <div class="media-body">
            <h4 class="media-heading"><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></h4>
            <?= nl2br(htmlspecialchars($comment['comment'])) ?>
          </div>
        </div>
        <?php
        }

        ?>
        <div class="page-header">
          <h2>Donnez votre avis</h2>
        </div>
        <form action="?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="author">Auteur</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
