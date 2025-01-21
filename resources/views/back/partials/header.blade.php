<div x-data="{ open: false }" x-cloak class="header tw-hidden md:tw-inline-block">
    <div class="header-left  md:tw-flex">
        <div class="tw-flex tw-justify-normal tw-items-center tw-cursor-pointer tw-pt-3">
            <a href="index.html" class="log">
                <img class="" src="{{ asset('back_auth/assets/img/logo.png') }}" width="50" height="70" alt="logo"/>
            </a>
            @auth
                <span class="logoclass"> {{Illuminate\Support\Facades\auth::user()->name}} </span>
            @endauth
        </div>  
    </div>
    
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    
    <ul class="nav user-menu"> 

        <li class="nav-item dropdown has-arrow tw-right-1">
            <!-- avatar for display md min -->
            <a @click="open = ! open" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img tw-pt-4 tw-pb-0 tw-ps-0 tw-text-end">
                    <img class="rounded-circle" src="{{ asset('back_auth/assets/img/logo.png') }}" width="31" alt="John Doe"/>
                </span>
            </a>
            
            <div :class="{'block': open, 'tw-hidden': ! open}" class="dropdown-menu tw-hidden tw-bg-white tw-shadow-md tw-rounded-md">
                <div class="user-header">
                    @auth
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('back_auth/assets/img/logo.png') }}" alt="User Image" class="avatar-img rounded-circle"/>
                    </div>
                    
                    <div class="user-text">
                        <h6> {{Illuminate\Support\Facades\Auth::user()->name}} </h6>
                        <p class="text-muted mb-0">Administrateur</p>
                    </div>
                    @endauth
                </div>
                <a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a>
                <a class="dropdown-item" href="settings.html">Paramettre</a>
                <a class="dropdown-item" href="login.html">Deconnexion</a>
            </div>
        </li>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>

<!-- header for mobil --> 
<header x-data="{ open: false, menuMobileOpen: false }" x-cloak class="tw-w-full md:tw-hidden tw-z-10 tw-bg-[#009688]">
    <div class="tw-w-full tw-h-20 tw-flex tw-justify-between tw-items-cente tw-py-4 tw-px-3 md:tw-pr-[1.875rem] md:tw-pb-[1.875rem] md:tw-pl-[1.875rem]">
        <div class=" tw-relative">
            <button @click="menuMobileOpen = !menuMobileOpen" class="btnMenu tw-w-10 tw-h-10 tw-pt-2">
                <svg x-show="!menuMobileOpen"
                    x-transition:enter="tw-transition tw-duration-500 tw-ease-in-out  tw-translate-y-0 tw-opacity-0 tw-scale-75"
                    x-transition:enter-start="tw-opacity-0 tw-scale-75"
                    x-transition:enter-end="tw-opacity-100 tw-scale-100"
                    x-transition:leave="tw-transition tw-duration-500 tw-ease-in-out tw-opacity-100 tw-scale-100"
                    x-transition:leave-start="tw-opacity-100 tw-scale-100"
                    x-transition:leave-end="tw-opacity-0 tw-scale-75"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 tw-w-10 tw-h-10 tw-text-[#ffffffdc]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-show="menuMobileOpen"
                    x-transition:enter="tw-transition tw-duration-500 tw-ease-in-out tw-opacity-0 tw-scale-75"
                    x-transition:enter-start="tw-opacity-0 tw-scale-75"
                    x-transition:enter-end="tw-opacity-100 tw-scale-100"
                    x-transition:leave="tw-transition tw-duration-500 tw-ease-in-out tw-opacity-100 tw-scale-100"
                    x-transition:leave-start="tw-opacity-100 tw-scale-100"
                    x-transition:leave-end="tw-opacity-0 tw-scale-75"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 tw-w-10 tw-h-10 tw-text-[#ffffffdc]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>

        <div x-cloak :class="{
            'tw-flex tw-flex-col tw-pt-1 tw-pb-24 max-sm:tw-px-4 tw-transition-all tw-duration-[1000ms] tw-ease-in-out tw-translate-y-0 tw-opacity-100': menuMobileOpen, 
            'tw-translate-y-[-20px] tw-opacity-0 tw-pointer-events-none': !menuMobileOpen
            }"  class="tw-bg-[#080808d0] tw-w-full tw-absolute tw-top-20 tw-bottom-0 tw-left-0 tw-h-screen tw-z-10 md:tw-hidden tw-shadow-lg">
          
            <ul id="sidebar-menu" class="tw-rounded-b-2xl tw-rounded-t-md tw-p-2 tw-bg-[#009688]">
                <li class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="index.html">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="#"><i class="fas fa-edit"></i> <span> Articles </span>
                        <span class="menu-arrow"></spa>
                    </a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="all-article.html"> Tous les articles </a></li>
                        <li><a href="add-article.html"> Ajouter un article </a></li>
                    </ul>
                </li>       
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="#">
                        <i class="fas fa-book"></i>
                        <span> Catégories </span>
                        <span class="menu-arrow"></spa>
                    </a>
                    <ul class="submenu_class" style="display: none">
                        <li>
                            <a href="all-categories.html"> Tous les catégories </a>
                        </li>
        
                        <li>
                            <a href="add-categories.html"> Ajouter une catégorie </a>
                        </li>
                    </ul>
                </li>
        
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span> Auteurs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none">
                        <li>
                            <a href="all-author.html">Tous les auteurs </a>
                        </li>
                        <li>
                            <a href="add-author.html"> Ajouter un auteur </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="all-comments.html">
                        <i class="fe fe-table"></i> <span>Commentaires</span>
                    </a>
                </li>
        
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold">
                    <a href="#">
                        <i class="far fa-money-bill-alt"></i>
                        <span> Medias Sociaux </span> <span class="menu-arrow"></spa>
                    </a>
                    <!-- add icon click -->
                    <ul class="submenu_class" style="display: none">
                      <li><a href="all-social-media.html">Tous les medias </a></li>
                      <li><a href="add-social-media.html">Ajouter un media </a></li>
                    </ul>
                </li>
        
                <li class="submenu dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-text-[#ffffffdc] tw-font-bold">
                    <a href="all-contacts.html">
                        <i class="fe fe-table"></i> <span>Contacts</span>
                    </a>
                </li>  
            </ul>
        </div>

        <div class="tw-text-start">
            <div  class="dropdown-men tw-relative tw-shadow- tw-rounded-">
                <div @click="open = !open" class="user-header tw-cursor-pointer">
                    @auth
                    <div  class="avatar avatar-sm tw-cursor-pointer">
                        <img src="{{ asset('back_auth/assets/img/logo.png') }}" alt="User Image" class="avatar-img rounded-circle"/>
                    </div>
                    <div class="user-text tw-text-[#ffffffdc] hover:!tw-text-black">
                        <h6> {{Illuminate\Support\Facades\Auth::user()->name}} </h6>
                        <p class="text-muted !tw-text-[#ffffffdc] hover:!tw-text-black mb-0">Administrateur</p>
                    </div>
                    @endauth
                </div>
                <div :class="{
                        'tw-flex tw-flex-col tw-p-3 tw-z-10 tw-w-full tw-transition-all tw-duration-[1000ms] tw-ease-in-out tw-translate-y-0 tw-opacity-100': open, 
                        'tw-translate-y-[-20px] tw-opacity-0 tw-pointer-events-none': !open
                        }" class="tw-bg-[#009688] tw-rounded-md md:tw-hidden tw-absolute tw-top-full tw-left-0 tw-shadow-lg">

                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="{{route('profile.edit')}}">Profile</a>
                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="login.html">Deconnexion</a>
                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="settings.html"><i class="fas fa-cog"></i> <span>Paramètres</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
