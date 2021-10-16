<?php if (!empty($goods)):?>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($goods as $good):?>
            <div class="col">
                <div class="card h-100 text-center p-2">
                    <a href="/layouts/good/?id=<?= $good['id']?>" class="text-dark text-decoration-none">
                        <img src="/img/small/<?= $good['img']?>" class="img-fluid my-4" alt="<?= $good['img']?>">
                        <h5 class="card-title"><?= $good['title']?></h5>
                        <p class="card-text"><?= $good['price']?> ₽</p>
                    </a>
                    <a href="/controllers/cart.php?id=<?= $good['id']?>" class="btn btn-primary my-2 mx-5">Купить</a>
                </div>
            </div>
        <?php endforeach;?>
    </div>    
<?php else:?>
    <div class="alert alert-danger text-center" role="alert">
        Нет данных о товарах!
    </div>
<?php endif;?>
