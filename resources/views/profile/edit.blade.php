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
<div class="row !tw-pb-44 tw-relative">
    @auth
    <div class="col-md-12">
        <div class="profile-header !tw-pb-0">
            <div class="row tw-flex align-items-center">
                <div class="col-auto profile-image tw-flex md:tw-flex-col md:tw-items-start">
                    <div class="">
                        <a href="#">
                            <img src="{{ asset('back_auth/assets/img/logo.png') }}" alt="User Image" class="avatar-img rounded-circle"/>
                        </a>
                    </div>
                    <div class="max-sm:tw-px-4 tw-flex tw-flex-col tw-w-full tw-h-full tw-justify-center md:tw-justify-end md:tw-py-2">
                        <h2 class="user-name max-md:tw-text-4xl tw-text-left"> {{Illuminate\Support\Facades\Auth::user()->name}} </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-menu">
            <ul class="nav nav-tabs nav-tabs-solid tw-flex !tw-pt-2">
                <li class="nav-item tw-me-2 max-sm:tw-py-2"> <a class="nav-link active !tw-rounded-md tw-p-1 hover:tw-p-2 hover:tw-bg-[#6cd4ca] md:tw-py-2" data-toggle="tab" href="#per_details_tab">A propos</a> </li>
                <li class="nav-item max-sm:tw-py-2"> <a class="nav-link  !tw-border !tw-border-[#009688] tw-p-1 hover:tw-p-2 !tw-rounded-md md:tw-py-2" data-toggle="tab" href="#password_tab">Mot de passe</a> </li>
            </ul>
        </div>
        <div class="tab-content profile-tab-cont max-sm:tw-mt-10  tw-bg-[#fff] ">
            <div class="tab-pane fade show active" id="per_details_tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title tw-flex tw-justify-between tw-mb-4">
                                    <span>Informations Personelles</span>
                                    <a class="edit-link" data-toggle="modal" href="#edit_personal_details">
                                        <i class="fa fa-edit mr-1"></i>Modifier
                                    </a>
                                </h5>
                                <div class="row mt-5 tw-flex md:tw-ps-44">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 tw-ps-1"> {{'Prenom'}} </p>
                                    <p class="col-sm-9 tw-ps-3"> {{explode(' ',Illuminate\Support\Facades\Auth::user()->name)[0]}} </p>
                                </div>
                                <div class="row tw-flex md:tw-ps-44 tw-my-4">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 md:tw-ms-6"> {{'Nom'}} </p>
                                    <p class="col-sm-9 tw-ps-3"> {{explode(' ',Illuminate\Support\Facades\Auth::user()->name)[1]}} </p>
                                </div>
                                <div class="row tw-flex md:tw-ps-44">
                                    <p class="col-sm-3 text-sm-right mb-0 mb-sm-3 md:tw-ms-5"> {{'Email'}} </p>
                                    <p class="col-sm-9 tw-ps-3">
                                        <a href="" class=" tw-ps- "> {{Illuminate\Support\Facades\Auth::user()->email}} </a>
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
                                    <form class="modal-body">
                                        <div class="row form-row tw-flex tw-flex-col tw-gap-4">
                                            
                                            <div class="tw-flex tw-justify-between">
                                                <!-- Nom -->
                                                <div class="col-12 col-sm-6 form-group tw-flex tw-flex-col tw-pe-2">
                                                    <label class="tw-font-medium tw-mb-3">Nom</label>
                                                    <input type="text" class="form-control" value="{{Illuminate\Support\Facades\auth::user()->name}}">
                                                </div>

                                                <!-- Email (sur toute la largeur) -->
                                                <div class="col-12 col-sm-6 form-group tw-flex tw-flex-col tw-pe-2">
                                                    <label class="tw-font-medium tw-mb-3">Email</label>
                                                    <input type="email" class="form-control" value="{{Illuminate\Support\Facades\auth::user()->email}}">
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
            <!--
            <div id="password_tab" class="tab-pane fade tw-bg-yellow-400">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modifier le mot de passe</h5>
                        <div class="row">
                            <div class="col-md-10 col-lg-6">
                                <form>
                                    <div class="form-group">
                                        <label>Ancien mot de passe</label>
                                        <input type="password" class="form-control"> </div>
                                    <div class="form-group">
                                        <label>Nouveau mot de passe</label>
                                        <input type="password" class="form-control"> </div>
                                    <div class="form-group">
                                        <label>Confirmer motde passe</label>
                                        <input type="password" class="form-control"> </div>
                                    <button class="btn btn-primary" type="submit">Enregistrer les modifications</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    @endauth
</div>
@endsection