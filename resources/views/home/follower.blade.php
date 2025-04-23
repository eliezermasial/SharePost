@if (Route::currentRouteName() == 'home' || Route::currentRouteName()  == 'search')

    <!-- Section Suivez-nous -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            SUIVEZ NOUS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            <div class="tw-flex tw-items-center tw-bg-blue-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📘 Facebook</span>
                <span>12,345 Fans</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-400 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🐦 Twitter</span>
                <span>12,345 Followers</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-700 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🔗 LinkedIn</span>
                <span>12,345 Connects</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-pink-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📸 Instagram</span>
                <span>12,345 Followers</span>
            </div>
        </div>
    </div>

    <!-- Section recentes articles -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            RECENTES ARTICLES
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            @if ($Global_recent_articles->count())
                @foreach ($Global_recent_articles->take(5) as $article)
                <div class="tw-flex tw-items-center tw-text-whit tw-p-2 tw-rounded">
                    <div class="tw-flex tw-gap-2">
                        <img src="{{$article->imageUrl()}}" class="tw-w-[50%] tw-h-[35%]" alt="{{$article->title}}">
                        <div class="">
                            <div class="tw-px-2 tw-mb-2 tw-py-1 tw-w-full tw-rounded-sm tw-bg-teal-600">
                                <span class="tw-w-[100%] tw-font-bold-sm tw-text-white">{{$article->category->name}}</span>
                            </div>
                            <h4 class=" tw-text-base tw-font-bold tw-text-[#000000bd]">{{$article->title}} </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Liste des tags enregistrés -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            TAGS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-grid tw-grid-cols-2 tw-gap-2">
            @if ($Global_tags->count())
                @foreach ($Global_tags->take(16) as $tag)
                    <div class="block_tag tw-border-2 tw-border-teal-900 hover:tw-text-[#ffff] hover:tw-bg-teal-900 hover:tw-p-3 tw-p-2 tw-rounded tw-h-10 tw-flex tw-items-center">
                        <span class="tw-truncate tw-w-full">{{$tag->name}}</span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endif

@if (Route::currentRouteName() == 'detail')

    <!-- Section Suivez-nous -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            SUIVEZ NOUS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            <div class="tw-flex tw-items-center tw-bg-blue-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📘 Facebook</span>
                <span>12,345 Fans</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-400 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🐦 Twitter</span>
                <span>12,345 Followers</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-700 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🔗 LinkedIn</span>
                <span>12,345 Connects</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-pink-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📸 Instagram</span>
                <span>12,345 Followers</span>
            </div>
        </div>
    </div>

    <!-- Section recentes articles -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            RECENTES ARTICLES
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            <div class="tw-flex tw-items-center tw-text-whit tw-p-2 tw-rounded">
                <div class="tw-flex tw-gap-2">
                    <img src="{{$article->imageUrl()}}" class="tw-w-[50%] tw-h-[35%]" alt="{{$article->title}}">
                    <div class="">
                        <div class="tw-px-2 tw-mb-2 tw-py-1 tw-w-full tw-rounded-sm tw-bg-teal-600">
                            <span class="tw-w-[100%] tw-font-bold-sm tw-text-white">{{$article->category->name}}</span>
                        </div>
                        <h4 class=" tw-text-base tw-font-bold tw-text-[#000000bd]">{{$article->title}} </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Liste des tags enregistrés -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            TAGS {{Count($article->tagNames)}}
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-grid tw-grid-cols-2 tw-gap-2">
            @foreach ($article->tagNames as $tag)
                <div class="block_tag tw-border-2 tw-border-teal-900 hover:tw-text-[#ffff] hover:tw-bg-teal-900 hover:tw-p-3 tw-p-2 tw-rounded tw-h-10 tw-flex tw-items-center">
                    <span class="tw-truncate tw-w-full">{{$tag}} </span>
                </div>
            @endforeach
        </div>
    </div>

@endif

@if (Route::currentRouteName() == 'front.category')
    <!-- Section Suivez-nous -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            SUIVEZ NOUS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            <div class="tw-flex tw-items-center tw-bg-blue-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📘 Facebook</span>
                <span>12,345 Fans</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-400 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🐦 Twitter</span>
                <span>12,345 Followers</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-700 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🔗 LinkedIn</span>
                <span>12,345 Connects</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-pink-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📸 Instagram</span>
                <span>12,345 Followers</span>
            </div>
        </div>
    </div>

    <!-- Section recentes articles -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            RECENTES ARTICLES
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            @if ($category->articles()->count())
                @foreach ($category->articles()->orderBy('created_at', 'Desc')->get() as $article)
                    <div class="tw-flex tw-items-center tw-text-whit tw-p-2 tw-rounded">
                        <div class="tw-flex tw-gap-2">
                            <img src="{{$article->imageUrl()}}" class="tw-w-[50%] tw-h-[35%]" alt="{{$article->title}}">
                            <div class="">
                                <div class="tw-px-2 tw-mb-2 tw-py-1 tw-w-full tw-rounded-sm tw-bg-teal-600">
                                    <span class="tw-w-[100%] tw-font-bold-sm tw-text-white">{{$article->category->name}}</span>
                                </div>
                                <h4 class=" tw-text-base tw-font-bold tw-text-[#000000bd]">{{$article->title}} </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="tw-mt-4 tw-text-center tw-text-gray-500 tw-text-lg">
                    Aucun article trouvé pour cette categorie
                </div>
            @endif
        </div>
    </div>
    
    <!-- Liste des tags enregistrés -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            TAGS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-grid tw-grid-cols-2 tw-gap-2">
            @if ($category->articles()->count())
                @foreach ($category->articles as $tag)
                    @foreach ($article->tags as $tag)
                        <div class="block_tag tw-border-2 tw-border-teal-900 hover:tw-text-[#ffff] hover:tw-bg-teal-900 hover:tw-p-3 tw-p-2 tw-rounded tw-h-10 tw-flex tw-items-center">
                            <span class="tw-truncate tw-w-full">{{$tag->name}}</span>
                        </div>
                    @endforeach
                @endforeach
            @endif
        </div>
    </div>
@endif

@if (Route::currentRouteName() == 'contact.showForm')
    <!-- Section Suivez-nous -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            SUIVEZ NOUS
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            <div class="tw-flex tw-items-center tw-bg-blue-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📘 Facebook</span>
                <span>12,345 Fans</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-400 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🐦 Twitter</span>
                <span>12,345 Followers</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-blue-700 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">🔗 LinkedIn</span>
                <span>12,345 Connects</span>
            </div>
            <div class="tw-flex tw-items-center tw-bg-pink-600 tw-text-white tw-p-2 tw-rounded">
                <span class="tw-flex-1">📸 Instagram</span>
                <span>12,345 Followers</span>
            </div>
        </div>
    </div>

    <!-- Section recentes articles -->
    <div class="tw-bg-white tw-shadow tw-rounded-md max-md:tw-col-span-2">
        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
            RECENTES ARTICLES
        </h2>
        <div class="tw-mt-4 tw-p-4 tw-pt-0 tw-space-y-2">
            @if ($Global_recent_articles->count())
                @foreach ($Global_recent_articles->take(3) as $article)
                    <div class="tw-flex tw-items-center tw-text-whit tw-p-2 tw-rounded">
                        <div class="tw-flex tw-gap-2">
                            <img src="{{$article->imageUrl()}}" class="tw-w-[50%] tw-h-[35%]" alt="{{$article->title}}">
                            <div class="">
                                <div class="tw-px-2 tw-mb-2 tw-py-1 tw-w-full tw-rounded-sm tw-bg-teal-600">
                                    <span class="tw-w-[100%] tw-font-bold-sm tw-text-white">{{$article->category->name}}</span>
                                </div>
                                <h4 class=" tw-text-base tw-font-bold tw-text-[#000000bd]">{{$article->title}} </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endif