<div x-data="{ open: false }" class="header tw-hidden md:tw-inline-block">
    <div class="header-left  md:tw-flex">
        <div class="tw-flex tw-justify-normal tw-items-center tw-cursor-pointer tw-pt-3">
            <a href="index.html" class="log">
                <img class="" src="{{ asset('back_auth/assets/img/logo.png') }}" width="50" height="70" alt="logo"/>
            </a>
            <span class="logoclass">John Doe</span>
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
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('back_auth/assets/img/logo.png') }}" alt="User Image" class="avatar-img rounded-circle"/>
                    </div>
                    <div class="user-text">
                        <h6>John Doe</h6>
                        <p class="text-muted mb-0">Administrateur</p>
                    </div>
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
<header x-data="{ open: false }" class="tw-w-full tw-z-10 tw-bg-[#009688]">
    <div class="tw-w-full tw-h-20 tw-flex tw-justify-between tw-items-cente tw-py-4 tw-px-3 md:tw-pr-[1.875rem] md:tw-pb-[1.875rem] md:tw-pl-[1.875rem]">
        <div>
            <button class="tw-w-10 tw-h-10 tw-pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 tw-w-10 tw-h-10 tw-text-[#ffffffdc]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <div class="tw-text-start">
            <div  class="dropdown-men tw-relative tw-shadow- tw-rounded-">
                <div @click="open = !open" class="user-header tw-cursor-pointer">
                    <div  class="avatar avatar-sm tw-cursor-pointer">
                        <img src="{{ asset('back_auth/assets/img/logo.png') }}" alt="User Image" class="avatar-img rounded-circle"/>
                    </div>
                    <div class="user-text tw-text-[#ffffffdc] hover:!tw-text-black">
                        <h6>John Doe</h6>
                        <p class="text-muted !tw-text-[#ffffffdc] hover:!tw-text-black mb-0">Administrateur</p>
                    </div>
                </div>
                <div :class="{
                        'tw-flex tw-flex-col tw-p-3 tw-z-10 tw-w-full tw-transition-all tw-duration-[1000ms] tw-ease-in-out tw-translate-y-0 tw-opacity-100': open, 
                        'tw-translate-y-[-20px] tw-opacity-0 tw-pointer-events-none': !open
                        }" class="tw-bg-[#009688] tw-rounded-md md:tw-hidden tw-absolute tw-top-full tw-left-0 tw-shadow-lg">

                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="{{route('profile.edit')}}">Profile</a>
                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="settings.html">Paramettre</a>
                    <a class="dropdown-item tw-py-3 hover:tw-bg-[#ffffff5e] hover:tw-px-2 hover:tw-rounded-md hover:tw-text-black tw-border-b-2 tw-border-[#ffffff3f] tw-text-[#ffffffdc] tw-font-bold" href="login.html">Deconnexion</a>
                </div>
            </div>
        </div>
    </div>
</header>
