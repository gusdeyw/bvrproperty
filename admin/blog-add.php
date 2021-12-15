<?php include '../admin/layout/header.php'; ?>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<title>Blog Detail</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        Blog Detail
                    </p>
                </div>
                <div class="bg-gray-200 rounded-t-lg mt-5 px-10 py-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Category</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Title</label>
                            <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-6  gap-y-2 mt-2">
                                <div class="">
                                    <input type="checkbox" id="balivillas" name="balivillas" value="balivillas" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="balivillas">Bali Villas</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="blog" name="blog" value="blog" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="blog">Blog</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="comfort" name="comfort" value="comfort" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="comfort">Comfort</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="invesment" name="invesment" value="invesment" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="invesment">Investment in Bali</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="luxury" name="luxury" value="luxury" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="luxury">Luxury</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="market" name="market" value="market" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="market">Market Trends</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="offers" name="offers" value="offers" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="offers"> Offers</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="ownership" name="ownership" value="ownership" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="ownership">Ownership</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="traditional" name="traditional" value="traditional" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="traditional">Traditional</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-10">
                        <label class="font-semibold w-full">Blog Cover Image</label>
                        <div class="lg:flex">
                            <input type="file" multiple class="w-max mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                            <div class="flex flex-col lg:ml-8  mt-1 w-full">
                                <img class="w-full h-96 object-cover" src="/public/images/search2.png">
                                <p class="px-6 pt-3 pb-2 bg-red-200 text-red-700">Img-93891819</p>
                                <p class="px-6 pb-2 bg-red-200 text-black">368.9 kb</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <label class="font-semibold w-full">Blog Content</label>
                        <div class="mt-4">
                            <textarea type="message" rows="90" name="blogcontent" class="w-full mt-1 py-2 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="blog-list.php">Cancel</a></button>
                </div>
            </main>
        </form>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- CK-Editor -->
    <script>
        CKEDITOR.replace('blogcontent',{
            height: 500,
        });
    </script>
</body>

</html>