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
                            class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:focus:bg-gray-600 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5"
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


                <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs font-thin text-gray-500  bg-gray-50 dark:bg-gray-800 dark:text-gray-400 border-b dark:border-gray-600">
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
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                      <span class="text-md text-yellow-400">
                                        <i class="fa fa-lock"></i>
                                      </span>
                                    </th>
                                    <td class="px-6 py-4 text-nowrap">
                                        Apple MacBook Pro 17"
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="text-blue-500 text-md"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" fill="currentColor" class="text-blue dark:text-dark-blue h-5 w-5"><path d="M15.207 11.293a1 1 0 010 1.414l-3.5 3.5a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L11 14.086l2.793-2.793a1 1 0 011.414 0z"></path><path d="M4 5a3 3 0 013-3h7.039a3 3 0 012.342 1.126l2.962 3.701A3 3 0 0120 8.702V19a3 3 0 01-3 3H7a3 3 0 01-3-3V5zm3-1a1 1 0 00-1 1v14a1 1 0 001 1h10a1 1 0 001-1V9h-3a2 2 0 01-2-2V4H7zm8 .6V7h1.92L15 4.6z"></path></svg></a>
                                    </td>
                                    <td class="px-6 py-4">
                                       {{ rand(10,100) . '%' }}
                                    </td>
                                    <td class="px-6 py-4">
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
                    <x-filter-dropdown action="20/Page" >
                        <li>20 / Page</li>
                        <li>50 / Page</li>
                        <li>100 / Page</li>
                    </x-filter-dropdown>



                    <nav aria-label="Page navigation example">
                        <ul class="flex items-center gap-2 h-8 text-sm">
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Previous</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                              </svg>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                          </li>
                          <li>
                            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                          </li>
                          <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                              <span class="sr-only">Next</span>
                              <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                              </svg>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>

            </div>

        </div>

        <div class="space-y-4">


            <div class="dark:bg-gray-700 rounded-md px-4 py-2 shadow-md">
                
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-md text-semibold text-gray-600 dark:text-gray-300">Tranding Companies</h4>
                    <div class="flex gap-2 text-gray-600 dark:text-gray-300">
                        <span class="size-8 flex items-center justify-center rounded-md shadow-sm bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 cursor-pointer"><i class="fa fa-angle-left"></i></span>
                        <span class="size-8 flex items-center justify-center rounded-md shadow-sm bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 cursor-pointer"><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>


                <div class="relative w-full flex items-center mb-4">
                    <input type="text"
                        class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-600 dark:text-gray-300 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5"
                        placeholder="Search for a company">
                    <span class="absolute left-4 text-gray-400 dark:text-gray-500 ">
                        <i class="fa fa-search"></i>
                    </span>
                </div>



                <div class="flex flex-wrap gap-2">
                    <div class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                        <span class="dark:text-gray-300">Google</span>
                        <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                    </div>

                    <div class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                        <span class="dark:text-gray-300">IBM</span>
                        <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                    </div>

                    <div class="text-nowrap text-xs space-x-3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-600 dark:hover:bg-gray-500 px-2 py-1 rounded-lg cursor-pointer">
                        <span class="dark:text-gray-300">Meta</span>
                        <span class="text-xs font-medium px-2 bg-yellow-400 text-gray-800 rounded-full">50</span>
                    </div>

                    
                </div>


            </div>
        </div>

    </div>
</x-app-layout>
