<?php require_once "blocks/header.php" ?>
<?php require_once "blocks/searchSection.php" ?>

<!-- Imtiyoz Section Start -->
<section class="imtiyoz">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="/">Asosiy</a></li>
                <li>Barcha imtiyoz yo'nalishlari</li>
            </ul>
        </div>
        <div class="imtiyoz_section">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-jismoniy" role="tabpanel" aria-labelledby="pills-jismoniy-tab">
                    <div class="row">
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $category) : ?>
                                <?php $image = getImage('category',$category) ?>
                                <div class="col-md-2">
                                    <a href="?view=imtiyoz_view&id=<?=$category['id']?>" class="item">
                                        <div class="item_img">
                                            <img src="<?= $image ?>" alt="">
                                        </div>
                                        <div class="item_name">
                                            <?= $category['name'] ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Imtiyoz Section End -->

<?php require_once "blocks/footer.php" ?>

