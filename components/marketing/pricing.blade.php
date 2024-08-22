
<section class="pt-10 max-w-7xl mx-auto">

    <x-marketing.heading
        title="Pricing Plans"
        description="Everything you need to help you succeed. Simple transparent pricing to fit businesses of any size."
        align="center"
    />

    <div x-data="{ on: false, billing: 'Monthly', basic: {'Monthly' : '19', 'Yearly' : '180'}, pro: {'Monthly' : '49', 'Yearly' : '450' },
            toggleRepositionMarker(toggleButton){
                this.$refs.marker.style.width=toggleButton.offsetWidth + 'px';
                this.$refs.marker.style.height=toggleButton.offsetHeight + 'px';
                this.$refs.marker.style.left=toggleButton.offsetLeft + 'px';
            }
         }" 
        x-init="
                setTimeout(function(){ 
                    toggleRepositionMarker($refs.monthly); 
                    $refs.marker.classList.remove('opacity-0');
                    setTimeout(function(){ 
                        $refs.marker.classList.add('duration-300', 'ease-out');
                    }, 10); 
                }, 1);
        "
        class="mx-auto my-12 w-full" x-cloak>

        <div class="flex relative justify-center items-center pb-5 -translate-y-2">
            <div class="inline-flex relative justify-center items-center p-1 mx-auto w-auto text-center rounded-full border-2 border-blue-600 -translate-y-3">
                <div x-ref="monthly" x-on:click="billing='Monthly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Monthly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 text-gray-900 rounded-full duration-300 ease-out cursor-pointer">
                    Monthly
                </div>
                <div x-ref="yearly" x-on:click="billing='Yearly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Yearly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 text-gray-900 rounded-full duration-300 ease-out cursor-pointer">
                    Yearly
                </div>
                <div x-ref="marker" class="absolute left-0 z-10 w-1/2 h-full opacity-0" x-cloak>
                    <div class="w-full h-full bg-blue-600 rounded-full shadow-sm"></div>
                </div>
            </div>  
        </div>

        <div class="flex flex-wrap space-x-5">

            @foreach(Wave\Plan::where('active', 1)->get() as $plan)
                @php $features = explode(',', $plan->features); @endphp
                <div class="flex-1 px-0 mx-auto mb-6 w-full max-w-md lg:mb-0 @if($plan->default) scale-105 @endif">
                    <div class="flex flex-col mb-10 h-full rounded-lg bg-white border-zinc-200 text-zinc-800 border shadow-xl sm:mb-0 relative">
                    
                        
                        <div class="px-10 pt-7">
                            <div class="inline-block absolute right-0 mr-6 transform">
                                <h2 class="relative z-20 w-full h-full px-2 py-1 text-xs font-bold leading-tight tracking-wide text-center uppercase bg-white border-2 @if($plan->default){{ 'border-blue-400 text-blue-500' }}@else{{ 'border-zinc-900 text-zinc-800' }}@endif rounded">{{ $plan->name }}</h2>
                            </div>
                        </div>


                        <div class="px-8 mt-5">
                            <span class="text-5xl font-bold font-mono">$<span x-text="billing == 'Monthly' ? '{{ $plan->monthly_price }}' : '{{ $plan->yearly_price }}'"></span></span>
                            <span class="text-xl font-bold text-gray-500"><span x-text="billing == 'Monthly' ? 'per month' : 'per year'"></span></span>
                        </div>

                        <div class="px-8 mt-3">
                            <p class="text-base leading-7 text-gray-500">{{ $plan->description }}</p>
                        </div>

                        <div class="p-8 mt-auto rounded-b-lg">
                            <ul class="flex flex-col">
                                @foreach($features as $feature)
                                    <li class="mt-1">
                                        <span class="flex items-center text-green-500">
                                            <svg class="mr-3 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                                            <span class="text-gray-700">
                                                {{ $feature }}
                                            </span>
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="rounded-b-lg overflow-hidden">
                            <x-button class="w-full" :color="($plan->default) ? 'info' : null" tag="a" size="lg" href="/settings/subscription">
                                Get Started
                            </x-button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <p class="my-8 w-full text-left text-zinc-500 sm:my-10 sm:text-center">All plans are fully configurable in the Admin Area.</p>

    
</section>
