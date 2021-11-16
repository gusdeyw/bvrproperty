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

    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 100%;
        width: 100%;
    }

    .mySwiper {
        height: 100%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<title>Page Detail</title>
</head>

<body class="bg-gray-200">
    <?php include 'layout/navbar.php'; ?>
    <div class="mx-auto w-9/12 pt-10">
        <?php include 'layout/search.php' ?>
        <!-- <div class=" my-6 h-96">
            <img class="w-full h-full object-cover" src="public/images/search1.png">
        </div> -->
        <!-- Flex -->
        <!-- <div class="grid grid-cols-5 gap-5 mb-7">
            <div class="col-span-1">
                <img class="w-full h-32 object-cover" src="public/images/search1.png">
            </div>
            <div class="col-span-1">
                <img class="w-full h-32 object-cover" src="public/images/search1.png">
            </div>
            <div class="col-span-1">
                <img class="w-full h-32 object-cover" src="public/images/search1.png">
            </div>
            <div class="col-span-1">
                <img class="w-full h-32 object-cover" src="public/images/search1.png">
            </div>
            <div class="col-span-1">
                <img class="w-full h-32 object-cover" src="public/images/search1.png">
            </div>
        </div> -->
        <!-- Swiper JS  -->
        <div class="h-97 mb-4">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mt-5 swiper mySwiper2">
                <div class=" swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="h-40">
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper gap-7">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                    </div>
                </div>
            </div>
        </div>



        <!-- Property -->
        <div class="flex my-3">
            <p class="flex-none pr-6 mb-5 font-bold">PROPERTY DETAIL</p>
            <!-- Line -->
            <svg height="3" class="w-full my-3">
                <line x1="0" y1="0" x2="30000" y2="0" style="stroke:black;stroke-width:3" />
            </svg>
        </div>
        <div class="grid grid-cols-7 gap-5">
            <!-- Property Desc -->
            <div class="col-span-4">
                <div class="">
                    <p class="font-bold mb-3">PROPERTY DESCRIPTION</p>
                    <p class="text-justify pr-10">I am not sure? but ima not a good writer, so this is the description
                        that you could always fill it with usefull word that could make people
                        shout “BUY!!!” to us. Cheers...
                        <br><br>
                        I am not sure? but ima not a good writer, so this is the description
                        that you could always fill it with usefull word that could make people
                        shout “BUY!!!” to us. Cheers...
                        <br><br>
                        I am not sure? but ima not a good writer, so this is the description
                        that you could always fill it with usefull word that could make people
                        shout “BUY!!!” to us. Cheers...
                    </p>
                </div>

            </div>
            <!-- Property Details -->
            <div class="col-span-3 w-full">
                <div>
                    <p class="font-bold mb-3">PROPERTY DETAILS</p>
                    <p class="text-justify">CHARMING BRAND NEW VILLA</p>
                    <div class="bg-white py-1 px-2">
                        <div class="flex w-full">
                            <p class="w-full">Ref ID :</p>
                            <p class="w-full font-semibold flex justify-end">PPR2790</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Area :</p>
                            <p class="w-full font-semibold flex justify-end">Canggu</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Listing Type :</p>
                            <p class="w-full font-semibold flex justify-end">For Rent</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Property Type :</p>
                            <p class="w-full font-semibold flex justify-end">Yearly Rental</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Building Size :</p>
                            <p class="w-full font-semibold text-right">350 m<sup>2</sup></p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Land Size :</p>
                            <p class="w-full font-semibold flex justify-end">8 Are</p>
                        </div>
                        <div class="flex w-full">
                            <p class="w-full">Price :</p>
                            <p class="w-full font-semibold flex justify-end">IDR500,000,000 Yearly</p>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Property Facility -->
            <div class="col-span-4">
                <div class="">
                    <p class="font-bold mb-3">PROPERTY FACILITY</p>
                    <div class="px-3 py-2 grid grid-cols-7 gap-4 bg-white">
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-fan"></i></div>
                                <p>Air Conditioner</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-tv"></i></div>
                                <p>Cable TV</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-utensils"></i></div>
                                <p>Dining Area</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-plug"></i></div>
                                <p>Electricity</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-warehouse"></i></div>
                                <p>Garage</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-home"></i></div>
                                <p>Gazebo</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-globe"></i></div>
                                <p>Internet</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="far fa-hat-chef"></i></div>
                                <p>Kitchen</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-level-up-alt"></i></div>
                                <p>Level</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-swimmer"></i></div>
                                <p>Pool</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fad fa-shield"></i></div>
                                <p>Security</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-box"></i></div>
                                <p>Storage</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-washer"></i></div>
                                <p>Washer or Laundry</p>
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-water"></i></div>
                                <p>Water Resource</p>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <div class="flex w-full">
                                <div class="w-8 text-bvr2"><i class="fas fa-wifi"></i></div>
                                <p>Wi-fi</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Property Contact -->
            <div class="col-span-3 w-full">
                <div>
                    <p class="font-bold mb-2">PROPERTY CONTACT</p>
                    <p class="text-justify"><strong>SALES AGENT:</strong> Ceri</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1 w-full px-2 bg-white border-2 border-bvr2">

                            <div class="w-full mx-auto">
                                <p>Whatsapp</p>
                            </div>

                        </div>
                        

                    </div>
                </div>

            </div>

        </div>


    </div>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>