<div class="col-md-2">
    <div class="sidebar">
        <?php if (!empty($categories)) :?>
        <?php foreach ($categories as $category)  : ?>
        <?php $image = getImage('category', $category); ?>
        <a href="#" class="sidebar_item">
            <div class="item_img"><img src="<?=$image?>" alt=""></div>
            <div class="item_name"><?= $category['name']?></div>
        </a>
        <?php  endforeach; ?>
        <?php endif; ?>
    </div>
</div>