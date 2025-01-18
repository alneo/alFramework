<div class="container">

    <div class="row">

        <div class="col-md-6 offset-md-3">

            <h1>Contact form page</h1>

            <form method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" name="name" class="form-control <?=get_validation_class('name', $errors ?? []) ?>" id="name" placeholder="Василий" value="<?= old('name') ?>">
                    <?= get_errors('name', $errors ?? []) ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?=get_validation_class('email', $errors ?? []) ?>" id="email" placeholder="name@example.com" value="<?= old('email') ?>">
                    <?= get_errors('email', $errors ?? []) ?>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control <?=get_validation_class('content', $errors ?? []) ?>" id="content" rows="3"><?= old('content') ?></textarea>
                    <?= get_errors('content', $errors ?? []) ?>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>

    </div>

</div>

