<aside class="tw-w-64 tw-h-full tw-bg-white tw-pb-5 tw-text-black tw-hidden md:tw-block">
  <div class="tw-text-left  tw-bg-teal-700 tw-text-xl tw-font-bold tw-p-5">John Doe</div>
  <nav class="tw-h-full tw-py-5 tw-px-5">
      <ul>
          <li class="tw-pt-3">
              <a href="#" class="tw-flex tw-py-3 tw-text-white tw-px-4 toggle-submenu tw-items-center tw-rounded-md tw-shadow-md tw-bg-teal-600 hover:tw-bg-teal-600">
                  <i class="fa fa-tachometer-alt fa-lg tw-mr-2"></i>
                  <span>Dashboard</span>
              </a>
              <hr class="tw-mt-5">
          </li>

          <li class="tw-pt-5">
              <a href="#" class="tw-flex tw-py-3 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white  toggle-submenu tw-items-center">
                  <i class="fa fa-newspaper fa-lg tw-mr-2"></i>
                  <span>Articles</span>
                  <i class="fa fa-chevron-right fa-xs submenu-toggle tw-ml-auto"></i>
              </a>
              <ul class="tw-pl-6 submenu" style="display: none;">
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 2</span>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="tw-pt-2">
            <a href="#" 
               class="tw-flex tw-py-3 tw-px-4 hover:tw-bg-teal-600 hover:tw-rounded-md hover:tw-shadow-md hover:tw-text-white 
               {{ Request::is('category*') ? 'tw-bg-teal-600 tw-rounded-md tw-shadow-md tw-text-white' : '' }} 
               toggle-submenu tw-items-center">
                <i class="fa fa-list fa-lg tw-mr-2"></i>
                <span>Catégories</span>
                <i class="fa submenu-toggle tw-ml-auto 
                          {{ Request::is('category*') ? 'fa-chevron-down' : 'fa-chevron-right' }}">
                </i>
            </a>
        
            <ul class="tw-pl-6 submenu" style="display: {{ Request::is('category*') ? 'block' : 'none' }};">
                <li>
                    <a href="{{ route('category.index') }}" 
                       class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md 
                       {{ Route::currentRouteName() == 'category.index' ? 'tw-bg-teal-600 tw-text-white tw-mt-1 tw-rounded-md' : '' }}">
                        <i class="fa fa-circle fa-xs tw-mr-2"></i>
                        <span>Voir les catégories</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.create') }}" 
                       class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md 
                       {{ Route::currentRouteName() == 'category.create' ? 'tw-bg-teal-600 tw-text-white tw-mt-1 tw-rounded-md' : '' }}">
                        <i class="fa fa-circle fa-xs tw-mr-2"></i>
                        <span>Ajouter catégorie</span>
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
              <ul class="tw-pl-6 submenu" style="display: none;">
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
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
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
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
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
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
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
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
              <!-- Sous-liens -->
              <ul class="tw-pl-6 submenu" style="display: none;">
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" class="tw-block tw-py-1 tw-px-4 hover:tw-bg-teal-600 hover:tw-text-white hover:tw-rounded-md">
                          <i class="fa fa-circle fa-xs tw-mr-2"></i>
                          <span>Sous-lien 2</span>
                      </a>
                  </li>
              </ul>
          </li>
      </ul>
  </nav>
</aside>

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