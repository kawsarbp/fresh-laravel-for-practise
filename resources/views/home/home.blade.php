@extends('inc.layouts')
@section('content')
    {{--navigation bar start--}}
    <header class="bg-stone-50 top-0 fixed w-full z-[1000]">
        <nav class="md:p-4 w-11/12 mx-auto bg-stone-50 font-[Roboto] md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <span class="text-xl cursor-pointer font-[500]">Sark</span>
                <div class="md:hidden block">
                    <ul class="flex items-center gap-x-6">
                        <li class="my-5 md:my-0"><a href="">Login</a></li>
                        <li class="my-5 md:my-0">
                            <button type="button" class="bg-blue-700 px-4 py-2 rounded text-white">Get Started Free
                            </button>
                        </li>

                        <span class="text-3xl cursor-pointer md:hidden">
                            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                        </span>
                    </ul>
                </div>
            </div>

            <ul class="navRes md:flex md:items-center gap-x-8 z-50  md:z-auto md:static absolute bg-stone-100 md:bg-stone-50 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 opacity-0 md:opacity-100 top-[-400px]">
                <li class="my-5 md:my-0"><a href="">Demos</a></li>
                <li class="my-5 md:my-0"><a href="">About</a></li>
                <li class="my-5 md:my-0"><a href="">Blog</a></li>
                <li class="my-5 md:my-0"><a href="">Pages</a></li>
                <li class="my-5 md:my-0"><a href="">Contact</a></li>
            </ul>

            <div class="hidden md:block">
                <ul class="md:flex md:items-center gap-x-8">
                    <li class="my-5 md:my-0"><a href="">Login</a></li>
                    <li class="my-5 md:my-0">
                        <button type="button" class="bg-blue-700 px-4 py-2 rounded text-white">Get Started Free</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {{--navigation bar end--}}

    {{--header area start--}}
    <div class="bg-stone-50 pt-28 lg:pt-12 font-[Roboto] ">
        <div class="lg:relative w-11/12 mx-auto space-y-8 md:space-y-0 grid lg:grid-cols-2 grid-cols-1">
            <div class="mt-0 md:mt-12 w-full text-center md:w-auto md:text-start">
                <div class="space-y-6">
                    <h1 class=" text-3xl lg:text-5xl font-[500] lg:leading-tight">
                        Start chatting with customers, anywhere anytime with Sark
                    </h1>
                    <div class="text-stone-600 leading-relaxed">
                        Great Software that allows you to chat from any place at any <br> time any interrupion.
                    </div>
                    <div>
                        <button class="bg-blue-700 text-white px-4 py-2 rounded">Start Chatting Now &nbsp &nbsp<span><i
                                    class="fa-solid fa-arrow-right"></i></span></button>
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-3 xl:py-14 py-6 items-center xl:space-y-0 space-y-8">
                    <div class="">
                        <div class="flex justify-center xl:justify-start -space-x-2 overflow-hidden md:mr-8">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt=""/>
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt=""/>
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                 alt=""/>
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="col-span-2 flex items-center justify-center xl:justify-start">
                        <div class="md:mr-8 mr-2">
                            <div class="text-2xl font-[700]">2,291</div>
                            <div class="text-stone-500">happy customers</div>
                        </div>
                        <div>
                            <div class="text-2xl font-[700]">4.8/5</div>
                            <div>
                                <span class="text-yellow-400"><i class="fa-solid fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fa-solid fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fa-solid fa-star"></i></span>
                                <span class="text-yellow-400"><i class="fa-solid fa-star"></i></span>
                                <span class="text-stone-400"><i class="fa-solid fa-star"></i></span>
                                <span class="text-stone-500">Rating</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="py-8 lg:py-0 relative ">
                <div class="lg:absolute bottom-0 top-12">
                    <img class="w-full h-full rounded" src="{{ asset('assets/img/chat-1.jpg') }}" alt="">
                </div>


                <div class="absolute right-5 top-16 lg:right-10 lg:top-36">
                    <div class="flex bg-white p-3 rounded items-center">
                        <div class="mr-2">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt=""/>
                        </div>
                        <div>
                            <div class="font-[500]">User Name</div>
                            <p class="text-sm text-stone-500">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>

                <div class="absolute left-5 bottom-16 lg:left-10 lg:bottom-36">
                    <div class="flex bg-white p-3 rounded items-center">
                        <div class="mr-2">
                            <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                 src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt=""/>
                        </div>
                        <div>
                            <div class="font-[500]">User Name</div>
                            <p class="text-sm text-stone-500">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--header area end--}}

    {{--feature area start--}}
    <div class="bg-white space-y-16 my-16 font-[Roboto]">
        <div class="text-center text-4xl font-[500]">Feature for a batter experience</div>
        <div class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="text-center">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <span class="text-rose-500 bg-rose-200 p-4 rounded-full"><i
                                    class="fa-solid fa-video"></i></span>
                        </div>
                        <div class="space-y-2">
                            <div class="font-[500] text-lg">Video Messaging</div>
                            <div class="text-sm text-stone-500">this software is very easy for you to message. you can
                                use it as you wish
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <span class="text-blue-500 bg-blue-200 p-4 rounded-full"><i
                                    class="fa-solid fa-wifi"></i></span>
                        </div>
                        <div class="space-y-2">
                            <div class="font-[500] text-lg">Keep safe & Private</div>
                            <div class="text-sm text-stone-500">this software is very easy for you to message. you can
                                use it as you wish
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <span class="text-green-500 bg-green-200 p-4 rounded-full"><i class="fa-solid fa-clock"></i></span>
                        </div>
                        <div class="space-y-2">
                            <div class="font-[500] text-lg">Save your time</div>
                            <div class="text-sm text-stone-500">this software is very easy for you to message. you can
                                use it as you wish
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--feature area start--}}

    {{--video camera feature start--}}
    <div class="bg-stone-50 py-20 font-[Roboto]">
        <div class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <img class="w-full h-auto rounded aspect-video" src="{{ asset('assets/img/video-call.jpg') }}"
                         alt="">
                </div>
                <div class="space-y-8 text-center md:text-start">
                    <div class="text-3xl font-[500]">Meet your customers,br with live <br> video chat</div>
                    <div class="font-[500]">Peoin fatucibus nibh et sagttis a. Lacina purus ac <br> amen pellentesque
                        aliquam enim.
                    </div>
                    <div class="text-sm text-stone-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                        fugit optio pariatur placeat praesentium quod sapiente tempora vitae? Asperiores beatae dicta
                        esse iure non, sed.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--video camera feature end--}}

    {{--chat conversation feature start--}}
    <div class="bg-white py-20 font-[Roboto]">
        <div class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div class="space-y-10 text-center md:text-start">
                    <div class="text-3xl font-[500]">Start selling directly inside <br> conversations</div>
                    <div class="text-sm text-stone-500">
                        consectetur adipisicing elit. Aperiam beatae, consequuntur culpa deserunt eos,
                        facearea ipsum laborum magni molestiae non nulla obcaecati odio
                        perferendis, reiciendis repellat repudiandae saepe sunt suscipit temporibus veniam! Officiis,
                        quaerat sunt.
                    </div>
                    <div>
                        <button class="bg-blue-700 text-white px-4 py-2 rounded">Start Chatting Now</button>
                    </div>
                </div>
                <div>
                    <img class="w-full h-full rounded " src="{{ asset('assets/img/chat-inbox.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{--chat conversation feature end--}}

    {{--customer order feature start--}}
    <div class="bg-stone-50 py-20 font-[Roboto]">
        <div class="w-11/12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <img class="w-full h-full rounded " src="{{ asset('assets/img/customer-order.jpg') }}" alt="">
                </div>
                <div class="space-y-10 text-center md:text-start">
                    <div class="text-3xl font-[500]">Get direct orders from <br> your customers</div>
                    <div class="text-sm text-stone-500">
                        create custom landing page with rareblocks that converts <br>
                        more visitors than any website. with lots of unique books easily build a page. <br> there are
                        many variations of passages of available.
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center justify-center lg:justify-start">
                            <div class="mr-4 font-[700] text-4xl">4.3k+</div>
                            <div class="font-[500]">Website`s <br> powering</div>
                        </div>
                        <div class="flex items-center justify-center lg:justify-start">
                            <div class="mr-4 font-[700] text-4xl">7M+</div>
                            <div class="font-[500]">Chats in <br> last 2022</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--customer order feature end--}}


    {{--customer saying feature start--}}
    <div class="bg-blue-500 py-20 font-[Roboto]">
        <div class="w-9/12 mx-auto">
            <div class="text-white text-center font-[500] text-4xl pb-14">What your customers are saying</div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <div class="space-y-8 mb-8 md:mb-0 text-center md:text-start">
                    <div class="text-white font-[500] text-md">
                        The best UI kit for developers. SO
                        easy to implement and publish
                    </div>
                    <div class="font-[300] text-white text-sm">
                        you made it so simple. my new site is so much faster and easier to work with than my old site. i
                        just choose the page, make the changes
                    </div>
                    <div>
                        <div class="flex items-center justify-center md:justify-start">
                            <div class="mr-6">
                                <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt=""/>
                            </div>
                            <div class="text-white">
                                <div class="font-[500]">Theresa Webb</div>
                                <div class="text-sm">Medical Assistant</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="text-white font-[500] text-md">
                        The best UI kit for developers. SO
                        easy to implement and publish
                    </div>
                    <div class="font-[300] text-white text-sm text-center md:text-start">
                        you made it so simple. my new site is so much faster and easier to work with than my old site. i
                        just choose the page, make the changes
                    </div>
                    <div>
                        <div class="flex items-center justify-center md:justify-start">
                            <div class="mr-6">
                                <img class="inline-block h-12 w-12 rounded-full ring-2 ring-white"
                                     src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                     alt=""/>
                            </div>
                            <div class="text-white">
                                <div class="font-[500]">Theresa Webb</div>
                                <div class="text-sm">Medical Assistant</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--customer saying feature end--}}

    {{--footer chatting feature start--}}
    <div class="bg-stone-50 py-20 font-[Roboto]">
        <div class="w-9/12 mx-auto">
            <div class="text-center font-[500] text-2xl md:text-4xl leading-snug">Ready to grow your business ? <br> Start with
                sark, Become Faster <br> Every Second
            </div>

            <div class="text-center mt-12">
                <button class="bg-blue-700 text-white px-4 py-2 rounded">Start Chatting Now</button>
            </div>
        </div>
    </div>
    {{--footer chatting feature end--}}

    <footer class="bg-stone-50 py-8 font-[Roboto]">
        <div class="w-11/12 mx-auto">
            <div class="flex sm:justify-between flex-col sm:flex-row items-center justify-center border-b-2 pb-2 space-y-2 sm:space-y-0">
                <div class="font-[500] text-xl">Sark</div>
                <div class="flex gap-5">
                    <div>About</div>
                    <div>Features</div>
                    <div>Works</div>
                    <div>Support</div>
                </div>
                <div class="flex gap-3">
                    <div><span class="text-stone-800"><i class="fa-brands fa-twitter"></i></span></div>
                    <div><span class="text-stone-800"><i class="fa-brands fa-facebook-f"></i></span></div>
                    <div><span class="text-stone-800"><i class="fa-brands fa-github"></i></span></div>
                    <div><span class="text-stone-800"><i class="fa-brands fa-instagram"></i></span></div>
                </div>
            </div>

            <div class="flex sm:justify-between flex-col sm:flex-row  items-center pt-4 space-y-2 sm:space-y-0">
                <div class="text-sm text-stone-600">&copy; Copyright 2023, All Rights Reserved</div>
                <div class="flex gap-5 text-sm text-stone-600">
                    <div>Privacy Policy</div>
                    <div>Terms & Conditions</div>
                </div>
            </div>
        </div>
    </footer>

@endsection

{{--<script>--}}
{{--    function Menu(e){--}}
{{--        let navRes = document.querySelector('.navRes')--}}
{{--        e.name === 'menu' ? (e.name = 'close',navRes.classList.add('top-[70px]'),navRes.classList.add('opacity-100')) : (e.name = 'menu',navRes.classList.remove('top-[70px]'),navRes.classList.remove('opacity-0'))--}}
{{--    }--}}
{{--</script>--}}
