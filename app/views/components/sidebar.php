
            <ul>
                <li class="relative px-6 py-3 bg-norange">
                    <a href="index.php/?c=newArrivals&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                        <img src="<?= ROOT ?>assets/images/icons/arrivals.svg" alt="" class="w-5 h-5">
                        <span class="ml-4">new arrivals</span>
                    </a>
                </li>
                <li class="relative px-6 py-3 hover:bg-worange ">
                    <a href="index.php/?c=features&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                        <img src="<?= ROOT ?>assets/images/icons/featured.svg" alt="" class="w-5 h-5">
                        <span class="ml-4">Features</span>
                    </a>
                </li>
                <li class="relative px-6 py-3 hover:bg-worange ">
                    <a href="index.php/?c=blog&a=show" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 ">
                        <img src="<?= ROOT ?>assets/images/icons/blog.svg" alt="" class="w-5 h-5">
                        <span class="ml-4">Blog</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- left bar end -->
        <div class=" w-full h-full overflow-scroll overflow-y-auto">
            <div class="container w-full px-6 mx-auto grid">
                
                <div class="hidden gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                            <img class="w-5 h-5" src="<?= ROOT ?>assets/icons/home.svg" alt="" srcset="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                test
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                test
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                        <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                            <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                <?php echo basename(__FILE__, 'a.php'); ?>
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                test
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                        <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                            <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                test
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                test
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md ">
                        <div class="p-3 mr-4 bg-worange rounded-full dark:text-orange-100 ">
                            <img class="w-5 h-5" src="../icons/home.svg" alt="" srcset="">
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                test
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                test
                            </p>
                        </div>
                    </div>

                </div>