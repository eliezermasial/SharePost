@extends('back.app')
@section('title', 'Dashboard-Accueil')

@section('dashboard-header-title')
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h3 class="page-title mt-3">Hello, Bonjour John Doe!</h3>
            <ul class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </div>
@endsection


@section('Dashboard-content')
<div class="row tw-flex tw-justify-between ">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill tw-bg-white">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">236</h3>
                        <h6 class="text-muted">Total Articles</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path> <circle cx="8.5" cy="7" r="4"></circle> <line x1="20" y1="8" x2="20" y2="14"></line> <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 ">
        <div class="card board1 fill tw-bg-white">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">10</h3>
                        <h6 class="text-muted">Total Catégories</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill tw-bg-white">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">1538</h3>
                        <h6 class="text-muted">Total Commentaires</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-fi">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card board1 fill tw-bg-white">
            <div class="card-body">
                <div class="dash-widget-header">
                    <div>
                        <h3 class="card_widget_header">364</h3>
                        <h6 class="text-muted">Abonnements</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header tw-flex tw-justify-between">
                <h4 class="card-title float-left mt-2">Articles recents</h4>
                <button type="button" class="btn btn-primary tw-text-white tw-p-1 tw-rounded-md hover:tw-bg-green-900 tw-shadow-sm">
                    Voir tous
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center">
                        <thead>
                            <tr>
                                <th>ID Articles</th>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Catégories</th>
                                <th class="text-right">Auteur</th>
                                <th class="text-center">Publication</th>
                            </tr>
                        </thead>
                        <tbody class="tw-bg-white">
                            <tr>
                                <td class="text-nowrap">
                                    <div>ART-0001</div>
                                </td>
                                <td class="text-nowrap"></td>
                                <td>Intelligence artificielle</td>
                                <td>Tech</td>
                                <td class="text-center">John Doe</td>
                                <td class="text-center">
                                    <span class="badge badge-pill bg-success inv-badge tw-rounded-xl tw-p-1 roun">PUBLIE</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection