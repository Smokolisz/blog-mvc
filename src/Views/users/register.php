<div class="container py-5">
    <form method="POST" action="/rejestracja" class="mx-auto px-4 pt-5 pb-5 border rounded" style="width: 400px;">
        <div class="mb-3 row">
            <label for="login" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" name="login" placeholder="Jan">
            </div>
            <?php
            if(isset($_SESSION['usernameRegErr']) && $_SESSION['usernameRegErr'] != '') {
                echo '<p class="text-danger pt-2">'.$_SESSION['usernameRegErr'].'</p>';
                $_SESSION['usernameRegErr'] = '';
            }
            ?>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="jan.kowalski@gmail.com">
            </div>
            <?php
            if(isset($_SESSION['emailRegErr']) && $_SESSION['emailRegErr'] != '') {
                echo '<p class="text-danger pt-2">'.$_SESSION['emailRegErr'].'</p>';
                $_SESSION['emailRegErr'] = '';
            }
            ?>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Hasło</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="********">
            </div>
            <?php
            if(isset($_SESSION['passRegErr']) && $_SESSION['passRegErr'] != '') {
                echo '<p class="text-danger pt-2">'.$_SESSION['passRegErr'].'</p>';
                $_SESSION['passRegErr'] = '';
            }
            ?>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mx-auto d-block">Zarejestruj się</button>
        </div>
    </form>
</div>