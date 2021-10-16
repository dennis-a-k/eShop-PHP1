<div class="card mb-3 p-3">
    <form action="../../controllers/admin.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="inputGroupFile01" class="form-label">Выберите картинку</label>
            <input type="file" class="form-control" name="img" id="inputGroupFile01" accept="image/jpeg, image/png">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Введите название товара</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Введите цену</label>
            <input type=number step=any class="form-control" id="exampleFormControlInput2" name="price" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Введите описание товара</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary m-2" name="upload" type="submit">Добавить</button>
        </div>
    </form>
</div>
<?php if (!empty($goods)):?>
    <?php foreach ($goods as $good):?>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2 p-2 d-flex align-items-center">
                    <img src="/img/small/<?= $good['img']?>" class="img-fluid rounded mx-auto d-block" alt="<?= $good['img']?>">
                </div>
                <div class="col-md-10 p-3">
                    <form action="../../controllers/admin.php?id=<?= $good['id']?>&img=<?= $good['img']?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="inputGroupFile01" class="form-label">Картинка</label>
                            <input type="file" class="form-control" name="img" id="inputGroupFile01" accept="image/jpeg, image/png">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Название товара</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="<?= $good['title']?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Цена</label>
                            <input type=number step=any class="form-control" id="exampleFormControlInput2" name="price" value="<?= $good['price']?>" required>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание товара</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?= $good['description']?></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary m-2" name="edit" type="submit">Редактировать</button>
                            <button class="btn btn-danger m-2" name="delete" type="submit">Удалить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach;?>
<?php else:?>
    <div class="alert alert-primary text-center mt-3" role="alert">
        Нет данных о товарах!
    </div>
<?php endif;?>
