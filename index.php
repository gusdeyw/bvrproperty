<?php include 'layout/header.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<title>AAA</title>
</head>

<body class="bg-gray-200">
    <?php include 'layout/navbar.php' ?>
    <div class="mx-auto w-9/12 bg-red-400">
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-e6d2bb55f20131018" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-3072px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9">
                <img class="h-80 object-none object-bottom" src="public/images/tes.webp">
            </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9">
                <img class="object-cover"src="public/images/tes.webp">
            </div>
                <div class="swiper-slide" role="group" aria-label="3 / 9" >Slide 3</div>
                <div class="swiper-slide " role="group" aria-label="4 / 9">Slide 4</div>
                <div class="swiper-slide" role="group" aria-label="5 / 9">Slide 5</div>
                <div class="swiper-slide" role="group" aria-label="6 / 9">Slide 6</div>
                <div class="swiper-slide" role="group" aria-label="7 / 9">Slide 7</div>
                <div class="swiper-slide" role="group" aria-label="8 / 9">Slide 8</div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="9 / 9">Slide 9</div>
            </div>
            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <?php include 'layout/footer.php' ?>