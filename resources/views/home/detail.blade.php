@extends('home.layouts.home')

@section('title', 'Detail')

@section('content')

    <div class="tw-container tw-mx-auto tw-px-4">
        <!-- Grille principale -->
        <div class="tw-mt-4 tw-grid tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-4">
            <!-- Section de gauche : Drones et Robotique + Articles -->
            <div class="tw-col-span-2">
                <div class="tw-mb-4">
                    <!-- Titre de la catégorie -->
                    <div class="tw-flex tw-justify-between tw-items-center tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                        <h2 class="tw-text-xl tw-font-bold tw-border-l-4 tw-border-yellow-500 tw-pl-2"> {{$article->title}} </h2>
                        <a href="#" class="tw-text-[#0000007e] tw-font-semibold tw-text-sm">Voir tous</a>
                    </div>

                    <div class="tw-flex tw-flex-col tw-gap-6">

                        <!-- Details d'article -->
                        <div class="tw-grid tw-grid-cols-1 tw-gap-4 tw-mt-4">
                            <div class="tw-bg-white tw-shadow tw-rounded-md tw-p-4">
                                <div class="tw-bg-red tw-mb-7">
                                    <img src="{{$article->imageUrl()}}" alt="">
                                </div>
                                <p class="tw-text-gray-600 tw-text-sm tw-mt-2">{{$article->content}} </p>
                                <div class="tw-flex tw-justify-between tw-items-center tw-mt-4 tw-text-gray-500 tw-text-xs">
                                    <div class="tw-flex tw-gap-2">
                                        <img src="{{ asset('back_auth/assets/profile/'.$article->author->image) }}" class="tw-w-10 tw-h-10 tw-rounded-full" alt="{{$article->author->image ? explode(' ', $article->author->name)[0] : 'image'}}">
                                        <span class="tw-mt-3">{{$article->author->name}} </span>
                                    </div>
                                    <div class="tw-flex tw-space-x-2">
                                        <span>👁️ {{$article->views}}</span>
                                        <span>💬{{$article->comments->count()}} </span>
                                    </div>
                                </div>
                            </div>
                            @if ($article->isSharable)
                                <!-- share this library des buttoms de  partage -->
                                <div class="sharethis-inline-share-buttons tw-z-0" style="z-index: 0;"></div>
                            @endif
                        </div>
                        
                        @if ($article->isComment)
                            
                            <!-- Display commentaires -->
                            <div class="tw-grid tw-grid-cols-1 tw-gap-4">
                                <div class="tw-bg-white tw-shadow tw-rounded-md tw-pb-4">
                                    <h3 class="tw-text-lg tw-font-bold tw-mb-6 tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2"> {{$article->comments->count()}} COMMENTAIRES</h3>
                                    <div class="tw-grid tw-grid-cols-2 tw-gap-3 tw-mt-4 tw-px-4 tw-text-gray-500 tw-text-xs">
                                        @foreach ($article->comments()->where('is_active',1)->get() as $comment)
                                            <div class="tw-flex tw-flex-col tw-gap-1 tw-bg-gray-100 tw-rounded-sm tw-p-2">
                                                <div class="tw-flex tw-gap-2">
                                                    <img src="{{ asset('back_auth/assets/profile/'.$article->author->image) }}" class="tw-w-10 tw-h-10 tw-rounded-full" alt="{{$article->author->image ? explode(' ', $article->author->name)[0] : 'image'}}">
                                                    <div class="tw-flex tw-gap-1 tw-pt-3">
                                                        <h3 class="tw-font-bold tw-text-[#000000c7]">{{$comment->name}}</h3>
                                                        <span class="">{{$comment->created_at->format("M d,Y")}}</span>
                                                    </div>
                                                </div>
                                                <div class=" tw-space-x-2">
                                                    <p class="tw-text-gray-600 tw-text-sm tw-mt-2">{{$comment->message}} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div> 
                        
                            <!-- Commentaires -->
                            <div class="tw-grid tw-grid-cols-1 tw-gap-4 tw-mt-4">
                                <div class="tw-bg-white tw-shadow tw-rounded-md">
                                
                                    <h2 class="tw-text-xl tw-font-bold tw-mb-6 tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
                                        LAISSEZ UN COMMENTAIRE
                                    </h2>
                                    
                                    <form class="tw-flex tw-flex-col tw-gap-6 tw-p-4" action="{{ route('comment', $article->id)}}" method="post">
                                        @csrf
                                        <div class="tw-flex tw-justify-between">
                                            <div class="tw-w-[45%]">
                                                <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Nom</label>
                                                <input type="text" name="name" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                            </div>
                                            <div class="tw-w-[45%]">
                                                <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Email</label>
                                                <input type="mail" name="email" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Site web</label>
                                            <input type="text" name="web_site" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                        </div>

                                        <div class="">
                                            <label for="name" class="tw-block tw-mb-3 tw-text-sm tw-font-medium tw-text-gray-700">Commentaire</label>
                                            <textarea name="message" id="" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" cols="30" rows="10"></textarea>
                                        </div>

                                        <div class=" md:tw-w-[45%] tw-w-100">
                                            <input type="hidden" name="article_id" value="{{ $article->id }}"> </input>
                                            <button class="tw-bg-teal-600 tw-w-full hover:tw-bg-[#e9e8e8d8] hover:tw-border-teal-600 tw-px-4 tw-py-2 tw-text-[#242323b4] tw-text-xl tw-font-bold md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600"> commenter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

           <!-- Section de droit : Drones et Robotique + Articles -->
            <div class="tw-flex tw-flex-col max-md:tw-mt-10 tw-gap-10 max-md:tw-col-span-2">
                @include('home.follower')
            </div>
        </div>
    </div>

@endsection