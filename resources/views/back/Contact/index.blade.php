@extends('back.layout.app')

@section('title', 'Contact')

@section('content')

    <div class="tw-p-6 tw-pb-28 tw-bg-cyan-50 tw-min-h-screen">
        <div class="tw-pt-16 tw-pb-3 md:tw-ml-56 md:tw-pl-6">
            <!-- Titre et Message de Bienvenue -->
            <div class=" tw-flex max-md:tw-flex-col max-md:tw-gap-6 tw-justify-between tw-py-5 tw-mb-7">
                <h1 class="tw-text-2xl tw-font-bold tw-text-gray-800">Ceux qui nous ont contactés</h1>
            </div>

            <!-- Articles Récents -->
            <div class="tw-bg-white tw-rounded-lg tw-shadow-md tw-p-6">
                <div class="tw-flex tw-justify-between tw-items-center tw-mb-4">
                    <h2 class="tw-text-xl tw-font-semibold tw-text-gray-800">Articles récents</h2>
                </div>

                <div class="tw-overflow-x-auto">
                    <table class="tw-w-full tw-text-left tw-border-collapse">
                        <thead>
                            <tr class="tw-bg-gray-100">
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">ID</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Autheur</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Email</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Sujet</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Message</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Date</th>
                                <th class="tw-py-3 tw-px-4 tw-text-gray-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr class="tw-border-b">
                                    <td class="tw-py-3 tw-px-4"> {{$contact->id}} </td>
                                    <td class="tw-py-3 tw-px-4"> {{$contact->name}} </td>
                                    <td class="tw-py-3 tw-px-4 tw-text-teal-600"> {{$contact->email}} </td>
                                    <td class="tw-py-3 tw-px-4"> {{$contact->suject}} </td>
                                    <td class="tw-py-3 tw-px-4"> {{$contact->message}}</td>
                                    <td class="tw-py-3 tw-px-4 tw-text-sm"> {{$contact->created_at->format("M d, y")}}</td>
                                    <td class="tw-py-3 tw-px-4">
                                        <div x-data="{openAction: false}" class="dropdown dropdown-action tw-flex tw-justify-around">
                                            
                                            <div x-show="openAction" x-transition x-cloak class="tw-flex tw-flex-col tw-gap-1 tw-px-2 tw-py-2 tw-bg-[#eff5f569] tw-text-[#fff] tw-rounded-sm">
                                                <form action="{{ route('contact.destroy', $contact)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" tw-flex tw-bg-red-600 hover:tw-bg-[#d47070] tw-border-[#12131327] tw-p-1 tw-rounded-md tw-border">
                                                        <i class="fas fa-trash-alt tw-m-r-5 tw-mt-1 tw-text-[#fff]"></i>
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                            <a @click="openAction = !openAction" href="javascript:void(0);" class="dropdown-toggle tw-pt-3" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection