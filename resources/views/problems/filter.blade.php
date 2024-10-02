<div class="flex flex-col gap-4">
    <div class="flex w-full flex-wrap gap-2">

        <x-filter-dropdown action="Lists">

            <li>
                <div class="flex p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                    <div class="flex items-center h-5">
                        <input id="helper-checkbox-1" aria-describedby="helper-checkbox-text-1" type="checkbox"
                            value=""
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

            <div class="space-y-2">
                <label class="flex items-center space-x-2">
                    <input type="checkbox"
                        class="single-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        value="easy">
                    <span>Easy</span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="checkbox"
                        class="single-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        value="medium">
                    <span>Medium</span>
                </label>

                <label class="flex items-center space-x-2">
                    <input type="checkbox"
                        class="single-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                        value="hard">
                    <span>Hard</span>
                </label>
            </div>

        </x-filter-dropdown>

        <x-filter-dropdown action="Status">
            <li>
                <div class="flex items-center">
                    <input id="checkbox-todo" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-todo"
                        class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Todo</label>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <input id="checkbox-solved" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-solved"
                        class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Solved</label>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <input id="checkbox-attempted" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="checkbox-attempted"
                        class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Attempted</label>
                </div>
            </li>
        </x-filter-dropdown>


        <x-filter-dropdown action="Tags 2">
            <div class="w-[300px] space-y-4">

                <div class="relative w-min[250px] flex items-center">
                    <input type="text"
                        class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-600 dark:text-gray-300 dark:focus:bg-gray-500 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5 placeholder:text-gray-400 placeholder:text-sm placeholder:font-thin"
                        placeholder="filter topics">
                    <span class="absolute left-4 text-gray-400 dark:text-gray-300 ">
                        <i class="fa fa-search"></i>
                    </span>
                </div>


                <div class="flex flex-wrap gap-2">
                    <a href="#" class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Array</a>
                    <a href="#" class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">String</a>
                    <a href="#" class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Hash Table</a>
                    <a href="#" class="cursor-pointer text-xs font-thin text-gray-600 bg-gray-200 dark:text-gray-200 dark:bg-gray-600 px-2 py-1 rounded-lg">Database</a>
                </div>

            </div>
        </x-filter-dropdown>


        <div class="relative w-min[250px] flex items-center">
            <input type="text"
                class="appearance-none relative border-none rounded-md bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:focus:bg-gray-600 focus:bg-gray-200 focus:outline-none w-full h-auto pl-9 py-1.5 placeholder:text-gray-400 placeholder:text-sm placeholder:font-thin"
                placeholder="Search Questions">
            <span class="absolute left-4 text-gray-400 dark:text-gray-500 ">
                <i class="fa fa-search"></i>
            </span>
        </div>


        <div class="">

            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center text-md  font-medium text-center text-gray-900 bg-gray-100 hover:bg-gray-200 p-3 rounded-lg focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50  dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                type="button">
                <i class="fa fa-gear"></i>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">

                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show
                            topic tags</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Premium
                            questions</a>
                    </li>
                </ul>

            </div>


        </div>

        <div class="flex gap-4">
            <div class="px-3 py-1 self-center rounded-full bg-green-600 text-gray-200 text-xl"><i
                    class="fa fa-close"></i></div>

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
