<aside class="tw-w-64 {{Illuminate\Support\Facades\Auth::user()->role == 'admin' ? 'tw-overflow-auto' : ''}}  tw-fixed tw-h-full tw-bg-white tw-pb-5 tw-text-black tw-hidden md:tw-block tw-border-r">

    <div class="tw-flex tw-justify-center tw-bg-teal-700 tw-px- tw-py-2">
        <img
            class="tw-w-14 tw-h-auto tw-text-center tw-cursor-pointer tw-rounded-full"
            src="{{asset("back_auth/assets/img/logo.png")}}" width="100" height="100" alt=""
        >
    </div>
    <nav class="tw-h-full tw-py-5 tw-px-5">
        <ul>
            <li class="tw-pt-3">
                <a href="{{ route('dashboard')}}" class="tw-flex tw-py-3 tw-text-white tw-px-4 tw-items-center tw-rounded-md tw-shadow-md tw-bg-teal-600 hover:tw-bg-teal-600">
                    <i class="fa fa-tachometer-alt fa-lg tw-mr-2"></i>
                    <span>Dashboard</span>
                </a>
                <hr class="tw-mt-5">
            </li>

            <li class="tw-pt-5">
                <a href="#" class="tw-flex tw-py-3 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
                    {{ Request::is('article*') ? 'tw-bg-teal-600 tw-rounded-md tw-mb-2 tw-shadow-md tw-text-white' : '' }} toggle-submenu tw-items-center">
                    
                    <i class="fa fa-newspaper fa-lg tw-mr-2"></i>
                    <span>Articles</span>
                    <i class="fa fa-xs submenu-toggle tw-ml-auto {{ Request::is('article*') ? 'fa-chevron-down' : 'fa-chevron-right' }}">
                    </i>
                </a>
                <ul class="tw-pl-6 submenu {{ Request::is('article*') ? 'tw-block' : 'tw-hidden' }}">
                    <li>
                        <a href="{{ route('article.index') }}" 
                            class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                            {{ Route::currentRouteName() == 'article.index' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                            <i class="fa fa-circle fa-xs tw-mr-2"></i>
                            <span>Voir les articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.create') }}" 
                            class="tw-block tw-py-1 tw-px-4 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                            {{ Route::currentRouteName() == 'article.create' || Route::currentRouteName() == 'article.edit' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                            <i class="fa fa-circle fa-xs tw-mr-2"></i>
                            <span>{{ Route::currentRouteName() == 'article.edit' ? 'Éditer un article' : 'Ajouter article' }}</span>
                        </a>
                    </li>
                    @if (isset($article))
                        <li class="{{Route::currentRouteName() == 'article.show' ? 'tw-block' : 'tw-hidden'}}">
                            <a href="#" 
                                class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'article.show' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>{{$article->title}} </span>
                            </a>
                        </li>
                    @endif
                </ul>
            </li>

            <li class="tw-pt-2">
                <a href="#" class="tw-flex tw-py-3 tw-px-4  hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                    <i class="fa fa-comment fa-lg tw-mr-2"></i>
                    <span>Commentaires</span>
                    <i class="fa fa-chevron-right fa-xs submenu-toggle tw-ml-auto"></i>
                </a>
                <ul class="tw-pl-6 submenu" style="display: none;">
                    <li>
                        <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                            <i class="fa fa-circle fa-xs tw-mr-2"></i>
                            <span>Sous-lien 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                            <i class="fa fa-circle fa-xs tw-mr-2"></i>
                            <span>Sous-lien 2</span>
                        </a>
                    </li>
                </ul>
            </li>

            @can('admin_access')
                <li class="tw-pt-2">
                    <a href="#" 
                        class="tw-flex tw-py-2 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
                        {{ Request::is('category*') ? 'tw-bg-teal-600 tw-rounded-md tw-mb-2 tw-shadow-md tw-text-white' : '' }} 
                        toggle-submenu tw-items-center">

                        <i class="fa fa-list fa-lg tw-mr-2"></i>
                        <span>Catégories</span>
                        <i class="fa fa-xs submenu-toggle tw-ml-auto {{ Request::is('category*') ? 'fa-chevron-down' : 'fa-chevron-right' }}"></i>
                    </a>
                    <ul class="tw-pl-6 tw-text-sm submenu {{ Request::is('category*') ? 'tw-block' : 'tw-hidden' }}">
                        <li>
                            <a href="{{ route('category.index') }}" 
                                class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'category.index' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Voir les catégories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category.create') }}" 
                                class="tw-block tw-py-1 tw-px-4 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'category.create' || Route::currentRouteName()== 'category.edit' ? 'tw-bg-[#0096878e] tw-text-white tw-my-2 tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span> {{Route::currentRouteName() == 'category.edit' ? 'Editer categorie' : 'Ajouter catégorie'}} </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="tw-pt-2">
                    <a href="#" 
                        class="tw-flex tw-py-2 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
                        {{ Request::is('author*') ? 'tw-bg-teal-600 tw-rounded-md tw-mb-2 tw-shadow-md tw-text-white' : '' }} 
                        toggle-submenu tw-items-center">

                        <i class="fa fa-list fa-lg tw-mr-2"></i>
                        <span>Autheurs</span>
                        <i class="fa fa-xs submenu-toggle tw-ml-auto {{ Request::is('author*') ? 'fa-chevron-down' : 'fa-chevron-right' }}"></i>
                    </a>
                    <ul class="tw-pl-6 tw-text-sm submenu {{ Request::is('author*') ? 'tw-block' : 'tw-hidden' }}">
                        <li>
                            <a href="{{ route('author.index') }}" 
                                class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'author.index' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Voir les autheurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('author.create') }}" 
                                class="tw-block tw-py-1 tw-px-4 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'author.create' || Route::currentRouteName()== 'author.edit' ? 'tw-bg-[#0096878e] tw-text-white tw-my-2 tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span> {{Route::currentRouteName() == 'author.edit' ? 'Editer autheur' : 'Ajouter autheur'}} </span>
                            </a>
                        </li>
                    </ul>
                </li>
            
                <li class="tw-pt-2">
                    <a href="#" 
                        class="tw-flex tw-py-2 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
                        {{ Request::is('mediaSocial*') ? 'tw-bg-teal-600 tw-rounded-md tw-mb-2 tw-shadow-md tw-text-white' : '' }} 
                        toggle-submenu tw-items-center">

                        <i class="fa fa-share-alt fa-lg tw-mr-2"></i>
                        <span> Media sociaux </span>
                        <i class="fa fa-xs submenu-toggle tw-ml-auto {{ Request::is('mediaSocial*') ? 'fa-chevron-down' : 'fa-chevron-right' }}"></i>
                    </a>
                    <ul class="tw-pl-6 tw-text-sm submenu {{ Request::is('mediaSocial*') ? 'tw-block' : 'tw-hidden' }}">
                        <li>
                            <a href="{{ route('mediaSocial.index') }}" 
                                class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'amediaSocial.index' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>tous les reseaux</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mediaSocial.create') }}" 
                                class="tw-block tw-py-1 tw-px-4 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'mediaSocial.create' || Route::currentRouteName()== 'mediaSocial.edit' ? 'tw-bg-[#0096878e] tw-text-white tw-my-2 tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span> {{Route::currentRouteName() == 'mediaSocial.edit' ? 'Editer reseau' : 'Ajouter reseau'}} </span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="tw-pt-2">
                    <a href="#" class="tw-flex tw-py-3 tw-px-4  hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                        <i class="fa fa-address-book fa-lg tw-mr-2"></i>
                        <span>Contacts</span>
                        <i class="fa fa-chevron-right fa-xs submenu-toggle tw-ml-auto"></i>
                    </a>
                    <ul class="tw-pl-6 submenu" style="display: none;">
                        <li>
                            <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Sous-lien 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Sous-lien 2</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="tw-pt-2">
                    <a href="#" 
                        class="tw-flex tw-py-2 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
                        {{ Request::is('seting*') ? 'tw-bg-teal-600 tw-rounded-md tw-mb-2 tw-shadow-md tw-text-white' : '' }} 
                        toggle-submenu tw-items-center">

                        <i class="fa fa-cogs fa-lg tw-mr-2"></i>
                        <span>Paramètres</span>
                        <i class="fa fa-xs submenu-toggle tw-ml-auto {{ Request::is('seting*') ? 'fa-chevron-down' : 'fa-chevron-right' }}"></i>
                    </a>
                    <ul class="tw-pl-6 tw-text-sm submenu {{ Request::is('seting*') ? 'tw-block' : 'tw-hidden' }}">
                        <li>
                            <a href="{{ route('seting.index') }}" 
                                class="tw-block tw-py-1 tw-px-3 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'seting.index' ? 'tw-bg-[#0096878e] tw-text-white tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>seting</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('seting.create') }}" 
                                class="tw-block tw-py-1 tw-px-4 tw-mt-2 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md 
                                {{ Route::currentRouteName() == 'seting.create' || Route::currentRouteName()== 'seting.edit' ? 'tw-bg-[#0096878e] tw-text-white tw-my-2 tw-rounded-md' : '' }}">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span> {{Route::currentRouteName() == 'seting.edit' ? 'Editer site' : 'Ajouter un site'}} </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="tw-pt-3 tw-pb-1">
                    <a href="#" class="tw-flex tw-py-2 tw-px-4  hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                        <i class="fa fa-folder fa-lg tw-mr-2"></i>
                        <span>Gestion</span>
                        <i class="fa fa-chevron-right fa-xs submenu-toggle tw-ml-auto"></i>
                    </a>
                    <ul class="tw-pl-6 submenu" style="display: none;">
                        <li>
                            <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Sous-lien 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-[#0096878e] hover:tw-text-white hover:tw-rounded-md">
                                <i class="fa fa-circle fa-xs tw-mr-2"></i>
                                <span>Sous-lien 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
        </ul>
    </nav>
</aside>


<!-- Menu latéral -->
<div>
    <!-- Overlay et Sidebar -->
    <div class="tw-fixed tw-inset-0"
        x-show="openMenu"
        @click.away="openMenu = false"
        x-cloak
        x-transition.opacity.duration.500ms
        class="tw-bg-gray-800 tw-bg-opacity-75 tw-flex tw-z-50">
        
        <!-- Sidebar -->
        <aside class="tw-w-64 tw-bg-teal-700 tw-text-white tw-p-5 tw-mt-2 tw-h-full tw-fixed tw-left-0 tw-top-16 tw-shadow-lg"
            x-show="openMenu"
            x-transition:enter="tw-transition tw-duration-700"
            x-transition:enter-start="-tw-translate-x-full"
            x-transition:enter-end="tw-translate-x-0"
            x-transition:leave="tw-transition tw-duration-700"
            x-transition:leave-start="tw-translate-x-0"
            x-transition:leave-end="-tw-translate-x-full">

            <div class="tw-flex tw-bg-teal-600 tw-p-2 tw-border tw-border-teal-600 tw-rounded-sm tw-justify-between">
                @if (\Illuminate\Support\Facades\Auth::user() && \Illuminate\Support\Facades\Auth::user()->image)
                    <a href="{{ route('profile.edit')}}">
                        <img
                        class="tw-w-14 tw-h-14 tw-cursor-pointer tw-rounded-full"
                        src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image)}}" width="100" height="100" alt=""
                        >
                    </a>
                @else
                    <a href="{{ route('profile.edit')}}">
                        <img
                        class="tw-w-14 tw-h-14 tw-text-center tw-cursor-pointer tw-rounded-full"
                        src="{{ asset('back_auth/assets/img/logo.png')}}" width="100" height="100" alt=""
                        >
                    </a>
                @endif

                <button @click="openMenu = false" class="tw-text-white tw-text-lg tw-top- tw-right-3">✖</button>
            </div>
            
            <nav class="tw-mt-10">
                <ul>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 tw-bg-teal-600 tw-rounded">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3 tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                            <i class="fas fa-newspaper"></i> Articles
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                        <i class="fas fa-tags"></i> Catégories</a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                            <i class="fas fa-user"></i> Auteurs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                            <i class="fas fa-comments"></i> Commentaires
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                            <i class="fas fa-envelope"></i> Contacts
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tw-flex tw-items-center tw-gap-3  tw-py-2 tw-px-4 hover:tw-bg-teal-600">
                            <i class="fas fa-cog"></i> Paramètres
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</div>