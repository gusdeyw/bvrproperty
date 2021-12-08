<?php include 'layout/header.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<title>Home</title>
</head>

<body class="bg-gray-200">
    <?php include 'layout/navbar.php' ?>
    <div class="mx-auto w-10/12 lg:w-9/12 h-96">
        <svg height="3" class="w-full my-4">
            <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
        </svg>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slider 1 -->
                <div class="swiper-slide flex-col">
                    <img class="object-cover relative" src="public/images/tes.webp">
                    <div class="ml-auto">
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-bvr2 text-white">Exclusive</p>
                    </div>
                </div>
                <!-- Slider 2 -->
                <div class="swiper-slide flex-col">
                    <img class="object-cover relative " src="public/images/tes.webp">
                    <div class="ml-auto">
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-bvr2 text-white">Exclusive</p>
                    </div>
                </div>
                <!-- Slider 3 -->
                <div class="swiper-slide flex-col">
                    <img class="object-cover relative " src="public/images/tes.webp">
                    <div class="ml-auto">
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-bvr2 text-white">Exclusive</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Property List -->
    <div class="mx-auto w-10/12 lg:w-9/12 mt-7">
        <div class="flex my-3">
            <p class="flex-none pr-6 font-bold">PROPERTY LIST</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <!-- Search -->
        <!-- Form 1 -->
        <div class="lg:hidden">
            <!-- Form Search -->
            <input class="border-2 border-gray-300 bg-white h-10 px-4 text-sm focus:outline-none w-full lg:w-5/12" type="search" name="search" placeholder="Search">
            <div class="flex gap-x-4 mt-2">
                <!-- Dropdown Region -->
                <select class="px-4 w-5/12 border-gray-300 border-2">
                    <option>Region</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>
                <!-- Dropdown Property -->
                <select class="px-4 w-7/12 border-gray-300 border-2">
                    <option>Property Type</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>

            </div>
            <div class="flex gap-x-4 mt-2">
                <!-- Dropdown MinBedroom -->
                <select class="px-4 w-6/12 border-gray-300 border-2">
                    <option>Min Bedroom</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>
                <!-- Dropdown Max Bed -->
                <select class="px-4 w-6/12 border-gray-300 border-2">
                    <option>Max Bedroom</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>
            </div>
            <div class="flex gap-x-4 mt-2">
                <!-- Dropdown MinPrice -->
                <select class="px-4 w-6/12 border-gray-300 border-2">
                    <option>Min Price</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>
                <!-- Dropdown MaxPrice -->
                <select class="px-4 w-6/12 border-gray-300 border-2">
                    <option>Max Price</option>
                    <option>Sample</option>
                    <option>Sample</option>
                </select>
            </div>
            <select class="w-full mt-2 px-4 border-gray-300 border-2">
                <option>Are</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <div class="flex gap-x-4 mt-2">
                <input type='text' placeholder="Min. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-6/12">
                <input type='text' placeholder="Max. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-6/12">
                </select>
            </div>
            <button class="border-2  mt-2 bg-bvr2 hover:bg-bvr3 text-white h-10 text-center text-base w-full">
                Search
            </button>
        </div>
        <!-- Result -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 my-10">
            <!-- Hasil 1 -->
            <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr2 col-span-1">
                <a href="page-detail.php" class="">
                    <div class="p-3">
                        <p class="font-semibold">CHARMING BRAND NEW VILLA</p>
                        <p class="text-red-600">BLI1234</p>
                    </div>
                    <img class="object-cover h-56 w-full" src="public/images/search1.png">
                    <div class="ml-auto -mt-48 w-max">
                        <p class="relative py-1 px-2 text-sm bg-bvr2 text-white">Good Deal</p>
                    </div>
                    <div class="-mt-3"></div>
                    <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-44">
                        <div class="flex">
                            <div class="w-8">
                                <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                            </div>
                            <p class="text-sm h-full my-auto">Somewhere</p>
                        </div>
                        <div class="flex">
                            <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                            <p class="text-sm">1230 Are</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-home pr-2 w-8"></i>
                            <p class="text-sm">Freehold</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-bed pr-2 w-8"></i>
                            <p class="text-sm">3 Bedroom</p>
                        </div>
                    </div>
                    <p class="p-4 text-right font-bold">IDR 123.000.000</p>
                </a>
            </div>
            <!-- Hasil 1 -->
            <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr2 col-span-1">
                <a href="page-detail.php" class="">
                    <div class="p-3">
                        <p class="font-semibold">CHARMING BRAND NEW VILLA</p>
                        <p class="text-red-600">BLI1234</p>
                    </div>
                    <img class="object-cover h-56 w-full" src="public/images/search1.png">
                    <div class="ml-auto -mt-48 w-max">
                        <p class="relative py-1 px-2 text-sm bg-bvr2 text-white">Good Deal</p>
                    </div>
                    <div class="-mt-3"></div>
                    <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-44">
                        <div class="flex">
                            <div class="w-8">
                                <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                            </div>
                            <p class="text-sm h-full my-auto">Somewhere</p>
                        </div>
                        <div class="flex">
                            <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                            <p class="text-sm">1230 Are</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-home pr-2 w-8"></i>
                            <p class="text-sm">Freehold</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-bed pr-2 w-8"></i>
                            <p class="text-sm">3 Bedroom</p>
                        </div>
                    </div>
                    <p class="p-4 text-right font-bold">IDR 123.000.000</p>
                </a>
            </div>
            <!-- Hasil 1 -->
            <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr2 col-span-1">
                <a href="page-detail.php" class="">
                    <div class="p-3">
                        <p class="font-semibold">CHARMING BRAND NEW VILLA</p>
                        <p class="text-red-600">BLI1234</p>
                    </div>
                    <img class="object-cover h-56 w-full" src="public/images/search1.png">
                    <div class="ml-auto -mt-48 w-max">
                        <p class="relative py-1 px-2 text-sm bg-bvr2 text-white">Good Deal</p>
                    </div>
                    <div class="-mt-3"></div>
                    <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-44">
                        <div class="flex">
                            <div class="w-8">
                                <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                            </div>
                            <p class="text-sm h-full my-auto">Somewhere</p>
                        </div>
                        <div class="flex">
                            <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                            <p class="text-sm">1230 Are</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-home pr-2 w-8"></i>
                            <p class="text-sm">Freehold</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-bed pr-2 w-8"></i>
                            <p class="text-sm">3 Bedroom</p>
                        </div>
                    </div>
                    <p class="p-4 text-right font-bold">IDR 123.000.000</p>
                </a>
            </div>
            <!-- Hasil 1 -->
            <div class="bg-white filter drop-shadow-lg border-2 hover:border-bvr2 col-span-1">
                <a href="page-detail.php" class="">
                    <div class="p-3">
                        <p class="font-semibold">CHARMING BRAND NEW VILLA</p>
                        <p class="text-red-600">BLI1234</p>
                    </div>
                    <img class="object-cover h-56 w-full" src="public/images/search1.png">
                    <div class="ml-auto -mt-48 w-max">
                        <p class="relative py-1 px-2 text-sm bg-bvr2 text-white">Good Deal</p>
                    </div>
                    <div class="-mt-3"></div>
                    <div class="px-4 py-3 grid grid-cols-2 gap-3 mt-44">
                        <div class="flex">
                            <div class="w-8">
                                <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                            </div>
                            <p class="text-sm h-full my-auto">Somewhere</p>
                        </div>
                        <div class="flex">
                            <i class="pl-1.5 pt-1 fas fa-expand-arrows-alt w-8 pr-2"></i>
                            <p class="text-sm">1230 Are</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-home pr-2 w-8"></i>
                            <p class="text-sm">Freehold</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-bed pr-2 w-8"></i>
                            <p class="text-sm">3 Bedroom</p>
                        </div>
                    </div>
                    <p class="p-4 text-right font-bold">IDR 123.000.000</p>
                </a>
            </div>



        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <?php include 'layout/footer.php' ?>