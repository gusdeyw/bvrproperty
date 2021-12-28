<?php include '../admin/layout/header.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<title>Lead Add</title>
</head>

<body class="bg-gray-100 font-sans flex text-black">
    <!-- Navbar & Sidebar -->
    <?php include '../admin/layout/navbar.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <form action="" method="POST" enctype="multipart/form-data">
            <main class="w-full flex-grow px-4 py-8 sm:p-8">
                <div class="flex w-full">
                    <p class="text-xl font-semibold text-gray-700 items-bottom my-auto">
                        Lead Add
                    </p>

                </div>
                <div class="bg-white rounded-t-lg mt-5 px-10 py-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-5">
                        <div class="">
                            <label class="font-semibold" for="leadtype">Lead Type</label>
                            <select name="leadtype" id="leadtype" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                <option value="buyer" class="rounded-t-md">Buyer</option>
                                <option value="seller" class="rounded-b-md">Seller</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="source">Source
                                <select name="leadtype" id="leadtype" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                    <option value="buyer" class="rounded-t-md">Walk in</option>
                                    <option value="seller" class="rounded-b-md">Direct Call</option>
                                    <option value="buyer" class="rounded-t-md">Rumah123</option>
                                    <option value="seller" class="rounded-b-md">DotProperty</option>
                                    <option value="buyer" class="rounded-t-md">Facebook</option>
                                    <option value="seller" class="rounded-b-md">Instagram</option>
                                    <option value="buyer" class="rounded-t-md">Live Chat</option>
                                    <option value="seller" class="rounded-b-md">Website</option>
                                </select>
                            </label>
                        </div>
                        <div class="">
                            <label class="font-semibold">Lead Name</label>
                            <input type="text" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="nationality">Nationality Type</label>
                            <select name="leadtype" id="nationality" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                <option value="local" class="rounded-t-md">Domestic / Local</option>
                                <option value="international" class="rounded-b-md">International</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold">Phone</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Email</label>
                            <input type="email" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Budget Minimum</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Budget Maximum</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold" for="propertytype">Property Type</label>
                            <select name="propertytype" id="propertytype" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200 js-example-basic-multiple" name="states[]" multiple="multiple">
                                <option value="land" class="rounded-t-md">Land</option>
                                <option value="house" class="rounded-b-md">House</option>
                                <option value="villa" class="rounded-t-md">Villa</option>
                                <option value="commercial" class="rounded-b-md">Commercial</option>
                                <option value="bussiness" class="rounded-t-md">Bussiness</option>
                                <option value="villacomplex" class="rounded-b-md">Villa Complex</option>
                                <option value="townhouse" class="rounded-t-md">Townhouse</option>
                                <option value="resort" class="rounded-b-md">Resort</option>
                                <option value="complex" class="rounded-b-md">Complex</option>
                                <option value="building" class="rounded-t-md">Building</option>
                                <option value="apartment" class="rounded-b-md">Apartment</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="ownership">Ownership</label>
                            <select name="ownership" id="ownership" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                <option value="freehold" class="rounded-t-md">Freehold</option>
                                <option value="leasehold" class="rounded-b-md">Leasehold</option>
                                <option value="rental" class="rounded-t-md">Rental</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="propertycode">Property Code</label>
                            <select name="propertycode" id="propertycode" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200 js-example-basic-multiple" name="states[]" multiple="multiple">
                                <option value="SERPLVLBLI003">SERPLVLBLI003</option>
                                <option value="KRRPFVLBLI005">KRRPFVLBLI005</option>
                                <option value="SEDWLVLBLI008">SEDWLVLBLI008</option>
                                <option value="KRRPLAPBLI009">KRRPLAPBLI009</option>
                                <option value="SEDWFLABLI010">SEDWFLABLI010</option>
                                <option value="SERNFVLBLI011">SERNFVLBLI011</option>
                                <option value="GANDLBUNTB012">GANDLBUNTB012</option>
                                <option value="CGDWLBUBLI013">CGDWLBUBLI013</option>
                                <option value="SESTLVLBLI015">SESTLVLBLI015</option>
                                <option value="BBSTLVLBLI016">BBSTLVLBLI016</option>
                                <option value="USDWFLABLI020">USDWFLABLI020</option>
                                <option value="TLDWLLABLI021">TLDWLLABLI021</option>
                                <option value="TLDWLLABLI022">TLDWLLABLI022</option>
                                <option value="KRDWFVLBLI023">KRDWFVLBLI023</option>
                                <option value="SEDWLVLBLI025">SEDWLVLBLI025</option>
                                <option value="TBLVLBLI026">TBLVLBLI026</option>
                                <option value="CGDWFVLBLI028">CGDWFVLBLI028</option>
                                <option value="TBDWFLABLI029">TBDWFLABLI029</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold">Number of Bedroom</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Land Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="">
                            <label class="font-semibold">Building Size (sqm)</label>
                            <input type="number" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 border-2 border-gray-200 focus:border-transparent rounded-md">
                        </div>
                        <div class="lg:col-span-2">
                            <label class="font-semibold">Remarks</label>
                            <textarea type="message" rows="7" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200"></textarea>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="ownership">Status</label>
                            <select name="ownership" id="ownership" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                <option value="new" class="rounded-t-md">New</option>
                                <option value="contacted" class="rounded-b-md">contacted</option>
                                <option value="opportunity" class="rounded-t-md">Opportunity</option>
                                <option value="deal" class="rounded-t-md">Deal</option>
                                <option value="closed" class="rounded-b-md">Closed</option>
                                <option value="dropped" class="rounded-t-md">Dropped</option>
                            </select>
                        </div>
                        <div class="">
                            <label class="font-semibold" for="qualify">Qualify by</label>
                            <select name="qualify" id="qualify" class="w-full mt-1 py-1 px-4 focus:outline-none focus:ring-2 focus:ring-bvr20 focus:border-transparent rounded-md border-2 border-gray-200">
                                <option value="chindy" class="rounded-t-md">Chindy Isabella</option>
                                <option value="adrien" class="rounded-b-md">Adrien Berteaux</option>
                                <option value="gede" class="rounded-t-md">Gede Indra</option>
                                <option value="george" class="rounded-b-md">George Tasidjawa</option>
                                <option value="evi" class="rounded-t-md">Evi Randa Susilo</option>
                                <option value="maxi" class="rounded-t-md">Maxi</option>
                                <option value="jermy" class="rounded-b-md">Jermy</option>
                                <option value="putu" class="rounded-t-md">Putu</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- Button -->
                <div class="flex">
                    <button type="submit" class="mt-6 rounded-md px-6 py-2 bg-bvr20 text-white">Save</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-500 text-white">Save and Close</button>
                    <button class="mt-6 ml-4 rounded-md px-6 py-2 bg-gray-300 text-gray-800"><a href="leads-list">Cancel</a></button>
                </div>
            </main>
        </form>

    </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- Multiple Select -->
    <script>
        $(document).ready(function() {
            $(".js-example-basic-multiple").select2();
        });
    </script>
</body>

</html>