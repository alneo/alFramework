<div class="container">

    <div class="row">

        <div class="col-md-6 offset-md-3">

            <h1>Contact form page</h1>

            <form method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Василий" value="Василий">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="3">Тестовый текст <?= date('H:i:s d.m.Y') ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>

    </div>

</div>

