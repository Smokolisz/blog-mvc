<div class="container py-5">

    <h1>Edytuj #<?= $data['article']['id'] ?></h1>

    <form method="POST" action="/artykuly/update?id=<?= $data['article']['id'] ?>">
        <div class="mb-3 row">
            <label for="user" class="col-sm-2 col-form-label">Autor</label>
            <div class="col-sm-10">
                <select name="user" class="form-control">
                    <?php
                    foreach($data['users'] as $user) {
                        $selected = '';
                        if($user['id'] == $data['article']['user_id']) {
                            $selected = 'selected';
                        }

                        echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['username'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="category" class="col-sm-2 col-form-label">Kategoria</label>
            <div class="col-sm-10">
                <select name="category" class="form-control">
                    <?php
                    foreach($data['categories'] as $category) {
                        $selected = '';
                        if($category['id'] == $data['article']['category_id']) {
                            $selected = 'selected';
                        }
                        echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['name'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Tytuł</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?= $data['article']['title'] ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="text" class="col-sm-2 col-form-label">Treść</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="text" name="text"><?= $data['article']['text'] ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="user" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control">
                    <?php
                    foreach([1,2,3,4] as $status) {
                        $selected = '';
                        if($category['id'] == $data['article']['category_id']) {
                            $selected = 'selected';
                        }
                        echo '<option value="'.$status.'" '.$selected.'>'.$status.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="pt-4 text-end">
            <button type="submit" class="btn btn-primary px-4">Zapisz</button>
        </div>
    </form>


</div>