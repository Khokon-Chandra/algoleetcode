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

                <div
                    class="cursor-pointer flex items-center gap-3 bg-gray-700 hover:bg-gray-800 rounded-full px-3 py-2 text-gray-200 dark:hover:bg-gray-200 dark:bg-gray-300  dark:text-gray-900">
                    <div class="">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h6 class="text-nowrap">All Topics</h6>
                </div>

                <x-topic :icon="'fa fa-terminal'">Algorithm</x-topic>

                <x-topic :icon="'fa fa-database'">Database</x-topic>


            </div>

            {{-- Filter bar --}}

            @include('problems.filter')



            {{-- Table List --}}

            <div>
                <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs font-thin text-gray-500  bg-gray-50 dark:bg-gray-800 dark:text-gray-400 border-b dark:border-gray-600">
                            <tr>
                                <th scope="col" class=" px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Solution
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acceptance
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Difficulty
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Freequency
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-800 even:bg-gray-50 even:dark:bg-gray-700 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-md text-yellow-400">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </th>
                                    <td class="px-6 py-3 text-nowrap">
                                        Apple MacBook Pro 17"
                                    </td>
                                    <td class="px-6 py-3">
                                        <a href="#" class="text-blue-500 text-md"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"
                                                height="1em" fill="currentColor"
                                                class="text-blue dark:text-dark-blue h-5 w-5">
                                                <path
                                                    d="M15.207 11.293a1 1 0 010 1.414l-3.5 3.5a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L11 14.086l2.793-2.793a1 1 0 011.414 0z">
                                                </path>
                                                <path
                                                    d="M4 5a3 3 0 013-3h7.039a3 3 0 012.342 1.126l2.962 3.701A3 3 0 0120 8.702V19a3 3 0 01-3 3H7a3 3 0 01-3-3V5zm3-1a1 1 0 00-1 1v14a1 1 0 001 1h10a1 1 0 001-1V9h-3a2 2 0 01-2-2V4H7zm8 .6V7h1.92L15 4.6z">
                                                </path>
                                            </svg></a>
                                    </td>
                                    <td class="px-6 py-3">
                                        {{ rand(10, 100) . '%' }}
                                    </td>
                                    <td class="px-6 py-3">
                                        <span class="text-green-500">Easy</span>
                                    </td>
                                    <td>
                                        freequency
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-between items-center mt-3">
                    <x-filter-dropdown action="20/Page">
                        <li>20 / Page</li>
                        <li>50 / Page</li>
                        <li>100 / Page</li>
                    </x-filter-dropdown>



                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center gap-2 h-8 text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>





       @include('problems.sidebar')

    </div>
</x-app-layout>
