@extends('back.layout.app')

@section('title', isset($seting) && $seting->exists() ? 'modifier le site'.' '.$seting->web_site_name : 'create site')

@section('content')
    @if (Route::currentRouteName() == 'seting.edit')
    <div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
        <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
            <!-- Titre et Message de Bienvenue -->
            <div class=" tw-flex tw-justify-between tw-py-5 tw-mb-5 md:tw-mb-7">
                <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Modifier le site : {{$seting->web_site_name}} </h1>
            </div>
            <form action="{{ route('seting.update', $seting)}}" method="POST" enctype="multipart/form-data" class="tw-bg-white tw-p-6  md:tw-mt-10 tw-shadow tw-rounded-lg">
                @csrf

                @method('PUT')

                <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4 tw-mt-5">
                    <div class="">
                        <label class="tw-block tw-font-medium">Nom de l'autheur</label>
                        <input type="text" name="web_site_name" value="{{ old('web_site_name',$seting->web_site_name)}}" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">logo</label>
                        <input type="file" name="logo" class="tw-w-full tw-px-4 tw-py-1 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Email de l'autheur</label>
                        <input type="text" name="email" value="{{ old('email',$seting->email)}}" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Phone</label>
                        <input type="number" name="phone" value="{{ old('phone',$seting->phone)}}" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Apropos</label>
                        <textarea name="about" value="{{ old('about')}}" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" rows="5">
                            {{ $seting->about}}
                        </textarea>
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Address</label>
                        <input type="text" name="address" value="{{ old('address',$seting->address)}}" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                </div>
                <button type="submit" class="tw-mt-5 tw-bg-teal-600 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-w-full md:tw-w-auto">Enregistrer</button>
            </form>
        </div>
    </div>

    @else
    
    <div class="tw-p-6 tw-bg-cyan-50 tw-min-h-screen">
        <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
            <!-- Titre et Message de Bienvenue -->
            <div class=" tw-flex tw-justify-between tw-py-5 tw-mb-5 md:tw-mb-7">
                <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Enregistrer Site</h1>
            </div>
            <form action="{{ route('seting.store')}}" method="POST" enctype="multipart/form-data" class="tw-bg-white tw-p-6  md:tw-mt-10 tw-shadow tw-rounded-lg">
                @csrf
                <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-4 tw-mt-5">
                    <div class="">
                        <label class="tw-block tw-font-medium">Nom de l'autheur</label>
                        <input type="text" name="web_site_name" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">logo</label>
                        <input type="file" name="logo" class="tw-w-full tw-px-4 tw-py-1 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" value="">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Email de l'autheur</label>
                        <input type="text" name="email" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Phone</label>
                        <input type="number" name="phone" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Apropos</label>
                        <textarea name="about" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" rows="5"></textarea>
                    </div>
                    <div class="">
                        <label class="tw-block tw-font-medium">Address</label>
                        <input type="text" name="address" class="tw-w-full tw-px-4 tw-py-2 tw-mt-5 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                    </div>
                </div>
                <button type="submit" class="tw-mt-5 tw-bg-teal-600 tw-text-white tw-px-4 tw-py-2 tw-rounded-lg tw-w-full md:tw-w-auto">Enregistrer</button>
            </form>
        </div>
    </div>
    @endif
@endsection