<div class="w-100 bg-dark text-light">
        <div class="container d-flex justify-content-between">
            <!-- left menu -->
            <div class="d-flex">
                <div class="h2 m-0 d-flex text-center align-items-center"><a href="/" class="text-light text-decoration-none">Blog</a></div>
                <nav class="ps-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/artykuly" class="text-light text-decoration-none p-3 d-block">Artykuły</a>
                        </li>
                        <li class="nav-item">
                            <a href="/kategorie" class="text-light text-decoration-none p-3 d-block">Kategorie</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- right menu -->
            <div>
                <ul class="nav">
                    <?php
                    if(isset($_SESSION['id'])) {
                    ?>
                        <li class="nav-item">
                            <span class="text-light p-3 d-block">Witaj <?= $_SESSION['username'] ?></span>
                        </li>
                        <li class="nav-item">
                            <a href="/wyloguj" class="text-light text-decoration-none p-3 d-block">Wyloguj się</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a href="/logowanie" class="text-light text-decoration-none p-3 d-block">Zaloguj się</a>
                        </li>
                        <li class="nav-item">
                            <a href="/rejestracja" class="text-light text-decoration-none p-3 d-block">Zarejestruj się</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>