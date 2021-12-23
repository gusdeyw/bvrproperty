<?php include '../admin/layout/header.php'; ?>
<title>Dashboard - Admin</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-8">
            <div class="flex flex-wrap mt-3 bg-white rounded-lg">
                <div class="w-full px-9 py-6">
                    <p class="text-xl font-semibold text-gray-700">
                        Announcement
                    </p>
                    <p class="mt-1 text-gray-700 text-justify">
                        Welcome to Admin Dashboard.<br> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                    </p>

                </div>
            </div>

            <div class="flex flex-wrap mt-6 bg-white rounded-lg">
                <div class="w-full px-9 py-6">
                    <p class="text-xl font-semibold text-gray-700">
                        Property Overview
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-5">
                        <div>
                            <div class="flex">
                                <div class="py-4 px-5 bg-bvr21 text-bvr30 rounded-lg">
                                    <i class="far fa-building fa-lg"></i>
                                </div>
                                <div class="ml-2">
                                    <p class="text-gray-500">Total Property</p>
                                    <p class="text-xl font-bold">900
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex">
                                <div class="py-4 px-5 bg-green-100 text-green-800 rounded-lg">
                                    <i class="fas fa-school fa-lg"></i>
                                </div>
                                <div class="ml-2">
                                    <p class="text-gray-500">Total Lead</p>
                                    <p class="text-xl font-bold">1453
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- <div class="flex justify-end  w-full">
            <div class="w-screen absolute bottom-0  bg-white text-right py-2 px-4">
                <p class="text-sm text-gray-400">Copyright &copy;. All Right Reserved.</p>
            </div>
        </div> -->

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