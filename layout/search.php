<!-- Search -->
<!-- Form 1 -->
<!-- desktop -->
<div class="hidden lg:block">
    <div class="flex">
        <!-- Form Search -->
        <input class="border-2 border-gray-300 bg-white h-10 px-4 text-sm focus:outline-none w-full lg:w-5/12" type="search" name="search" placeholder="Search">
        <!-- Dropdown Region -->
        <select class="ml-5 px-4 border-gray-300 border-2">
            <option>Region</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown Property -->
        <select class="ml-5 px-4 border-gray-300 border-2">
            <option>Property Type</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown MinBedroom -->
        <select class="ml-5 px-4 border-gray-300 border-2">
            <option>Min Bedroom</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown Max Bed -->
        <select class="px-4 border-gray-300 border-2">
            <option>Max Bedroom</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
    </div>
    <!-- Form 2 -->
    <div class="flex mt-3 h-10">
        <!-- Dropdown MinPrice -->
        <select class="px-4 border-gray-300 border-2">
            <option>Min Price</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown MaxPrice -->
        <select class="px-4 border-gray-300 border-2">
            <option>Max Price</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown Are -->
        <select class="ml-5 px-4 border-gray-300 border-2">
            <option>Are</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <input type='text' placeholder="Min. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-2/12">
        <input type='text' placeholder="Max. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-2/12">
        <button class="ml-3 border-2  bg-bvr2 hover:bg-bvr3 text-white h-10 text-center text-base w-1/12">
            Search
        </button>
    </div>
</div>
<!-- mobile -->
<div class="lg:hidden">
    <!-- Form Search -->
    <input class="border-2 border-gray-300 bg-white h-10 px-4 text-sm focus:outline-none w-full lg:w-5/12" type="search" name="search" placeholder="Search">
    <div class="flex gap-x-4 mt-2">
        <!-- Dropdown Region -->
        <select class="px-4 w-5/12 border-gray-300 border-2">
            <option>Region</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown Property -->
        <select class="px-4 w-7/12 border-gray-300 border-2">
            <option>Property Type</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>

    </div>
    <div class="flex gap-x-4 mt-2">
        <!-- Dropdown MinBedroom -->
        <select class="px-4 w-6/12 border-gray-300 border-2">
            <option>Min Bedroom</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown Max Bed -->
        <select class="px-4 w-6/12 border-gray-300 border-2">
            <option>Max Bedroom</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
    </div>
    <div class="flex gap-x-4 mt-2">
        <!-- Dropdown MinPrice -->
        <select class="px-4 w-6/12 border-gray-300 border-2">
            <option>Min Price</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
        <!-- Dropdown MaxPrice -->
        <select class="px-4 w-6/12 border-gray-300 border-2">
            <option>Max Price</option>
            <option>Sample</option>
            <option>Sample</option>
        </select>
    </div>
    <select class="w-full mt-2 px-4 border-gray-300 border-2">
        <option>Are</option>
        <option>Sample</option>
        <option>Sample</option>
    </select>
    <div class="flex gap-x-4 mt-2">
        <input type='text' placeholder="Min. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-6/12">
        <input type='text' placeholder="Max. Area" class="border-2 border-gray-300 bg-white h-10 px-4 text-sm  w-6/12">
        </select>
    </div>
    <button class="border-2  mt-2 bg-bvr2 hover:bg-bvr3 text-white h-10 text-center text-base w-full">
        Search
    </button>
</div>