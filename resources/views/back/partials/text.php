<header class=" tw-fixed tw-w-full tw-bg-[#009688] tw-z-10">
<div class="tw-container tw-mx-auto tw-w-full tw-h-20 tw-flex tw-justify-between tw-items-center">
    <div class=" tw-w-60 tw-bg-red-500">
        <a href=""  class="tw-flex tw-justify-normal tw-items-center">
            <img class=" tw-pe-2 " src="{{ asset('back_auth/assets/img/logo.png') }}" width="50" height="70" alt="logo"/>
            <span class="tw-text-white">John Doe</span>
        </a>
    </div>
    <div class="tw-flex tw-justify-between tw-w-1/2 tw-bg-yellow-300">
        <div class="tw-pt-2">
            <form class="tw-bg-green-500">
                <input type="text" class="form-control tw-rounded-2xl tw-border-solid-1 tw-ring-1 tw-ring-[#009688] tw-bg-[#f0f7f6e0] focus:tw-border-none" placeholder="Search here" />
                <button class="btn tw-text-white" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="tw-flex tw-w- tw-justify-center tw-items-center tw-bg-red-300">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-im">
                    <img class="rounded-circle" src="{{ asset('back_auth/assets/img/logo.png') }}" width="100" alt="John Doe"/>
                </span>
            </a>
            
            <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
            <svg class="tw-hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
              
                
        </div>
        
    </div>
</div>
</header>