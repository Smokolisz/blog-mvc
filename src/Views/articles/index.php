<div class="container py-5">

    <div class="d-flex flex-wrap mb-3">
        <h1>Artykuły</h1>
        <?php
        if($isLoggedIn) {
        ?>
        <div class="ms-5 d-flex align-items-center">
            <a href="/artykuly/stworz" class="btn btn-primary text-uppercase">Stwórz</a>
        </div>
        <?php
        }
        ?>
    </div>

    <?php

    if(count($data['articles']) > 0) {
        echo '<ul>';
        foreach($data['articles'] as $article) {
            echo '<li><a href="/artykuly/pokaz?id='.$article['id'].'">'.$article['title'].'</a>'.
            ($isLoggedIn ? '- <a href="/artykuly/edytuj?id='.$article['id'].'">edytuj</a>- <a href="/artykuly/usun?id='.$article['id'].'">Usuń</a>' : '').'</li>';
        }
        echo '</ul>';
    }
    ?>

</div>