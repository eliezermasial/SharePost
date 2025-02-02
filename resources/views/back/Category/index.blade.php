@extends('back.layout.app')
@section('title', 'categorie')

@section('dashboard-header-title')
<div class="row">
    <div class="col tw-mt-10">
        <div class=" tw-flex tw-justify-between">
            <h4 class="card-title float-left mt-2">Categories</h4>
            <a href="{{route('category.create')}}" class="btn btn-primary float-right veiwbutton tw-rounded-md tw-p-2 tw-text-[#fff]">Ajouter une categorie</a>
        </div>
    </div>
</div>
@endsection

@section('Dashboard-content')
<div class="row tw-bg-[#fff] tw-mt-10">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body booking_card"> 
                <div class="table-responsive">
                    <table class="tw-relative datatable table table-stripped table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>ID Categorie</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CAT-0001</td>
                                <td>Nom categorie</td>
                                <td>Breve description</td>
                                <td class="">
                                    <div x-data="{openAction: false}" class="dropdown dropdown-action tw-flex tw-justify-around">
                                        
                                        <div x-show="openAction" x-transition x-cloak class="dropdown-menu tw-flex tw-flex-col tw-px-2 tw-py-1 tw-bg-[#009688] tw-text-[#fff]">
                                            <a class="dropdown-item" href=""><i class="fas fa-pencil-alt tw-m-r-5 tw-text-[#fff]"></i> Modifier</a>
                                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt tw-m-r-5 tw-text-[#fff]"></i> Supprimer</a>
                                        </div>
                                        
                                        <a @click="openAction = !openAction" href="javascript:void(0);" class="dropdown-toggle tw-pt-3" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                                        </a>
                                    </div>
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