<?php include '../admin/layout/header.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<title>Lead List</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-8">
            <div class="flex w-full">
                <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                    Lead List
                </p>
                <div class="flex ml-auto bg-white rounded-lg hover:bg-bvr20 hover:text-white text-bvr20">
                    <a href="leads-add" class="px-4 py-2 flex">
                        <i class="fas fa-plus-circle mt-1 mr-1"></i>
                        <p>Add New Lead</p>
                    </a>
                </div>
            </div>
            <div class="mx-6 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5">
                <div class="col-span-1 mr-9">
                    No
                </div>
                <div class="col-span-1 -ml-6">
                    Date Created
                </div>
                <div class="col-span-1">
                    Lead Type
                </div>
                <div class="col-span-2">
                    Lead Name
                </div>
                <div class="col-span-2 hidden md:inline">
                    Phone
                </div>
                <div class="col-span-2 hidden lg:inline">
                    Email
                </div>
                <div class="col-span-1 hidden lg:inline">
                    Status
                </div>
                <div class="col-span-1 hidden lg:inline">
                    Action
                </div>
            </div>
            <div class="bg-white mt-3">
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
                <!-- Hasil 1 -->
                <div class="pt-3 bg-white hover:bg-gray-200 lg:px-6">
                    <div class="mx-6 lg:mx-0 grid grid-cols-4 md:grid-cols-5 lg:grid-cols-11 gap-5 mt-5 text-sm">
                        <div class="col-span-1 mr-9">
                            1
                        </div>
                        <div class="col-span-1 -ml-6">
                            2020-10-20
                        </div>
                        <div class="col-span-1 hidden md:inline">
                            Buyer
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            Sari
                        </div>
                        <div class="col-span-2 hidden lg:inline">
                            +62 818-0265-5880
                        </div>
                        <div class="col-span-2">
                            saripfizer@gmail.com
                        </div>
                        <div class="col-span-1">
                            New
                        </div>
                        <div class="flex">
                            <div class="w-max rounded-md px-3 py-1 bg-blue-700 text-white cursor-pointer" onclick="location.href='leads-detail';"><i class="fas fa-edit"></i></div>
                            <div class="w-max ml-2 rounded-md px-3 py-1 bg-red-700 text-white cursor-pointer" data-modal-toggle="popup-modal"><i class="fas fa-trash-alt"></i></div>
        
                            <!-- Delete Product Modal -->
                            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
                                <div class="relative px-4 w-full max-w-md h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex justify-end p-2">
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 pt-0 text-center">
                                            <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Lead?</h3>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-3">
                </div>
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
                                <!-- Heroicon name: s+olid/chevron-left -->
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

    <!-- Flowbite -->
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    </html>