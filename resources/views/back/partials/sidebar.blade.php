<aside class="tw-w-64 tw-h-full tw-bg-white tw-pb-5 tw-text-black tw-hidden md:tw-block tw-border-r">

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
                        <span>{{ Route::currentRouteName() == 'article.edit' ? 'Éditer un article' : 'Ajouter un article' }}</span>
                    </a>
                </li>
            </ul>
        </li>

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
                        <span> {{Route::currentRouteName() == 'category.edit' ? 'Editer une categorie' : 'Ajouter catégorie'}} </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="tw-pt-2">
            <a href="#" class="tw-flex tw-py-3 tw-px-4  hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                <i class="fa fa-user fa-lg tw-mr-2"></i>
                <span>Auteurs</span>
                <i class="fa fa-chevron-right fa-xs submenu-toggle tw-ml-auto"></i>
            </a>
            <ul class="tw-pl-6 submenu tw-hidden" >
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
            <a href="#" class="tw-flex tw-py-3 tw-px-4  hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                <i class="fa fa-cogs fa-lg tw-mr-2"></i>
                <span>Paramètres</span>
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
    </ul>
</nav>
</aside>

<!-- menu mobile -->

<div class="md:tw-hidden" x-show="open" x-transition class="tw-fixed tw-inset-0 tw-bg-gray-800 tw-bg-opacity-75 tw-flex">
  <aside class="tw-w-64 tw-bg-teal-700 tw-text-white tw-p-5 tw-h-full">
      <button @click="open = false" class="tw-text-white tw-text-lg">✖</button>
      <nav class="tw-mt-5">
          <ul>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 tw-bg-teal-600 tw-rounded">Dashboard</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Articles</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Catégories</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Auteurs</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Commentaires</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Contacts</a>
              </li>
              <li>
                  <a href="#" class="tw-block tw-py-2 tw-px-4 hover:tw-bg-teal-600">Paramètres</a>
              </li>
          </ul>
      </nav>
  </aside>
</div>