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
                <ul style="justify-content: center">
                    <li><a href="/">Asosiy</a></li>
                    <li><?=$model['name']?></li>
                </ul>
            </div>
            <div class="row">

                <?php require_once "blocks/sidebar.php" ?>

                <div class="col-md-10">
                        <div class="select_imtiyoz" style="background-color: #fff; padding: 20px; height: 100%; border-radius: 15px">
                            <?php if (!empty($model)) :?>
                                <div class="imtiyoz_name mb-2" style="font-size: 25px">
                                    <?=$model['title']?>
                                </div>
                                <div class="imtiyoz_body">
                                    <?=$model['body']?>
                                </div>
                            <?php endif; ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Search Imtiyoz Section End-->

<?php require_once "blocks/footer.php" ?>

