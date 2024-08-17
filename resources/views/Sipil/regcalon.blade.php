<x-app-layout>
    <main>
        <div class="content" style="width: 1100px; height: 1200px;">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                           <center>Daftar Calon</center>
                        </h2>
                    <form action="reg" method="post">
                        @csrf
                        <div class="intro-x mt-8" style="width: 900px;">

                            <input class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="{{ Auth::user()->name }}">
                            <input name="visi" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Visi">
                            <input name="misi" type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Misi">
                            <select name="category" id="" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4">
                                @foreach ($calon as $item)
                                <option value="{{ $item->id }}" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4">{{ $item->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>

                    </form>
                    </div>
                </div>
                <!-- END: Register Form -->
            </div>
        </div>
    </main>
</x-app-layout>
