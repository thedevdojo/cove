<ul class="inline-flex self-start inline w-auto px-3 py-2 mt-3 text-xs font-medium text-gray-600 bg-blue-100 rounded-full">
    <li class="mr-4 font-bold text-blue-600 uppercase">Categories:</li>
    <li class="@if(!isset($category)){{ 'text-zinc-800' }}@endif"><a href="{{ route('blog') }}">View All</a></li>
    <li class="mx-2">&middot;</li>
    @foreach(\Wave\Category::all() as $cat)
        <li class="@if(isset($category) && isset($category->slug) && ($category->slug == $cat->slug)){{ 'text-blue-700' }}@endif"><a href="{{ route('blog.category', ['category' => $cat]) }}">{{ $cat->name }}</a></li>
        @if(!$loop->last)
            <li class="mx-2">&middot;</li>
        @endif
    @endforeach
</ul>