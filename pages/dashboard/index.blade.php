<?php
    use function Laravel\Folio\{middleware, name};
    name('dashboard');
?>

<x-layouts.app>
    <div class="flex flex-col px-8 mx-auto max-w-7xl lg:flex-row xl:px-5">
        <div class="flex overflow-hidden flex-col flex-1 justify-start mb-5 bg-white rounded-xl border lg:mr-3 lg:mb-0 border-zinc-150">
            <div class="flex flex-wrap justify-between items-center p-6 bg-white border-b border-zinc-150 sm:flex-no-wrap">
                <div class="relative flex-1">
                    <h3 class="text-lg font-medium leading-6 text-zinc-700">Welcome to your Dashboard</h3>
                    <p class="text-sm leading-5 text-zinc-500 mt">Learn More Below</p>
                </div>
            </div>
            <div class="relative p-6 text-sm">
                <p class="leading-loose text-zinc-500">This is your application <a href="{{ route('dashboard') }}" class="text-blue-500 underline">dashboard</a>, you can customize this view inside of <code class="px-2 py-1 font-mono font-medium rounded-md text-zinc-600 bg-zinc-100">{{ theme_folder('/dashboard/index.blade.php') }}</code><br><br> (Themes are located inside the <code>resources/themes</code> folder)</p>
                <span class="inline-flex mt-5 rounded-md shadow-sm">
                    <a href="{{ url('docs') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 bg-white rounded-md border transition duration-150 ease-in-out text-zinc-700 border-zinc-300 hover:text-zinc-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-zinc-800 active:bg-zinc-50">
                        Read The Docs
                    </a>
                </span>
            </div>
        </div>
        <div class="flex overflow-hidden flex-col flex-1 justify-start bg-white rounded-xl border lg:ml-3 border-zinc-150">
            <div class="flex flex-wrap justify-between items-center p-6 bg-white border-b border-zinc-150 sm:flex-no-wrap">
                <div class="relative flex-1">
                    <h3 class="text-lg font-medium leading-6 text-zinc-700">Learn more about Wave</h3>
                    <p class="text-sm leading-5 text-zinc-500 mt">Are you more of a visual learner?</p>
                </div>
            </div>
            <div class="relative p-6 text-sm">
                <p class="leading-loose text-zinc-500">Make sure to head on over to the Wave Video Tutorials to learn more how to use and customize Wave.<br><br>Click on the button below to checkout the video tutorials.</p>
                <span class="inline-flex mt-5 rounded-md shadow-sm">
                    <a href="https://devdojo.com/course/wave" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 bg-white rounded-md border transition duration-150 ease-in-out text-zinc-700 border-zinc-300 hover:text-zinc-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-zinc-800 active:bg-zinc-50">
                        Watch The Videos
                    </a>
                </span>
            </div>
        </div>
    </div>
</x-layouts.app>
