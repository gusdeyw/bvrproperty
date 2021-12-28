<?php include '../admin/layout/header.php'; ?>
<title>Property Detail</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow px-4 py-8 sm:p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        Property Detail
                    </p>
                    
                </div>
                <div class="bg-white rounded-t-lg mt-5 px-10 py-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Ref ID</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                        </div>
                        <div class="">
                            <label class="font-semibold">Property Name</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Property Status</label>
                            <div class="flex mt-1 py-1">
                                <!-- Available -->
                                <div class="flex-1">
                                    <input type="radio" id="available" name="propertystatus" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="available">Available</label>
                                </div>
                                <!-- Sold -->
                                <div class="flex-1">
                                    <input type="radio" id="sold" name="propertystatus" class="form-radio text-bvr20 bg-gray-200">
                                    <label for="sold">Sold</label>
                                </div>
                                <!-- Rented -->
                                <div class="flex-1">
                                    <input type="radio" id="rented" name="propertystatus" class="form-radio text-bvr20 bg-gray-200">
                                    <label for="rented">Rented</label>
                                </div>
                            </div>
                            <label class="font-semibold mt-5">Publish Property</label>
                            <div class="flex mt-1 py-1">
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="publishproperty" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="publishproperty" class="form-radio text-bvr20 bg-gray-200">
                                    <label for="no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="font-semibold">Property Note</label>
                            <textarea type="message" rows="7" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200"></textarea>
                        </div>
                    </div>
                </div>
                <div class=" lg:flex w-full bg-gray-200">
                    <div class="bg-white flex lg:flex-1 text-gray-500">
                        <!--  -->
                        <a onclick="generalInfo()" id="generalInfo2" class="flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 font-bold border-bvr30 text-bvr20 border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            General Info
                        </a>
                        <!--  -->
                        <a onclick="facilities()" id="facilities2" class="flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Facilities
                        </a>
                        <!--  -->
                        <a onclick="pricing()" id="pricing2" class="flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Pricing
                        </a>

                    </div>
                    <div class="bg-white flex lg:flex-1 text-gray-500">
                        <!--  -->
                        <a onclick="ownercp()" id="ownercp2" class="flex-1 cursor-pointer px-3 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Owner/Contact Person
                        </a>
                        <!--  -->
                        <a onclick="imagesmenu()" id="imagesmenu2" class="flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Images
                        </a>
                    </div>
                    <div class="bg-white flex text-gray-500 lg:flex-1">
                        <!--  -->
                        <a onclick="website()" id="website2" class="w-max flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Website
                        </a>
                        <!--  -->
                        <a onclick="legalDocument()" id="legalDocument2" class="w-max flex-1 cursor-pointer px-4 py-2 border-t-2 border-l-2 border-r-2 bg-white border-gray-500  hover:text-bvr20 hover:border-bvr30 rounded-t-lg text-center">
                            Legal Document
                        </a>
                    </div>
                </div>
                <!-- General Info -->
                <div id="generalInfo" class="bg-white px-10 pb-7">&nbsp;
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="col-span-1 lg:col-span-2">
                            <label class="font-semibold">Detail Description</label>
                            <textarea type="message" rows="14" class="w-full mt-1 py-2 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent border-2 border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold">Location</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Property Address</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Google Maps Coordinate</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="propertytype">Property Type</label>
                            <select name="propertytype" id="propertytype" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                                <option value="land">Land</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="ownership">Ownership (Property Status)</label>
                            <select name="ownership" id="ownership" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
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
                                    <input type="radio" id="exclusive" name="listingstatus" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="exclusive">Exclusive</label>
                                </div>
                                <!-- Open -->
                                <div class="flex-1">
                                    <input type="radio" id="open" name="listingstatus" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="open">Open</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">All Copies of Legal Documents Received?</label>
                            <div class="flex mt-1 py-1">
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="legaldoc" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="legaldoc" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <label class="font-semibold">Land Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Building Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of floors</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Year Built</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of Bedroom</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of Bathroom</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of AC</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="furnishing">Furnishing</label>
                            <select name="furnishing" id="furnishing" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                                <option value="unfurnished">Unfurnished</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="road">Road Access</label>
                            <select name="road" id="road" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                                <option value="raw">Raw</option>
                                <option value="example2">Example 2</option>
                                <option value="example3">Example 3</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold">Road Width (Meter)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Parking</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="parking" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="parking" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Garden</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="garden" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="garden" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Does Property Have Pondok Wisata?</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="pondok" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="pondok" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold">Property currently managed for rental?</label>
                            <div class="flex mt-1 py-1">
                                <!-- No -->
                                <div class="flex-1">
                                    <input type="radio" id="no" name="proprental" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="no">No</label>
                                </div>
                                <!-- Yes -->
                                <div class="flex-1">
                                    <input type="radio" id="yes" name="proprental" class="form-radio bg-gray-200 text-bvr20">
                                    <label for="yes">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facilities -->
                <div id="facilities" class="bg-white px-10 pb-7 hidden">&nbsp;
                    <p class="text-lg font-semibold">Facilities</p>
                    <div class="mt-2 bg-white rounded-md px-4 py-4">
                        <div class="flex">
                            <p class="font-semibold">Select : &nbsp;</p>
                            <!-- <a class="font-semibold text-bvr20 cursor-pointer" onClick="toggle(this)">All</a> -->
                            <input type="checkbox" onClick="toggle(this)" id="checkall" class="hidden">
                            <label for="checkall" class="font-semibold text-bvr20 cursor-pointer">All </label>
                            <p>&nbsp; , &nbsp;</p>
                            <!-- <p class="font-semibold text-bvr20">None</p> -->
                            <input type="checkbox" onClick="toggle2(this)" id="checkall2" class="hidden">
                            <label for="checkall2" class="font-semibold text-bvr20 cursor-pointer">None </label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6  gap-y-2 mt-2">
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
                            <div class="">
                                <input type="checkbox" id="electricity" name="foo" value="electricity" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="electricity">Electricity</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="garage" name="foo" value="garage" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="garage">Garage</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="gazebo" name="foo" value="gazebo" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="gazebo">Gazebo</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="gym" name="foo" value="gym" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="gym">Gym</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="heating" name="foo" value="heating" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="heating">Heating</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="hottub" name="foo" value="hottub" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="hottub"> Hot Tub</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="internet" name="foo" value="internet" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="internet">Internet</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="kitchen" name="foo" value="kitchen" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="kitchen">Kitchen</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="level" name="foo" value="level" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="level"> Level</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="maidroom" name="foo" value="maidroom" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="maidroom">Maid Room</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="pool" name="foo" value="pool" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="pool">Pool</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="security" name="foo" value="security" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="security"> Security</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="storage" name="foo" value="storage" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="storage">Storage</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="suitable" name="foo" value="suitable" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="suitable">Suitable for Events</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="washer" name="foo" value="washer" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="washer"> Washer or Laundry</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="water" name="foo" value="water" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="water">Water Resources</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="wifi" name="foo" value="wifi" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="wifi">Wi-fi</label>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Pricing -->
                <div id="pricing" class="bg-white px-10 pb-7 hidden">&nbsp;
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Asking Price (IDR) (Include BVR commission fee)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">VR Commission Fee (%) </label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">If sold - What price did the property sell for? </label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                    </div>
                </div>
                <!-- Ownercp -->
                <div id="ownercp" class="bg-white px-10 pb-7 hidden">&nbsp;
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Owner/Contact Person Name</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Owner/Contact person email</label>
                            <input type="email" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Owner/Contact person phone number </label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Letter Send to Vendor</label>
                            <textarea type="message" rows="6" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Images -->
                <div id="imagesmenu" class="bg-white px-10 pb-7 pt-6 hidden">
                    <div class="">
                        <label class="font-semibold">Images Alt</label>
                        <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                    </div>
                    <div class="mt-4">
                        <label class="font-semibold">Property Images Upload</label>
                        <input type="file" multiple class="w-full mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        <p class="mt-4 font-semibold text-base">Current photo in database</p>
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-3 mt-2">
                            <div>
                                <img src="/public/images/search1.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Image-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/search1.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Image-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/search1.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Image-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/search1.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Image-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/search1.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Image-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Website -->
                <div id="website" class="bg-white px-10 pb-7 hidden">&nbsp;
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold">Website Headline</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="">
                            <label class="font-semibold">Permalink</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-300">
                        </div>
                        <div class="-mt-2">
                            <div>
                                <input type="checkbox" id="featured" name="featured" value="featured" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="featured"> Mark this property featured on the website</label>
                            </div>
                            <div class="mt-2">
                                <input type="checkbox" id="homepage" name="homepage" value="homepage" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                <label for="homepage"> Add this property in Homepage Slider</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- legaldoc -->
                <div id="legalDocument" class="bg-white px-10 pb-7 hidden">&nbsp;
                    <div class="">
                        <label class="font-semibold">Legal Document Upload (Images Only)</label>
                        <input type="file" multiple class="w-full mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        <p class="mt-4 font-semibold text-base">Current images in database</p>
                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-3 mt-2">
                            <div>
                                <img src="/public/images/legal.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Legal-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/legal.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Legal-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/legal.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Legal-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/legal.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Legal-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                            <div>
                                <img src="/public/images/legal.png" class="w-full h-36 object-cover">
                                <p class="px-4 pt-2 pb-1 bg-red-200 text-red-700 text-sm">Legal-929189389189</p>
                                <p class="px-4 pb-1 bg-red-200 text-black text-sm">357.98 kb</p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <label class="font-semibold">File Upload</label>
                            <input type="file" multiple class="w-full mt-1 py-1 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md">
                        </div>
                        <p class="mt-4 font-semibold">Please Check (Make Sure The Photos Already Attached)</p>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-5">
                            <div class="">
                                <p class="mt-4 font-semibold mb-3">Mandatory</p>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="leasehold" value="leasehold" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="leasehold"> Copy of Existing Lease Agreement - Leasehold and Commercial Only</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="certificate" value="certificate" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="certificate">Copy of Land Certificate</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="taxreceipt" value="taxreceipt" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="taxreceipt"> Copy of Last Annual Land Tax Receipt</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="ktpcard" value="ktpcard" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="ktpcard">Copy of Owner KTP Card</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="imb" value="imb" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="imb">Copy of IMB</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="landonly" value="landonly" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="landonly">Copy of ITR - For Land Only</label>
                                </div>
                            </div>
                            <div class="">
                                <p class="mt-4 font-semibold">Additional</p>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="mortgagetitle" value="mortgagetitle" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="mortgagetitle"> Copy of Mortgage Title Certificate</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="righttitle" value="righttitle" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="righttitle">Copy of Right of Use Title Certificate</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="construction" value="construction" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="construction">Copy of Payment Evidence of Construction Tax</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="arrangement" value="arrangement" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="arrangement">Copy of Existing Nominee Arrangement</label>
                                </div>
                                <div class="mt-1.5">
                                    <input type="checkbox" id="license" value="license" class="-mt-1 mr-1 form-checkbox border-2 border-bvr10 text-bvr20">
                                    <label for="license">Copy of Relevant Operating License</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="property-list">Cancel</a></button>
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
    <script>
        function generalInfo() {
            // show/hide
            var a = document.getElementById("generalInfo");
            a.style.display = "block";
            var b = document.getElementById("facilities");
            b.style.display = "none";
            var c = document.getElementById("pricing");
            c.style.display = "none";
            var d = document.getElementById("ownercp");
            d.style.display = "none";
            var e = document.getElementById("imagesmenu");
            e.style.display = "none";
            var f = document.getElementById("website");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("generalInfo2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("facilities2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("pricing2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("ownercp2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("imagesmenu2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("website2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function facilities() {
            var a = document.getElementById("facilities");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("pricing");
            c.style.display = "none";
            var d = document.getElementById("ownercp");
            d.style.display = "none";
            var e = document.getElementById("imagesmenu");
            e.style.display = "none";
            var f = document.getElementById("website");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("facilities2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("pricing2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("ownercp2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("imagesmenu2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("website2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function pricing() {
            var a = document.getElementById("pricing");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("facilities");
            c.style.display = "none";
            var d = document.getElementById("ownercp");
            d.style.display = "none";
            var e = document.getElementById("imagesmenu");
            e.style.display = "none";
            var f = document.getElementById("website");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("pricing2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("facilities2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("ownercp2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("imagesmenu2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("website2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function ownercp() {
            var a = document.getElementById("ownercp");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("facilities");
            c.style.display = "none";
            var d = document.getElementById("pricing");
            d.style.display = "none";
            var e = document.getElementById("imagesmenu");
            e.style.display = "none";
            var f = document.getElementById("website");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("ownercp2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("facilities2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("pricing2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("imagesmenu2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("website2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function imagesmenu() {
            var a = document.getElementById("imagesmenu");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("facilities");
            c.style.display = "none";
            var d = document.getElementById("pricing");
            d.style.display = "none";
            var e = document.getElementById("ownercp");
            e.style.display = "none";
            var f = document.getElementById("website");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("imagesmenu2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("facilities2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("pricing2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("ownercp2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("website2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function website() {
            var a = document.getElementById("website");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("facilities");
            c.style.display = "none";
            var d = document.getElementById("pricing");
            d.style.display = "none";
            var e = document.getElementById("ownercp");
            e.style.display = "none";
            var f = document.getElementById("imagesmenu");
            f.style.display = "none";
            var g = document.getElementById("legalDocument");
            g.style.display = "none";
            // color
            var h = document.getElementById("website2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("facilities2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("pricing2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("ownercp2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("imagesmenu2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("legalDocument2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }

        function legalDocument() {
            var a = document.getElementById("legalDocument");
            a.style.display = "block";
            var b = document.getElementById("generalInfo");
            b.style.display = "none";
            var c = document.getElementById("facilities");
            c.style.display = "none";
            var d = document.getElementById("pricing");
            d.style.display = "none";
            var e = document.getElementById("ownercp");
            e.style.display = "none";
            var f = document.getElementById("imagesmenu");
            f.style.display = "none";
            var g = document.getElementById("website");
            g.style.display = "none";
            // color
            var h = document.getElementById("legalDocument2");
            h.style.borderColor = "#EF3700";
            h.style.color = "#EF3700";
            h.style.fontWeight = "700";
            var i = document.getElementById("generalInfo2");
            i.style.borderColor = "#6B7280";
            i.style.color = "#6B7280";
            i.style.fontWeight = "400";
            var j = document.getElementById("facilities2");
            j.style.borderColor = "#6B7280";
            j.style.color = "#6B7280";
            j.style.fontWeight = "400";
            var k = document.getElementById("pricing2");
            k.style.borderColor = "#6B7280";
            k.style.color = "#6B7280";
            k.style.fontWeight = "400";
            var l = document.getElementById("ownercp2");
            l.style.borderColor = "#6B7280";
            l.style.color = "#6B7280";
            l.style.fontWeight = "400";
            var m = document.getElementById("imagesmenu2");
            m.style.borderColor = "#6B7280";
            m.style.color = "#6B7280";
            m.style.fontWeight = "400";
            var n = document.getElementById("website2");
            n.style.borderColor = "#6B7280";
            n.style.color = "#6B7280";
            n.style.fontWeight = "400";
        }
    </script>
    <!-- Select All in Facilities-->
    <script>
        // Select All
        function toggle(source) {
            checkboxes = document.getElementsByName('foo');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
        // None
        function toggle2(source) {
            checkboxes = document.getElementsByName('foo');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.unchecked;
            }
        }
    </script>
</body>

</html>