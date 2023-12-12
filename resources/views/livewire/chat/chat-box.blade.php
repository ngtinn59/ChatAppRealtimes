<div>
    <div class="border-b flex flex-col overflow-y-scroll grow h-full">


    {{--Header--}}

    <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b " >

    <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">

        <a class="shrink-0 lg:hidden" href="#">


            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>


        </a>

            <div class="shrink-0">
                <x-avatar class="h-9 w-9 lg:w-11 lg:h-11"></x-avatar>
            </div>

            <h6 class="font-bold truncate">{{fake()->name()}}</h6>
        </div>
    </header>
    {{--body--}}

    <main class="flex flex-col gap-3 p-2.5 overflow-y-auto flex-grow overflow-scroll-contain overflow-x-hidden w-full my-auto">
        <div @class(['max-w[85%] md:max-w-[78%] flex w-auto gap-2 relative mt-2'])>

            <div @class(['shrink-0'])>

                <x-avatar />
            </div>

            <div  @class(['flex flex-wrap text-[15px]  rounded-xl p-2.5 flex flex-col text-black bg-[#f6f6f8fb]',
                                'rounded-bl-none border  border-gray-200/40 ' =>false,
                                 'rounded-br-none bg-blue-500/80 text-white'=> true
                                ])>

                        <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                            aaaaa
                        </p>
                <div class="ml-auto flex gap-2">
                    <p @class(['text-xs','text-gray-500' =>false,'text-white'=>true])>5:25 am</p>
                    <div>
                        {{--double stick--}}
                        <span @class('text-gray-500')>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                              <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                            </svg>
                        </span>
                        {{--single stick--}}
{{--
/
/
--}}

                    </div>
                </div>


            </div>
        </div>

    </main>
        {{--footer--}}

    <footer class="shirk-0 z-10 bg-white inset-x-0">
        <div class="p-2 border-t">
            <form>
                @csrf

                <input type="hidden" autocomplete="false" style="display:none">

                <div class="grid grid-cols-12">
                    <input type="text"
                           autocomplete="off"
                           autofocus placeholder="Write your message here"
                           maxlength="1700"
                           class="col-span-10 bg-gray-100 border-0 outline-0 focus:border-0 focus:ring-0  hover:ring-0 rounded-lg focus:outline-none">
                    <button class="col-span-2 bg-sky-300 border-0 outline-0 focus:border-0 focus:ring-0  hover:ring-0 rounded-lg focus:outline-none" type="submit">Send</button>
                </div>
            </form>

            @error('body')
                <p>{{$message}}</p>
            @enderror
        </div>
    </footer>
    </div>
</div>
