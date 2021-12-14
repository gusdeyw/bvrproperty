<?php include '../admin/layout/header.php'; ?>
<title>Property List</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-8">
            <div class="flex w-full">
                <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                    Property Detail
                </p>
            </div>
            <div class="bg-gray-300 rounded-t-lg mt-5 px-10 py-7">
                <div class="grid grid-cols-2 gap-x-12 gap-y-5">
                    <div class="">
                        <label class="font-semibold">Ref ID</label>
                        <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                    </div>
                    <div class="">
                        <label class="font-semibold">Property Name</label>
                        <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold">Property Status</label>
                        <div class="flex">
                            <!-- Available -->
                            <div class="flex-1">
                                <input type="radio" id="available" name="check1" class="form-radio bg-green-500">
                                <label for="available">Available</label>
                            </div>
                            <!-- Sold -->
                            <div class="flex-1">
                                <input type="radio" id="sold" name="check1">
                                <label for="sold">Sold</label>
                            </div>
                            <!-- Rented -->
                            <div class="flex-1">
                                <input type="radio" id="rented" name="check1">
                                <label for="rented">Rented</label>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label class="font-semibold">Property Note</label>
                        <textarea type="message" rows="7" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md"></textarea>
                    </div>
                </div>
            </div>
            <div class="bg-gray-200 flex text-white">
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    General Info
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Facilities
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Pricing
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Owner/Contact Person
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Images
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Website
                </button>
                <!--  -->
                <button class="px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                    Legal Document
                </button>


            </div>
            <div class="bg-gray-200 px-10 pb-7">&nbsp;
                <!-- General Info -->
                <div class="grid grid-cols-2 gap-x-12 gap-y-5">
                    <div class="col-span-2">
                        <label class="font-semibold">Detail Description</label>
                        <textarea type="message" rows="14" class="w-full mt-1 py-2 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md"></textarea>
                    </div>
                    <div class="">
                        <label class="font-semibold">Ref ID</label>
                        <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                    </div>
                    <div class="">
                        <label class="font-semibold">Property Name</label>
                        <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                    </div>
                </div>
            </div>

        </main>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>