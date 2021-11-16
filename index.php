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
    <div class="mx-auto w-9/12 h-96">
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
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-red-500 text-white">Exclusive</p>
                    </div>
                </div>
                <!-- Slider 2 -->
                <div class="swiper-slide flex-col">
                    <img class="object-cover relative " src="public/images/tes.webp">
                    <div class="ml-auto">
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-red-500 text-white">Exclusive</p>
                    </div>
                </div>
                <!-- Slider 3 -->
                <div class="swiper-slide flex-col">
                    <img class="object-cover relative " src="public/images/tes.webp">
                    <div class="ml-auto">
                        <p class="relative -mt-88 py-3 px-7 font-semibold bg-red-500 text-white">Exclusive</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Property List -->
    <div class="mx-auto w-9/12 mt-7">
        <div class="flex my-3">
            <p class="flex-none pr-6 font-bold">PROPERTY LIST</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <!-- Search -->
        <!-- Form 1 -->
        <div class="flex">
            <!-- Form Search -->
            <input class="border-2 border-gray-300 bg-white h-10 px-4 pr-16 text-sm focus:outline-none w-5/12" type="search" name="search" placeholder="Search">
            <!-- Dropdown Region -->
            <select class="ml-5 px-4 border-gray-300 border-2">
                <option>Region</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <!-- Dropdown Property -->
            <select class="ml-5 px-4 border-gray-300 border-2">
                <option>Property Type</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <!-- Dropdown MinBedroom -->
            <select class="ml-5 px-4 border-gray-300 border-2">
                <option>Min Bedroom</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <!-- Dropdown Max Bed -->
            <select class="px-4 border-gray-300 border-2">
                <option>Max Bedroom</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
        </div>
        <!-- Form 2 -->
        <div class="flex mt-3 h-10">
            <!-- Dropdown MinPrice -->
            <select class="px-4 border-gray-300 border-2">
                <option>Min Price</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <!-- Dropdown MaxPrice -->
            <select class="px-4 border-gray-300 border-2">
                <option>Max Price</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <!-- Dropdown Are -->
            <select class="ml-5 px-4 border-gray-300 border-2">
                <option>Are</option>
                <option>Sample</option>
                <option>Sample</option>
            </select>
            <input type='text' placeholder="Min. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-2/12">
            <input type='text' placeholder="Max. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-2/12">
            <button class="ml-3 border-2 border-red-700 bg-red-500 hover:bg-red-600 text-white h-10 text-center text-base w-1/12">
                Search
            </button>
        </div>
        <!-- Result -->
        <div class="grid grid-cols-3 gap-10 my-10">
            <div class="bg-white filter drop-shadow-lg border-2 hover:border-red-600">
                <a href="page-detail.php" class="">
                    <div class="p-3">
                        <p class="font-semibold">CHARMING BRAND NEW VILLA</p>
                        <p class="text-red-600">BLI1234</p>
                    </div>
                    <img class="object-cover h-56 w-full" src="public/images/search1.png">
                    <div class="px-4 py-3 grid grid-cols-2 gap-3">
                        <div class="flex">
                            <div class="w-8">
                                <i class="fas fa-map-marked-alt object-contain w-full h-full pr-2"></i>
                            </div>
                            <p class="text-sm h-full my-auto">Somewhere</p>
                        </div>
                        <div class="flex">
                            <i class="fas fa-expand-arrows-alt w-8 pr-2"></i>
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