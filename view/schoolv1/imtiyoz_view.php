<?php require_once "blocks/header.php" ?>

<!-- Search Section Start -->
<section class="search">
    <div class="container">
        <div class="search_section">
            <form action="" name="form1" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" min="0" max="100" name="age" required>
                                <label for="floatingInput">Yoshingizni kiriting! <span style="color: red;">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="hudud">
                                <option selected value="no">Tanlang!</option>
                                <option value="shahar">Shahar</option>
                                <option value="qishloq">qishloq</option>
                            </select>
                            <label for="floatingSelectGrid">Hududingizni kiriting!</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="work">
                                <option selected value="no">Tanlang!</option>
                                <option value="ishisiz">Ishsiz</option>
                                <option value="ishlaydi">Ishlaydi</option>
                                <option value="talaba">Talaba</option>
                            </select>
                            <label for="floatingSelectGrid">Ish joyingiz?</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="no">
                                <option selected value="no">Tanlang!</option>
                                <option  value="oilali"> Bo'ydoq</option>
                                <option value="boydoq">Oilali</option>
                            </select>
                            <label for="floatingSelectGrid">Oilalimisiz?</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                <option selected value="no">yoq</option>
                                <option  value="oneg">1-guruh</option>
                                <option value="twog">2-guruh</option>
                                <option value="threeg">3-guruh</option>
                            </select>
                            <label for="floatingSelectGrid">Nogironligi mavjudmi?</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-light w-100 h-100" style="font-size: 25px;">Submit</button>
                    </div>
                </div>
                <div class="col-md-12 mt-5 text-center">

                </div>

            </form>
        </div>
    </div>
</section>
<!-- Search Section End -->

<!-- Search Imtiyoz Section Start-->
<section class="imtiyoz_section">
    <div class="container">
        <div class="imtiyozlar">
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Asosiy</a></li>
                    <li><?=$models['0']['name']?></li>
                </ul>
            </div>
            <div class="row">

                <?php require_once "blocks/sidebar.php" ?>

                <div class="col-md-10">
                    <div class="row">
                        <?php if (!empty($models)) :?>
                            <?php foreach ($models as $model)  : ?>
                                <?php $image = getImage('category', $model); ?>
                                <div class="col-md-6">
                                    <div class="imtiyoz_item">
                                        <a href="#" class="item_name">
                                            <?=$model['name']?>
                                        </a>
                                        <div class="imtiyoz_btns">
                                            <a href="?view=imtiyoz&id=<?=$model['id']?>" target="_blank" class="btn btn-success">Batafsil<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="btn btn-primary">Manba<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                                </svg>
                                            </a>
                                            <a href="/images/logo.png" class="btn btn-warning" download="/images/logo.png">Yuklash<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php  endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Search Imtiyoz Section End-->

<?php require_once "blocks/footer.php" ?>
