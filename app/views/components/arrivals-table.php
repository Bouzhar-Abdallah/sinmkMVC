<h1 class="my-6 text-2xl capitalize font-semibold text-gray-700 ">
                    <?php echo basename(__FILE__, '-table.php') ?> dashboard
                </h1>
    <div class="w-full overflow-hidden rounded-lg shadow-md">
                <div class="w-full overflow-x-auto">
                    <table class="w-full table-fixed whitespace-no-wrap ">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-black uppercase border-b  bg-wgray">
                                <th class="px-4 py-3 w-60">produit</th>
                                <th class="px-4 py-3 w-32">prix</th>
                                <th class="px-4 py-3 w-32">Qte en stock</th>
                                <th class="px-4 py-3 ">Description</th>
                                <th class="px-4 py-3 w-32">options</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y ">

                            <?php
                            if (isset($_GET["a"])) {
                                if ($_GET["a"] === 'newProductLine') {
                                    require_once 'newProductLine.php';
                                }
                            }
                            ?>
                            <?php foreach ($data as $key => $value) {
                                if ($value["id_newArrivals"] === $id) {
                                    require_once 'updateProduct.php';
                                } else {
                                    require 'showLine.php';
                                }
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>