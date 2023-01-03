<link rel="stylesheet" href="<?=ROOT?>assets/css/style-features.css">
<div class="w-full pt-24 px-4 h-full bg-worange">
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <?php if(!empty($data))foreach ($data as $key => $value) { ?>
            <div class="mx-auto p-2 bg-white shadow-md hover:bg-norange">
                <div class="">
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($value["image"]) . '" />'; ?>
                </div>
                <div class=" p-2">
                    <div class="flex justify-between">
                        <div class="">
                            <p>reviews</p>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                    </div>
                    <h3 class=""><?php echo $value["nom"]; ?></h3>
                    <h3 class=""><?php echo $value["prix"]; ?> $</h3>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
