<?php include '../admin/layout/header.php'; ?>
<title>User Detail</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow px-4 py-8 sm:p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        User Detail
                    </p>
                </div>
                <div class="bg-white rounded-lg mt-5 px-10 py-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Login</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                        </div>
                        <div class="">
                            <label class="font-semibold">Email</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">First Name</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                        </div>
                        <div class="">
                            <label class="font-semibold">Last Name</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Confirm</label>
                            <input type="password" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Confirm Password</label>
                            <input type="password" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Role</label>
                            <div class="mt-1 py-1">
                                <!-- Publisher -->
                                <div class="mt-1">
                                    <input type="radio" id="publisher" name="role" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="publisher">Publisher</label>
                                </div>
                                <!-- Developer -->
                                <div class="mt-1">
                                    <input type="radio" id="developer" name="role" class="form-radio text-bvr20 bg-gray-200">
                                    <label for="developer">Developer</label>
                                </div class="mt-1">
                                <!-- Administrator -->
                                <div class="mt-1">
                                    <input type="radio" id="administrator" name="role" class="form-radio text-bvr20 bg-gray-200">
                                    <label for="administrator">Administrator</label>
                                </div class="mt-1">
                                <!-- Supervisor -->
                                <div class="mt-1">
                                    <input type="radio" id="supervisor" name="role" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="supervisor">Supervisor</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="user.php">Cancel</a></button>
                </div>
            </main>
        </form>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- Change TAB JS -->
</body>

</html>