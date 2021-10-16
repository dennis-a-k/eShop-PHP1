<?php if (!empty($users)):?>
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        <?php foreach ($users as $user):?>
            <div class="col">
                <div class="card h-100 p-3">
                    <p class="text-secondary mb-1"><strong>Имя пользователя:</strong></p>
                    <p class="mb-0"><?= $user['name']?></p>
                    <hr>
                    <p class="text-secondary mb-1"><strong>Почта:</strong></p>
                    <p class="mb-0"><?= $user['email']?></p>
                    <hr>
                    <p class="text-secondary mb-1"><strong>Роль:</strong></p>
                    <p class="mb-0">
                        <?php if  ($user['role'] == 1):?>
                            Администратор
                        <?php elseif ($user['role'] == 2):?>
                            Пользователь
                        <?php endif;?>
                    </p>
                    <hr>
                    <form action="../../controllers/users.php?id=<?= $user['id']?>&role=<?= $user['role']?>" method="POST">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" name="edit" type="submit">
                                <?php if  ($user['role'] == 1):?>
                                    Сделать пользователем
                                <?php elseif ($user['role'] == 2):?>
                                    Сделать администратором
                                <?php endif;?>
                            </button>
                            <button class="btn btn-danger" name="delete" type="submit">Удалить</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<?php else:?>
    <div class="alert alert-primary text-center mt-3" role="alert">
        Пользователи не найдены!
    </div>
<?php endif;?>
