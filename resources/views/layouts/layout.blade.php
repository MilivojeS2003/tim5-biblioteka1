<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="ICT Cortex Library - project for high school students..." />
    <meta name="keywords" content="ict cortex, cortex, bild, bildstudio, highschool, students, coding" />
    <meta name="author" content="bildstudio" />
    <!-- End Meta -->

    <!-- Title -->
    <title>Edit book bind | Specification | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="/img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- End Title -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />    <!-- End Styles -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />    <!-- End Styles -->
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    <header
    class="z-20 small:hidden  flex items-center text-white justify-between w-full h-[71px] pr-[30px] mx-auto bg-[#4558BE]">
    <!-- logo -->
    <div class="logo-font inline-flex bg-[#3F51B5] py-[18px] px-[30px]">
        <a class="_o6689fn" href="{{route('dashboard')}}">
            <div class="block">
                <a href="{{route('dashboard')}}" class="text-[20px] font-medium">
                    <div class="flex">
                        <img src='/img/logo.svg' alt="" width="35px" height="35px">
                        <p class="text-[20px] mt-[5px]">&nbsp;&nbsp;Online Biblioteka</p>
                    </div>

                </a>
            </div>
        </a>
    </div>
    <!-- end logo -->

    <!-- login -->
    <div class="flex-initial">
        <div class="relative flex items-center justify-end">
            <div class="flex items-center">
                <!-- Notification Icon -->
                <div class="relative block">
                    <a href="{{route('dashboard')}}" class="relative inline-block px-3 py-2 focus:outline-none"
                        aria-label="Notification">
                        <div class="flex items-center h-5">
                            <div class="_xpkakx">
                                <span
                                    class="transition duration-300 ease-in bg-[#606FC7] text-[25px] rounded-full px-[11px] py-[7px] ">
                                    <i class="far fa-bell"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Add Icon -->
                <a class="inline-block border-l-[1px] border-gray-300 px-3" href="#" aria-label="Add something" id="dropdownCreate">
                    <span
                        class="transition duration-300 ease-in bg-[#606FC7] text-[25px] rounded-full px-[11px] py-[7px]  ">
                        <i class="fas fa-plus"></i>
                    </span>
                </a>

                <div
                    class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-create">
                    <div class="absolute right-[12px] w-56 mt-[35px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                        aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            <a href="{{route('bibliotekar.index')}}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="far fa-address-book mr-[8px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Bibliotekar</span>
                            </a>
                            <a href="{{route('ucenik.index')}}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="fas fa-users mr-[5px] ml-[3px] py-1"></i>
                                <span class="px-4 py-0">Ucenik</span>
                            </a>
                            <a href="{{route('knjiga.index')}}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="far fa-copy mr-[10px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Knjiga</span>
                            </a>
                            <a href="{{route('autor.index')}}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="far fa-address-book mr-[10px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Autor</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Bild Studio Icon -->
                <a href="https://www.bild-studio.com/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-[20px] svg-icon svg-icon-bildstudio">
                        <use xlink:href="#shape-bildstudio">
                            <svg width="100" viewBox="0 0 100 18.9" id="shape-bildstudio">
                                <g id="bildstudio-text_1_">
                                    <path d="M13.6,4.5h3.2v14h-3.2V4.5z"></path>
                                    <path d="M18.2,0h3.2l0,18.5h-3.2L18.2,0z"></path>
                                    <path
                                        d="M34.6,18.5h-3.2v-0.7c0,0-2,1-3.6,1c-3.7,0-5.3-2.1-5.3-7.4c0-5,1.8-7.2,5.8-7.2c1.1,0,3,0.3,3.1,0.4l0-4.6h3.2L34.6,18.5z    M31.4,15.2V7.4c-0.1,0-1.7-0.3-2.9-0.3c-1.9,0-2.8,1.3-2.8,4.3c0,3.4,0.9,4.3,2.6,4.4C29.6,15.8,31.4,15.2,31.4,15.2z">
                                    </path>
                                    <path
                                        d="M46.6,7.6c0,0-3.4-0.4-5-0.4c-1.7,0-2.3,0.4-2.3,1.4c0,0.9,0.6,1.1,2.9,1.5c3.7,0.6,4.9,1.6,4.9,4.3c0,3.3-2.1,4.5-5.6,4.5   c-2,0-5.2-0.6-5.2-0.6l0.1-2.7c0,0,3.4,0.4,4.8,0.4c2,0,2.7-0.4,2.7-1.5c0-0.9-0.4-1.1-2.7-1.5c-3.6-0.6-5.2-1.4-5.2-4.3   c0-3.2,2.5-4.4,5.3-4.4c2,0,5.3,0.6,5.3,0.6L46.6,7.6z">
                                    </path>
                                    <path
                                        d="M51.3,7.4v5.7c0,1.9,0.1,2.7,1.5,2.7c0.8,0,2.3-0.1,2.3-0.1l0.1,2.7c0,0-1.9,0.4-2.9,0.4c-3.2,0-4.2-1.2-4.2-5.3V7.4l0,0   V4.5l0,0l0-4.5l3.2,0l0,4.5H55v2.9H51.3z">
                                    </path>
                                    <path
                                        d="M68.1,4.5v14h-3.2v-0.7c0,0-2.2,1-3.7,1c-4,0-4.8-2.1-4.8-7V4.5h3.2v7.3c0,3,0.2,4.1,2.3,4.1c1.2,0,3.1-0.6,3.1-0.6V4.5   H68.1z">
                                    </path>
                                    <path
                                        d="M81.4,18.5h-3.2v-0.7c0,0-2,1-3.6,1c-3.7,0-5.3-2.1-5.3-7.4c0-5,1.8-7.2,5.8-7.2c1.1,0,3,0.3,3.1,0.4l0-4.6h3.2L81.4,18.5z    M78.2,15.2V7.4c-0.1,0-1.7-0.3-2.9-0.3c-1.9,0-2.8,1.3-2.8,4.3c0,3.4,0.9,4.3,2.6,4.4C76.4,15.8,78.2,15.2,78.2,15.2z">
                                    </path>
                                    <path d="M82.9,4.5h3.2v14h-3.2V4.5z"></path>
                                    <path
                                        d="M100,11.5c0,4.5-1.5,7.4-6.3,7.4c-4.8,0-6.3-2.8-6.3-7.4c0-4.5,1.6-7.3,6.3-7.3C98.4,4.2,100,7,100,11.5z M96.8,11.5   c0-2.9-0.8-4.3-3-4.3c-2.4,0-3.1,1.3-3.1,4.3c0,3,0.6,4.5,3.1,4.5C96.2,15.9,96.8,14.4,96.8,11.5z">
                                    </path>
                                    <circle cx="15.2" cy="1.8" r="1.8"></circle>
                                    <circle cx="84.5" cy="1.8" r="1.8"></circle>
                                    <path
                                        d="M0,0.1h3.2l0,4.5c0.1,0,2-0.4,3.1-0.4c4,0,5.8,2.2,5.8,7.2c0,5.3-1.6,7.4-5.3,7.4c-1.7,0-3.6-1-3.6-1v0.7H0L0,0.1z    M6.4,15.9c1.7-0.1,2.6-1,2.6-4.4c0-3.1-0.9-4.3-2.8-4.3C5,7.1,3.4,7.4,3.2,7.4v7.9C3.2,15.2,5,15.8,6.4,15.9z">
                                    </path>
                                </g>
                            </svg>
                        </use>
                    </svg>
                </a>
                <!-- User Profile Icon -->
                <div class="ml-[10px] relative block">
                    <a href="#" class="relative inline-block px-3 py-2 focus:outline-none" id="dropdownProfile"
                        aria-label="User profile">
                        <div class="flex items-center h-5">
                            <div class="w-[40px] h-[40px] mt-[15px]">
                                <img class="rounded-full" src="/img/profileImg-default.jpg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="z-10 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-profile">
                    <div class="absolute right-[12px] w-56 mt-[35px] origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                        aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                        <div class="py-1">
                            <a href="{{route('bibliotekar.show',auth()->user()->id)}}" tabindex="0"
                                class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600"
                                role="menuitem">
                                <i class="fas fa-file mr-[8px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Profile</span>
                            </a>
                            <a class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 outline-none hover:text-blue-600" href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-[5px] ml-[5px] py-1"></i>
                                <span class="px-4 py-0">Logout</span>
                            </a>

                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
</header>    <!-- Header -->

    <!-- Main content -->
    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        <nav id="sidebar"
    class="fixed z-10 flex flex-col justify-between overflow-x-hidden overflow-y-auto bg-[#EFF3F6] sidebar nav-height">
    <div class="">
        <!-- Hamburger Icon -->
        <div
            class="cursor-pointer text-[#707070] pl-[30px] pt-[28px] pb-[27px] text-[25px] border-b-[1px] border-[#e4dfdf] ">
            <i id="hamburger" class="hamburger-btn fas fa-bars"></i>
        </div>
        <div class="mt-[30px]">
            <ul class="text-[#2D3B48] sidebar-nav">
                <!-- Dashboard Icon -->
                <li class="bg-[#EAEAEA] pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA]">
                    <div class="ml-[25px]">
                        <span class="flex justify-between w-full fill-current whitespace-nowrap">
                            <div class="transition duration-300 ease-in group-hover:text-[#576cdf]">
                                <a href="{{ route('dashboard') }}" aria-label="Dashboard">
                                    <i
                                        class="text-white bg-[#3F51B5] px-[5px] pt-[4px] pb-[5px] fas fa-tachometer-alt text-[19px] rounded-[3px]"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[15px] ml-[15px]">Dashboard</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Bibliotekari Icon -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA] h-[60px]">
                    <div class="ml-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="{{route('bibliotekar.index')}}" aria-label="Bibliotekari">
                                    <i
                                        class="text-[25px] text-[#707070] far fa-address-book transition duration-300 ease-in group-hover:text-[#576cdf]"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class=" inline text-[15px] ml-[20px] transition duration-300 ease-in group-hover:text-[#576cdf]">
                                            Bibliotekari
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Ucenici Icon -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA] h-[60px]">
                    <div class="ml-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="{{route('ucenik.index')}}" aria-label="Ucenici">
                                    <i
                                        class="text-[18px] transition duration-300 ease-in group-hover:text-[#576cdf] text-[#707070] fas fa-users"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                                            Ucenici</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Knjige Icon -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA] h-[60px]">
                    <div class="ml-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="{{route('knjiga.index')}}" aria-label="Knjige">
                                    <i
                                        class="text-[25px] transition duration-300 ease-in group-hover:text-[#576cdf] text-[#707070] far fa-copy"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                                            Knjige</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Autori Icon -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA] h-[60px]">
                    <div class="ml-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="{{route('autor.index')}}" aria-label="Knjige">
                                    <i
                                        class="text-[25px] transition duration-300 ease-in group-hover:text-[#576cdf] text-[#707070] far fa-address-book"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                                            Autori</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Izdavanje Icon -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA] h-[60px]">
                    <div class="ml-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="{{route('knjiga.izdate')}}" aria-label="Knjige">
                                    <i
                                        class="text-[22px] transition duration-300 ease-in group-hover:text-[#576cdf] text-[#707070] fas fa-exchange-alt"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                                            Izdavanje
                                            knjiga
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Expand menu example -->
                <li class="pt-[18px] pb-[14px] mb-[4px] group hover:bg-[#EAEAEA]">
                    <div class="mx-[30px]">
                        <span class="flex justify-between w-full whitespace-nowrap">
                            <div>
                                <a href="#" aria-label="Dashboard">
                                    <i
                                        class="transition duration-300 ease-in group-hover:text-[#576cdf] text-[25px] text-[#707070] fas fa-expand"></i>
                                    <div class="hidden sidebar-item">
                                        <p
                                            class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                                            Expand example</p>
                                    </div>
                                </a>
                            </div>
                            <div id="item-collapse_1"
                                class="asideArrow hidden sidebar-item transition duration-300 ease-in hover:text-[#576cdf] cursor-pointer">
                                <i id="arrow-collapse_1" class="inline arrow fas fa-angle-right"></i>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Expand menu - items -->
                <ul id="aside-item_1"
                    class="aside-item hidden pl-[70px] mt-[5px] pt-[8px] pb-[10px] text-[#778089] text-[14px]">
                    <li class="mb-[4px] py-[6px]">
                        <div class="transition duration-300 ease-in hover:text-[#2d3b48]">
                            <a href="#" aria-label="Dashboard">
                                <div class="hidden sidebar-item">
                                    <p class="inline">Basic expand</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="mb-[4px] py-[6px]">
                        <div class="transition duration-300 ease-in hover:text-[#2d3b48]">
                            <a href="#" aria-label="Dashboard">
                                <div class="hidden sidebar-item">
                                    <p class="inline">Basic expand</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="mb-[4px] py-[6px]">
                        <div class="transition duration-300 ease-in hover:text-[#2d3b48]">
                            <a href="#" aria-label="Dashboard">
                                <div class="hidden sidebar-item">
                                    <p class="inline">Basic expand</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="sidebar-nav py-[10px] border-t-[1px] border-[#e4dfdf] pt-[23px] pb-[29px]  group hover:bg-[#EFF3F6]">
        <!-- Settings Icon -->
        <a href="{{route('polisa.create')}}" aria-label="Settngs" class="ml-[30px]">
            <span class="whitespace-nowrap">
                <i
                    class="transition duration-300 ease-in group-hover:text-[#576cdf] text-[22px] text-[#707070] fas fa-cog"></i>
                <div class="hidden sidebar-item">
                    <p class="transition duration-300 ease-in group-hover:text-[#576cdf] inline text-[15px] ml-[20px]">
                        Settings</p>
                </div>
            </span>
        </a>
    </div>
</nav>        <!-- End Sidebar -->

        <!-- Content -->

@yield('content')

         <!-- End Content -->
 </main>
    <!-- End Main content -->

    <!-- Notification for small devices -->
    <!-- Notification for small devices -->
<div class="py-[20px] hidden small:block bg-gradient-to-r  from-red-500 mt-[100px]">
    <h1 class="text-[40px] font-medium text-center text-white">
        Trenutno nedostupno...
    </h1>
    <p class="text-[17px] text-white text-center">
        Molimo Vas da koristite vecu rezoluciju.
    </p>
</div>

    <!-- Scripts -->
    <script src="/js/jquery.min.js " ></script>
<script src="/js/app.js " defer=""></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<!-- File upload -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/create-file-list"></script>    <!-- End Scripts -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>    <!-- End Scripts -->

    <script>
    CKEDITOR.replace('kratki_sadrzaj', {
        width: "90%",
        height: "150px"
    });
    </script>
@yield('datatable')
</body>

</html>
