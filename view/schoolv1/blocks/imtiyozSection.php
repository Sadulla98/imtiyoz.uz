<!-- Imtiyoz Section Start -->
<section class="imtiyoz">
    <div class="container">
        <div class="imtiyoz_section">
            <ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link w-100" id="pills-jismoniy-tab" data-bs-toggle="pill" data-bs-target="#pills-jismoniy" type="button" role="tab" aria-controls="pills-jismoniy" aria-selected="true">Jismoniy Shaxslarga</button>
                </li>
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link w-100" id="pills-yuridik-tab" data-bs-toggle="pill" data-bs-target="#pills-yuridik" type="button" role="tab" aria-controls="pills-yuridik" aria-selected="false">Yuridik shaxslarga</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-jismoniy" role="tabpanel" aria-labelledby="pills-jismoniy-tab">
                    <div class="row">
                        <div class="col-md-12 justify-contet-center mb-2">
                            <div class="tab_title">
                                Jismoniy Shaxslarga
                            </div>
                        </div>
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
                <div class="tab-pane fade " id="pills-yuridik" role="tabpanel" aria-labelledby="pills-yuridik-tab">
                    <div class="row">
                        <div class="col-md-12 justify-contet-center mb-2">
                            <div class="tab_title">
                                Yuridik Shaxslarga
                            </div>
                        </div>

                        <?php if (!empty($ycategories)) : ?>
                            <?php foreach ($ycategories as $ycategory) : ?>
                                <?php $image = getImage('category',$ycategory) ?>
                                <div class="col-md-2">
                                    <a href="?view=imtiyoz_view&id=<?=$ycategory['id']?>" class="item">
                                        <div class="item_img">
                                            <img src="<?=$image?>" alt="">
                                        </div>
                                        <div class="item_name">
                                            <?= $ycategory['name'] ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="all_btn">
                <a href="?view=all_imtiyoz">Barcha Imtiyozlar</a>
            </div>
        </div>
    </div>

</section>
<!-- Imtiyoz Section End -->