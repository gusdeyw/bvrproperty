<?php include '../admin/layout/header.php'; ?>
<title>Property List</title>
</head>

<body class="bg-gray-100 font-sans flex">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST">
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
                            <div class="flex mt-1 py-1">
                                <!-- Available -->
                                <div class="flex-1">
                                    <input type="radio" id="available" name="propertystatus" class="form-radio text-bvr20">
                                    <label for="available">Available</label>
                                </div>
                                <!-- Sold -->
                                <div class="flex-1">
                                    <input type="radio" id="sold" name="propertystatus" class="form-radio text-bvr20">
                                    <label for="sold">Sold</label>
                                </div>
                                <!-- Rented -->
                                <div class="flex-1">
                                    <input type="radio" id="rented" name="propertystatus" class="form-radio text-bvr20">
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
                    <a onclick="generalInfo()" id="generalInfo2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        General Info
                    </a>
                    <!--  -->
                    <a onclick="facilities()" id="facilities2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Facilities
                    </a>
                    <!--  -->
                    <a onclick="pricing()" id="pricing2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Pricing
                    </a>
                    <!--  -->
                    <a onclick="ownercp()" id="ownercp2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Owner/Contact Person
                    </a>
                    <!--  -->
                    <a onclick="images()" id="images2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Images
                    </a>
                    <!--  -->
                    <a onclick="website()" id="website2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Website
                    </a>
                    <!--  -->
                    <a onclick="legalDocument()" id="legalDocument2" class="cursor-pointer px-4 py-2 border-2 bg-gray-400 border-gray-700 hover:bg-bvr20 hover:border-bvr3">
                        Legal Document
                    </a>

                </div>
                <!-- General Info -->
                <div id="generalInfo" class="bg-gray-200 px-10 pb-7 hidden">&nbsp;
                    <div class="grid grid-cols-2 gap-x-12 gap-y-5">
                        <div class="col-span-2">
                            <label class="font-semibold">Detail Description</label>
                            <textarea type="message" rows="14" class="w-full mt-1 py-2 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md"></textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold">Location</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Property Address</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Google Maps Coordinate</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="propertytype">Property Type</label>
                            <select name="propertytype" id="propertytype" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                                <option value="land">Land</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="ownership">Ownership (Property Status)</label>
                            <select name="ownership" id="ownership" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                                <option value="freehold">Freehold</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Listing Status</label>
                            <div class="flex mt-1 py-1">
                                <!-- Exclusive -->
                                <div class="flex-1">
                                    <input type="radio" id="exclusive" name="listingstatus" class="form-radio text-bvr20">
                                    <label for="exclusive">Exclusive</label>
                                </div>
                                <!-- Open -->
                                <div class="flex-1">
                                    <input type="radio" id="open" name="listingstatus" class="form-radio text-bvr20">
                                    <label for="open">Open</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">All Copies of Legal Documents Received?</label>
                            <div class="flex mt-1 py-1">
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="legaldoc" class="form-radio text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="legaldoc" class="form-radio text-bvr20">
                                    <label for="no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="font-semibold">Land Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Building Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of floors</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Year Built</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of Bedroom</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of Bathroom</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of AC</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="furnishing">Furnishing</label>
                            <select name="furnishing" id="furnishing" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                                <option value="unfurnished">Unfurnished</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="road">Road Access</label>
                            <select name="road" id="road" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                                <option value="raw">Raw</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold">Road Width (Meter)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Parking</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="parking" class="form-radio text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="parking" class="form-radio text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Garden</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="garden" class="form-radio text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="garden" class="form-radio text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Does Property Have Pondok Wisata?</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="pondok" class="form-radio text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="pondok" class="form-radio text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Property currently managed for rental?</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="proprental" class="form-radio text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="proprental" class="form-radio text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facilities -->
                <div id="facilities" class="bg-gray-200 px-10 pb-7">&nbsp;
                    <p class="text-lg font-semibold">Facilities</p>
                    <div class="mt-2 bg-white rounded-md px-4 py-4">
                        <div class="flex">
                            <p class="font-semibold">Select : &nbsp;</p>
                            <p class="font-semibold text-bvr20">All</p>
                            <p>&nbsp; , &nbsp;</p>
                            <p class="font-semibold text-bvr20">None</p>
                        </div>
                        <div class="grid grid-cols-3 gap-x-6  gap-y-2 mt-2">
                            <div class="">
                                <input type="checkbox" id="airconditioner" name="airconditioner" value="airconditioner" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="airconditioner"> Air Conditioner</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="cabletv" name="cabletv" value="cabletv" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="cabletv">Cable Tv</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="diningarea" name="diningarea" value="diningarea" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="diningarea">Dining Area</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="electricity" name="electricity" value="electricity" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="electricity">Electricity</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="garage" name="garage" value="garage" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="garage">Garage</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="gazebo" name="gazebo" value="gazebo" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="gazebo">Gazebo</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="gym" name="gym" value="gym" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="gym">Gym</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="heating" name="heating" value="heating" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="heating">Heating</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="hottub" name="hottub" value="hottub" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="hottub"> Hot Tub</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="internet" name="internet" value="internet" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="internet">Internet</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="kitchen" name="kitchen" value="kitchen" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="kitchen">Kitchen</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="level" name="level" value="level" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="level"> Level</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="maidroom" name="maidroom" value="maidroom" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="maidroom">Maid Room</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="pool" name="pool" value="pool" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="pool">Pool</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="airconditioner" name="airconditioner" value="airconditioner" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="airconditioner"> Air Conditioner</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="cabletv" name="cabletv" value="cabletv" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="cabletv">Cable Tv</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="diningarea" name="diningarea" value="diningarea" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="diningarea">Dining Area</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="airconditioner" name="airconditioner" value="airconditioner" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="airconditioner"> Air Conditioner</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="cabletv" name="cabletv" value="cabletv" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="cabletv">Cable Tv</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="diningarea" name="diningarea" value="diningarea" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="diningarea">Dining Area</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800">Cancel</button>
                </div>
            </main>
        </form>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>
        function generalInfo() {
            // show/hide
            var a = document.getElementById("generalInfo");
            var b = document.getElementById("facilities","pricing");
            a.style.display = "block";
            b.style.display = "none";
            // color
            // var c = document.getElementById("generalInfo2");
            // c.style.backgroundColor = "#EF3700";
            // var d = document.getElementById("facilities2","pricing2");
            // d.style.backgroundColor = "#FFFFFF";
        }

        function facilities() {
            var a = document.getElementById("facilities");
            var b = document.getElementById("generalInfo");
            a.style.display = "block";
            b.style.display = "none";
        }
    </script>
</body>

</html>