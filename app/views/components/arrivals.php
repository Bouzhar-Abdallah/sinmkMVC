<link rel="stylesheet" href="<?= ROOT ?>assets/css/style-arrivals.css">

<section class="mt-24">
    <?php if (!empty($data)) foreach ($data as $key => $value) { ?>
        <div class="content">
            <div class="image">
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($value["image"]) . '" />'; ?>

            </div>
            <div class="info">
                <h3><?php echo $value["prix"]; ?> $</h3>
            </div>
            <div class="addcart">
                <figure><i class="fa-solid fa-circle-info"></i></figure>
                <figure><i class="fa-regular fa-heart"></i></figure>
                <figure><i class="fa-solid fa-cart-plus"></i></figure>
            </div>
        </div>

    <?php } ?>
</section>