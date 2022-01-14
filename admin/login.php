<?php

session_start();

if (isset($_SESSION["login"])) {
    header("Location: dashboard");
}

if (isset($_POST["login"])) {
    $_SESSION["login"] = true;
    header("Location: dashboard");
    exit;
}

?>

<?php include '../admin/layout/header.php'; ?>
<title>Dashboard - Admin</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->


    <div class="flex items-center justify-center min-w-full min-h-screen bg-bvr10">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <div class="flex justify-center">
                <img class="mb-5 w-64" src="/public/images/logo-black.png">
            </div>
            
            <form method="POST" action="">
                <div class="mt-4">
                    <div>
                        <label class="block" for="login">Login<label>
                                <input type="text" placeholder="Login" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-bvr30">
                                <span class="text-xs tracking-wide text-white invisible">Email field is required </span>
                    </div>
                    <div class="">
                        <label class="block">Password<label>
                                <input type="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-bvr30">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button class="px-6 py-2 mt-4 text-white bg-bvr20 rounded-lg hover:bg-bvr30" type="submit" name="login">Login</button>
                        <a href="#" class="text-sm text-bvr20 hover:underline">Forgot password?</a>
                    </div>
                </div>
            </form>
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