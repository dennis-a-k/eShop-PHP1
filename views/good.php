<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-5 p-4 d-flex align-items-center">
            <img src="/img/big/<?= $good['img']?>" class="img-fluid rounded mx-auto d-block" alt="<?= $good['img']?>">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h1 class="card-title text-end"><?= $good['title']?></h1>
                <h3 class="card-title text-end text-primary mb-5"><?= $good['price']?>  ₽</h3>
                <p class="card-text"><?= $good['description']?></p>
                <div class="d-flex justify-content-center">
                    <a href="../../controllers/cart.php?id=<?= $good['id']?>"  type="button" class="btn btn-primary my-2">Купить</a>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="card p-4">
    <h2 class="text-secondary">Отзывы:</h2>
    <form action="../../controllers/reviews.php?id=<?= $id?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Ваш отзыв</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review" required></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" name="upload" type="submit">Оставить отзыв</button>
        </div>
    </form>
    <?php if (!empty($reviews)):?>
        <?php foreach ($reviews as $review):?>
            <dl class="row p-3">
                <dt class="col-lg-2"><?= $review['name']?></dt>
                <dd class="col-lg-10">
                    <p><?= $review['review']?></p>
                    <p class="text-secondary text-end"><em><?= $review['date']?></em></p>
                </dd>
            </dl>
        <?php endforeach;?>
    <?php else:?>
        <div class="alert alert-secondary text-center mt-3" role="alert">
            Нет отзывов о товаре!
        </div>
    <?php endif;?>
</div>
