<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    <div class="main-sidebar">
        <div class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
            <!-- Application Logo -->
            <div class="flex pt-4">
                <a href="{{ route('home') }}">
                    <img class="size-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]" src="{{ URL::to('assets/images/app-logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
                @php
                    $sidebarLinks = [
                        ['name' => 'Gestión de Usuarios', 'route' => route('users.index'), 'icon' => 'fas fa-users'],
                        ['name' => 'Gestión de Catálogo', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-box-open'],
                        ['name' => 'Gestión de Ofertas', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-tags'],
                        ['name' => 'Gestión de Promociones', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-bullhorn'],
                        ['name' => 'Gestión de Pedidos', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-shopping-cart'],
                        ['name' => 'Gestión de Ventas', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-cash-register'],
                        ['name' => 'Gestión de Envíos', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-truck'],
                        ['name' => 'Sector Pago', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-credit-card'],
                        ['name' => 'Reportes y Estadísticas', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-chart-bar'],
                        ['name' => 'Datos de la Empresa y Garantías', 'route' => 'dashboards-personal.html', 'icon' => 'fas fa-building'],
                    ];
                @endphp
                @foreach($sidebarLinks as $link)
                    <a href="{{ $link['route'] }}"
                        class="flex items-center justify-center h-12 w-12 rounded-lg text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                        x-tooltip.placement.right="'{{ $link['name'] }}'">
                        
                        <i class="{{ $link['icon'] }} h-25 w-25"></i>
                    </a>
                @endforeach
            </div>
            <!-- Bottom Links -->
            <div class="flex flex-col items-center space-y-3 py-3">
                <!-- Settings -->
                <a href="form-layout-5.html"
                    class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg class="h-7 w-7" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-opacity="0.3" fill="currentColor"
                            d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z">
                        </path>
                        <path fill="currentColor"
                            d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z">
                        </path>
                    </svg>
                </a>

                <!-- Profile -->
                <div x-data="usePopper({placement:'right-end',offset:12})"
                    @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
                    <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar size-12">
                        <img class="rounded-full" src="{{ URL::to('assets/images/avatar/avatar-12.jpg') }}" alt="avatar">
                        <span
                            class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                    </button>

                    <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                        <div
                            class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                            <div
                                class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800">
                                <div class="avatar size-14">
                                    <img class="rounded-full" src="{{ URL::to('assets/images/avatar/avatar-12.jpg') }}" alt="avatar">
                                </div>
                                <div>
                                    <a href="#" class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                        StarCodeKh
                                    </a>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Full-Stack Developer
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col pt-2 pb-5">
                                <a href="#"
                                    class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex size-8 items-center justify-center rounded-lg bg-warning text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2
                                            class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Profile
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Your profile setting
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex size-8 items-center justify-center rounded-lg bg-info text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2
                                            class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Messages
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Your messages and tasks
                                        </div>
                                    </div>
                                </a>               
                                <a href="#"
                                    class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex size-8 items-center justify-center rounded-lg bg-error text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2
                                            class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Activity
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Your activity and events
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                    <div
                                        class="flex size-8 items-center justify-center rounded-lg bg-success text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2
                                            class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                            Settings
                                        </h2>
                                        <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                            Webapp settings
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-3 px-4">
                                    <a href="{{ route('logout') }}">
                                        <button class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewbox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            <span>Logout</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Panel -->
    <div class="sidebar-panel">
        <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
            <!-- Sidebar Panel Header -->
            <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
                <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">Dashboards</p>
                <button @click="$store.global.isSidebarExpanded = false" class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewbox="0 0 24 24"stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
            </div>
            <div x-data="{expandedItem:null}" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
                x-init="$el._x_simplebar = new SimpleBar($el);">
                <ul class="flex flex-1 flex-col px-4 font-inter">
                    @foreach($sidebarLinks as $link)
                        <li>
                            <a x-data="navLink" href="{{ $link['route'] }}" :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'" class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
