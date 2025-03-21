<footer class="tw-bg-gray-900 tw-text-white tw-py-10">
    <div class="tw-container tw-mx-auto tw-grid tw-grid-cols-1 md:tw-grid-cols-4 tw-gap-6 tw-px-4">
        <!-- Contactez Nous -->
        <div>
            <h2 class="tw-font-semibold tw-text-lg tw-mb-4">CONTACTEZ NOUS</h2>
            <div class="tw-flex md:tw-flex-col tw-justify-between">
                <div>
                    <p>area City, Country</p>
                    <p>+012 345 67890</p>
                    <p>info@example.com</p>
                </div>
                <div class="tw-flex tw-space-x-2 tw-mt-4">
                    <span class="tw-w-8 tw-h-8 tw-bg-gray-700 tw-flex tw-items-center tw-justify-center tw-rounded">
                        <i class="fa fa-facebook"></i>
                    </span>
                    <span class="tw-w-8 tw-h-8 tw-bg-gray-700 tw-flex tw-items-center tw-justify-center tw-rounded">
                        <i class="fa fa-twitter"></i>
                    </span>
                    <span class="tw-w-8 tw-h-8 tw-bg-gray-700 tw-flex tw-items-center tw-justify-center tw-rounded">
                        <i class="fa fa-instagram"></i>
                    </span>
                    <span class="tw-w-8 tw-h-8 tw-bg-gray-700 tw-flex tw-items-center tw-justify-center tw-rounded">
                        <i class="fa fa-linkedin"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Infos Populaires -->
        <div>
            <h2 class="tw-font-semibold tw-text-lg tw-mb-4">INFOS POPULAIRES</h2>
            <div class="tw-grid tw-grid-cols-2 tw-gap-3">
                @foreach ($Global_fanous_articles as $article)
                <div class="tw-border-b tw-border-gray-700 tw-pb-2">
                    <span class="tw-bg-teal-600 tw-text-white tw-px-2 tw-text-xs tw-rounded">{{$article->category->name}} </span>
                    <p class="tw-text-sm tw-mt-1"> {{$article->title}} </p>
                    <p class="tw-text-xs tw-text-gray-400">{{$article->created_at->format("M d, y")}}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Catégories -->
        <div>
            <h2 class="tw-font-semibold tw-text-lg tw-mb-4">CATÉGORIES</h2>
            <div class="tw-grid tw-grid-cols-2 tw-gap-3">
                @foreach ($Global_category as $category)
                    <span class="tw-bg-gray-700 tw-text-white tw-text-xs tw-px-3 tw-py-1 tw-rounded">
                        {{$category->name}}
                    </span>
                @endforeach
            </div>
        </div>

        <!-- Flickr Photos -->
        <div class="">
            <h2 class="md:tw-ml-20 tw-font-semibold tw-text-lg tw-mb-4">FLICKR PHOTOS</h2>
            <div class="tw-grid tw-grid-cols-3 tw-text-end tw-gap-2 md:tw-ml-20 tw-p-0">
                @foreach ($Global_recent_articles->take(6) as $article)
                    <div class="tw-w-16 tw-h-16 tw-bg-gray-700">
                        <img src="{{$article->imageUrl()}}" class=" tw-h-full" alt="{{$article->title ? $article->title : 'aucune article'}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="tw-text-center tw-mt-6 tw-text-gray-400 tw-border-t tw-border-gray-700 tw-pt-4">
        © Your Site Name. All Rights Reserved. Design by <span class="tw-text-gray-300">Freewebsitecode</span>
    </div>
</footer>
