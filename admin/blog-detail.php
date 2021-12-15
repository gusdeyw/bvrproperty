<?php include '../admin/layout/header.php'; ?>
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
                <div class="bg-gray-300 rounded-t-lg mt-5 px-10 py-7">
                    <div class="grid grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Title</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Title</label>
                            <div class="grid grid-cols-3 gap-x-6  gap-y-2 mt-2">
                                <div class="">
                                    <input type="checkbox" id="airconditioner" name="foo" value="airconditioner" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="airconditioner"> Air Conditioner</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="cabletv" name="foo" value="cabletv" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="cabletv">Cable Tv</label>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="diningarea" name="foo" value="diningarea" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="diningarea">Dining Area</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="property-list.php">Cancel</a></button>
                </div>
            </main>
        </form>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

</body>

</html>