<?php include '../admin/layout/header.php'; ?>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<title>Announcment</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        Announcement
                    </p>
                </div>
                <div class="bg-white rounded-t-lg mt-5 px-10 py-7">
                    <div class="mt-4">
                        <label class="font-semibold w-full">Announcemenet Content</label>
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
        CKEDITOR.replace('blogcontent', {
            height: 500,
        });
    </script>
</body>

</html>