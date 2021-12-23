<?php include '../admin/layout/header.php'; ?>
<title>User</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-8">
            <div class="flex w-full">
                <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                    User
                </p>

                <div class="flex ml-auto bg-white rounded-lg hover:bg-bvr20 hover:text-white text-bvr20">
                    <a href="user-add.php" class="px-4 py-2 flex">
                        <i class="fas fa-plus-circle mt-1 mr-1"></i>
                        <p>Add New User</p>
                    </a>
                </div>

            </div>
            <div class="mx-6 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-5">
                <div class="col-span-1">
                    Login
                </div>
                <div class="col-span-2">
                    Email
                </div>
                <div class="col-span-1 hidden md:inline">
                    Role
                </div>
                <div class="col-span-1 hidden lg:inline">
                    Last Login
                </div>
            </div>
            <div class="bg-white mt-3">
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <a href="./user-detail.php" class="hover:bg-gray-100">
                        <div class="mx-6 lg:mx-0 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-5">
                            <div class="col-span-1">
                                Yoga
                            </div>
                            <div class="col-span-2">
                                yoga@bvrproperty.com
                            </div>
                            <div class="col-span-1 hidden md:inline">
                                Developer
                            </div>
                            <div class="col-span-1 hidden lg:inline">
                                Tue, Dec 21, 2021 6:28 AM
                            </div>
                        </div>
                    </a>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <a href="./user-detail.php" class="hover:bg-gray-100">
                        <div class="mx-6 lg:mx-0  grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-5">
                            <div class="col-span-1">
                                Yoga
                            </div>
                            <div class="col-span-2">
                                yoga@bvrproperty.com
                            </div>
                            <div class="col-span-1 hidden md:inline">
                                Developer
                            </div>
                            <div class="col-span-1 hidden lg:inline">
                                Tue, Dec 21, 2021 6:28 AM
                            </div>
                        </div>
                    </a>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 2 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <a href="./user-detail.php" class="hover:bg-gray-100">
                        <div class="mx-6 lg:mx-0 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 mt-5">
                            <div class="col-span-1">
                                Yoga
                            </div>
                            <div class="col-span-2">
                                yoga@bvrproperty.com
                            </div>
                            <div class="col-span-1 hidden md:inline">
                                Developer
                            </div>
                            <div class="col-span-1 hidden lg:inline">
                                Tue, Dec 21, 2021 6:28 AM
                            </div>
                        </div>
                    </a>
                    <hr class="mt-3">
                </div>
                <!-- Pagination -->
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">97</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    <!-- Heroicon name: solid/chevron-left -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                    ...
                                </span>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                    8
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    9
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    10
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Next</span>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
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