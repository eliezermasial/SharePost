@extends('back.app')

@section('title', 'Dashboard-profile')

@section('dashboard-header-title')

<div class="row">
    <div class="col">
        <h3 class="page-title">Profile</h3>
        <ul class="breadcrumb tw-flex">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a><span class="tw-px-1">/</span></li>
            <li class="breadcrumb-item active {{Route::currentRouteName() == 'profile.edit' ? 'tw-bg-[#009688] tw-border tw-border-[#49a199fd] tw-rounded-sm' : ''}}">Profile</li>
        </ul>
    </div>
</div>
@endsection

@section('Dashboard-content')
<div x-data="{password_tab : false}" class="row !tw-pb-44 tw-relative">
    @auth
    <div class="col-md-12">
        <div class="profile-header !tw-pb-0">
            <div class="row tw-flex align-items-center">
                <div class="col-auto profile-image tw-flex md:tw-flex-col md:tw-items-start">
                    <div class="tw-flex tw-justify-center tw-items-center">
                        <img 
                            src="{{ asset('back_auth/assets/profile/'.\Illuminate\Support\Facades\Auth::user()->image) }}" 
                            alt="User Image" 
                            class="tw-rounded-full tw-w-32 tw-h-32 tw-object-cover tw-aspect-square"
                        />
                    </div>
                   
                    <div class="max-sm:tw-px-4 tw-flex tw-flex-col tw-w-full tw-h-full tw-justify-center md:tw-justify-end md:tw-py-2">
                        <h2 class="user-name max-md:tw-text-4xl tw-text-left"> {{Illuminate\Support\Facades\Auth::user()->name}} </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-menu">
            <ul class="nav nav-tabs nav-tabs-solid tw-flex !tw-pt-2">
                <li class="nav-item tw-me-2 max-sm:tw-py-2">
                    <a class="nav-link active !tw-border !tw-border-[#009688] !tw-rounded-md tw-p-1 hover:tw-p-2 hover:tw-bg-[#6cd4ca] md:tw-py-2" data-toggle="tab" href="#per_details_tab">A propos</a>
                </li>
                <li @click="password_tab = !password_tab" class="nav-item max-sm:tw-py-2">
                    <a class="nav-link  !tw-border !tw-border-[#009688] tw-p-1 hover:tw-p-2 !tw-rounded-md md:tw-py-2" data-toggle="tab" href="#password_tab">Mot de passe</a>
                </li>
            </ul>
        </div>
        @if (session('status'))
            <div class="alert alert-success"> {{session('status')}} </div>
        @endif
        <div class="tab-content profile-tab-cont tw-my-5   ">
            <div class="tab-pane fade show active" id="per_details_tab">
                <div class="row">
                    <div class="col-lg-12 tw-bg-[#fff]">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title tw-flex tw-justify-between tw-mb-4">
                                    <span>Informations Personelles</span>
                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details">
                                        <i class="fa fa-edit mr-1"></i>Modifier
                                    </a>
                                </h5>

                                <div class="row tw-flex md:tw-ps-44 tw-my-4">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 md:tw-ms-6"> {{'Nom'}} </p>
                                    <p class="col-sm-9 tw-ps-3"> {{explode(' ',$user->name)[1]}} </p>
                                </div>
                                <div class="row mt-5 tw-flex md:tw-ps-44">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 tw-ps-1"> {{'Prenom'}} </p>
                                    <p class="col-sm-9 tw-ps-3"> {{explode(' ',$user->name)[0]}} </p>
                                </div>
                                <div class="row tw-flex md:tw-ps-44">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 md:tw-ms-5"> {{'Email'}} </p>
                                    <p class="col-sm-9 tw-ps-3">
                                        <a href="" class=" tw-ps- "> {{$user->email}} </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade tw-hidden tw-bg-[#fff] tw-z-10 tw-border tw-top-52  md:tw-w-1/2 md:tw-left-1/3 md:tw-right-1/3 tw-fixed" id="edit_personal_details" aria-hidden="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered tw-p-4" role="document">
                                <div class="modal-content">
                                    <div class="modal-header tw-flex tw-justify-between tw-shadow-sm tw-py-3 tw-mb-6">
                                        <h5 class="modal-title">Personal Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="modal-body" action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row form-row tw-flex tw-flex-col tw-gap-4">
                                            
                                            <div class="tw-flex tw-justify-between">
                                                <!-- Nom -->
                                                <div class="col-12 col-sm-6 form-group tw-flex tw-flex-col tw-pe-2">
                                                    <label class="tw-font-medium tw-mb-3">Nom</label>
                                                    <input type="text" class="form-control" name="name" value="{{Illuminate\Support\Facades\auth::user()->name}}" required>
                                                </div>

                                                <!-- Email (sur toute la largeur) -->
                                                <div class="col-12 col-sm-6 form-group tw-flex tw-flex-col tw-pe-2">
                                                    <label class="tw-font-medium tw-mb-3">Email</label>
                                                    <input type="email" class="form-control" name="email" value="{{Illuminate\Support\Facades\auth::user()->email}}" required>
                                                </div>
                                            </div>

                                            <!-- Pièce jointe (sur toute la largeur) -->
                                            <div class="col-12">
                                                <div class="form-group tw-flex tw-flex-col tw-bottom-2">
                                                    <label class="tw-font-medium tw-mb-2">Pièce jointe</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary tw-rounded-sm tw-w-full tw-py-3">Enregistrer les modifications</button>
                                    </form>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- modifie pass word -->
            <div x-cloak x-show="password_tab" @click.away="password_tab = false" class="tab-pane fade tw-mt-7 tw-bg-[#fff]">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modifier le mot de passe</h5>
                        <div class="row">
                            <div class="col-md-10 col-lg-6">
                                <form class=" tw-pt-5" action="{{route('password.update')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group tw-flex tw-flex-col tw-gap-4">
                                        <label>Ancien mot de passe</label>
                                        <input type="password" name="current_password" class="form-control lg:tw-w-1/2 tw-border-2 tw-border-[#009688] tw-rounded-md tw-shadow-md hover:tw-bg-[#ffffff8e] hover:tw-py-6 focus:tw-outline-none focus:tw-border-[#009688]" required>
                                    </div>
                                    
                                    <div class="form-group  tw-flex tw-flex-col tw-gap-4">
                                        <label>Nouveau mot de passe</label>
                                        <input type="password" name="password" class="form-control lg:tw-w-1/2 tw-border-2 tw-border-[#009688] tw-rounded-md tw-shadow-md hover:tw-bg-[#ffffff8e] hover:tw-py-6 focus:tw-outline-none focus:tw-border-[#009688]" required>
                                    </div>
                                   
                                    <div class="form-group  tw-flex tw-flex-col tw-gap-4">
                                        <label>Confirmer motde passe</label>
                                        <input type="password" name="password_confirmation" class="form-control lg:tw-w-1/2 tw-border-2 tw-border-[#009688] tw-rounded-md tw-shadow-md hover:tw-bg-[#ffffff8e] hover:tw-py-6 focus:tw-outline-none focus:tw-border-[#009688]" required>
                                    </div>

                                    <button class="btn btn-primary tw-p-2 tw-w-1/2 tw-rounded-md tw-shadow-md hover:tw-bg-[#88d8d0] hover:tw-font-bold" type="submit">Enregistrer les modifications</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
</div>
@endsection