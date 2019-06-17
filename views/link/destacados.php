<h1>Enlaces Destacados</h1>


<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
<?php  while($link = $links->fetch_object()): ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body enlace-container">
        	<img src="<?= $link->favicon ?>" width="22" alt="">
            <h3 class="uk-card-title"><?= $link->titulo ?></h3>
            <a target="_blank" href="<?=$link->link?>">Ir al Enlace</a>
        </div>
    </div>
  
<?php endwhile; ?>
</div>
