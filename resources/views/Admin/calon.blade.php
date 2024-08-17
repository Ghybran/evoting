<x-app-layout>
    <main>
        <div class="content" style="width: 1100px; height: 1200px;">
            <!-- BEGIN: Users Layout -->
            @foreach ($calon as $item)
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box w-200px h-100px">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            <div class="w-16 h-16 image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                            </div>
                            <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">{{ $item->name }}</a>
                                {{-- <div class="text-gray-600 text-xs mt-0.5">DevOps Engineer</div> --}}
                            </div>
                        </div>
                        <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center lg:text-left p-5">
                        <div>VISI: {{ $item->visi }}</div><br>
                        <div>MISI: {{ $item->misi }}</div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5"> <i data-feather="mail" class="w-3 h-3 mr-2"></i> robertdeniro@left4code.com </div>
                        <div>Calon: {{ $item->category }}</div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1"> <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Robert De Niro </div>
                    </div>

                    <form action="upd" method="post">
                        @csrf
                        <div class="text-center lg:text-right p-5 border-t border-gray-200 dark:border-dark-5">
                            <select name="status" class="btn btn-primary py-1 px-2 mr-2" >
                                @foreach ($status as $it)
                                <option value="{{ $it->id }}">{{ $it->status }}</option>

                                @endforeach
                            </select>
                            {{-- <select class="btn btn-primary py-1 px-2 mr-2">Message</button> --}}
                            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                            {{-- <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                                <input id="show-example-1" data-target="#basic-button" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div><br>
            @endforeach
        </div>
    <!-- END: Content -->
    </main>
</x-app-layout>
