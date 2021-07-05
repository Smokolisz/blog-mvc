<div class="container py-5">

    <div class="d-flex flex-wrap mb-3">
        <h1>Kategorie</h1>
        <?php
        if($isLoggedIn) {
        ?>
        <div class="ms-5 d-flex align-items-center">
            <a href="/kategorie/stworz" class="btn btn-primary text-uppercase">Stwórz</a>
        </div>
        <?php
        }
        ?>
    </div>

    <?php

    if(count($data['categories']) > 0) {
        echo '<ul>';
        foreach($data['categories'] as $category) {
            echo '<li>'.$category['name']
            .($isLoggedIn ? ' - <a href="/kategorie/edytuj?id='.$category['id'].'">edytuj</a> - <a href="/kategorie/usun?id='.$category['id'].'">usuń</a>' : '').'</li>';
        }
        echo '</ul>';
    }
    ?>

</div>