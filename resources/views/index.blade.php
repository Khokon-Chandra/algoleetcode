<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        <div class="sm:col-span-3 space-y-6">
            {{-- courses --}}
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 sm:col-span-3">

                <a href="#">
                    <img class="rounded-lg" src="{{ Vite::asset('resources/images/course/1.jpeg') }}" alt="">
                </a>

                <a href="#">
                    <img class="rounded-lg" src="{{ Vite::asset('resources/images/course/2.png') }}" alt="">
                </a>

                <a href="#">
                    <img class="rounded-lg" src="{{ Vite::asset('resources/images/course/3.png') }}" alt="">
                </a>


            </div>

            {{-- Study plan --}}

            <div class="space-y-3">

                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-300">Study Plan</h1>
                    <a href="#" class="text-blue-700 text-md">See All</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">

                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/top-interview.png')" :title="'Top interview 150'" :description="'Must do this list for interview'" />
                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/leetcode-75.png')" :title="'Leetcode 75'" :description="'Must do this list for interview'" />
                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/sql-50.png')" :title="'SQL 50'" :description="'Must do this list for interview'" />
                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/pandas.png')" :title="'Introduction to Pandas'" :description="'Must do this list for interview'" />
                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/javascript.png')" :title="'30 Days of Javascript'" :description="'Must do this list for interview'" />
                    <x-card-study-plan :img="Vite::asset('resources/images/study-plan/amazon.png')" :title="'Amazon Spring 23\' High Freequency'" :description="'Must do this list for interview'" />
                </div>
            </div>


            {{-- Tag --}}

            <div class="flex flex-wrap gap-4">
                <x-tag :count="234" :slug="''">Array</x-tag>
                <x-tag :count="234" :slug="''">String</x-tag>
                <x-tag :count="234" :slug="''">Database </x-tag>
                <x-tag :count="234" :slug="''">Hash Table</x-tag>
                <x-tag :count="234" :slug="''">Pointer</x-tag>

            </div>

            {{-- Topics --}}

            <div class="flex gap-4 overflow-x-hidden">

                <x-topic
                    class="bg-gray-900 text-gray-100 hover:bg-gray-900 dark:bg-gray-300 dark:text-gray-900 dark:hover:bg-gray-200">All
                    Topics</x-topic>

                <x-topic :icon="'fa fa-terminal'">Algorithm</x-topic>

                <x-topic :icon="'fa fa-database'">Database</x-topic>


            </div>

            {{-- Filter bar --}}

            <div class="flex flex-col gap-4">
                <div class="flex w-full flex-wrap gap-2">

                    <x-filter-dropdown action="Lists">

                        <li>
                            <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <div class="flex items-center h-5">
                                    <input id="helper-checkbox-1" aria-describedby="helper-checkbox-text-1"
                                        type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                </div>
                                <div class="ms-2 text-sm">
                                    <label for="helper-checkbox-1" class="font-medium text-gray-700 dark:text-gray-300">
                                        <div>Enable notifications</div>

                                    </label>
                                </div>
                            </div>
                        </li>


                    </x-filter-dropdown>

                    <x-filter-dropdown action="Difficulty">

                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-1" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-1"
                                    class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Easy</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input checked id="checkbox-item-2" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-2"
                                    class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Medium</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <input id="checkbox-item-3" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-3"
                                    class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Hard</label>
                            </div>
                        </li>

                    </x-filter-dropdown>

                    <x-filter-dropdown action="Status">
                        <li>Todo</li>
                        <li>Solved</li>
                        <li>Attempted</li>
                    </x-filter-dropdown>


                    <x-filter-dropdown action="Tags 2">

                    </x-filter-dropdown>


                    <div class="relative w-min[250px] flex items-center">
                        <input type="text"
                            class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-700 dark:focus:bg-gray-600 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5"
                            placeholder="Search Questions">
                        <span class="absolute left-4 text-gray-400 dark:text-gray-500 ">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>


                    <div class="">

                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                            class="inline-flex items-center text-md  font-medium text-center text-gray-900 bg-gray-100 hover:bg-gray-200 p-3 rounded-lg focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <i class="fa fa-gear"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDots"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconButton">

                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>

                        </div>


                    </div>

                </div>

                <div class="flex flex-wrap gap-2">
                    <div
                        class="flex gap-4 justify-between items-center bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded-lg text-gray-500 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300">
                        <span class="text-sm">Hard problem</span>
                        <span
                            class="cursor-pointer text-sm rounded-full px-1 py-0 bg-gray-300 text-gray-50 dark:bg-gray-600 dark:text-gray-800">
                            <i class="fa fa-close"></i>
                        </span>
                    </div>

                    <div
                        class="flex gap-4 justify-between items-center bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded-lg text-gray-500 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-300">
                        <span class="text-sm">Hard problem</span>
                        <span
                            class="cursor-pointer text-sm rounded-full px-1 py-0 bg-gray-300 text-gray-50 dark:bg-gray-600 dark:text-gray-800">
                            <i class="fa fa-close"></i>
                        </span>
                    </div>

                </div>
            </div>



            {{-- Table List --}}

            <div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Google Pixel Phone
                                </th>
                                <td class="px-6 py-4">
                                    Gray
                                </td>
                                <td class="px-6 py-4">
                                    Phone
                                </td>
                                <td class="px-6 py-4">
                                    $799
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple Watch 5
                                </th>
                                <td class="px-6 py-4">
                                    Red
                                </td>
                                <td class="px-6 py-4">
                                    Wearables
                                </td>
                                <td class="px-6 py-4">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

        <div class="bg-blue-200 dark:bg-gray-700">
            section
        </div>

    </div>
</x-app-layout>
