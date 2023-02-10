<?php
include './partials/header.php'; //si il n'existe pas il execute
//la page qd meme 
//require './partials/header.php'; // si il n'existe pas n'execute pas la page
//include_once './partials/header.php ; //
include './include/fonctions.php';

?>
<? dd($_SERVER)?>
<p>Vous avez <? calculAge(1986); ?> ans</p>
<header>
    <?php $titre = 'Cours PHP'; ?>
    <h1><?= $titre ?></h1>
    <?php include './partials/menu.php'; ?>
</header>

<main>
    <section>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Molestiae maxime officiis architecto, deserunt quas suscipit modi
            ad qui totam ratione reprehenderit voluptatem aliquam corrupti sunt
            adipisci alias nulla numquam accusantium.</p>
    </section>
</main>


<?php

include './partials/footer.php';
?>