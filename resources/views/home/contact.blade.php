@extends('home.layouts.home')

@section('title', 'Contact')

@section('content')

    <div class="tw-container tw-mx-auto tw-px-4 tw-py-3">
        <!-- Grille principale -->
        <div class="tw-mt-4 tw-grid tw-grid-cols-1 lg:tw-grid-cols-3 tw-gap-4">
            <!-- Section de gauche : Block contact-->
            <div class="tw-col-span-2">
                <div class="tw-mb-4">
                    <div class="tw-flex tw-flex-col tw-gap-10">
                        <!-- Commentaires -->
                        <div class="tw-grid tw-grid-cols-1 tw-gap-4">
                            <div class="tw-bg-white tw-shadow tw-rounded-md">
                                <h2 class="tw-text-xl tw-font-bold tw-mb-4 tw-border-l-4 tw-py-2 tw-border-b-2 tw-border-l-yellow-500 tw-border-b-gray-200 tw-pl-2">
                                    CONTACTEZ NOUS
                                </h2>
                                <div class="tw-p-4">
                                    <h3 class="tw-text-md tw-font-bold tw-mb-5 tw-py-2 tw-rounded-sm tw-shadow-sm tw-px-4">NOS CONTACTS</h3>
                                    <div class="tw-grid tw-grid-cols-3 tw-gap-4">
                                        <div class="tw-mb-4">
                                            <p class="tw-text-gray-600"><strong>Notre siège</strong><br>123 Street, New York, USA</p>
                                        </div>
                                        <div class="tw-mb-4">
                                            <p class="tw-font-semibold tw-text-gray-700">📧 Envoyez-nous un email</p>
                                            <p class="tw-text-gray-600">info@example.com</p>
                                        </div>
                                        <div class="tw-mb-4">
                                            <p class="tw-font-semibold tw-text-gray-700">📞 Appelez-nous</p>
                                            <p class="tw-text-gray-600">+012 345 6789</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="tw-text-md tw-font-bold tw-mb-4 tw-mx-4 tw-py-2 tw-rounded-sm tw-shadow-sm tw-px-4">
                                    CONTACTEZ-NOUS
                                </h3>

                                <form class="tw-flex tw-flex-col tw-gap-6 tw-p-4 tw-pt-0" action="{{ route('contact.submitForm')}}" method="post">
                                    @csrf
                                    <div class="tw-flex tw-justify-between">
                                        <div class="tw-w-[45%]">
                                            <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Nom</label>
                                            <input type="text" name="name" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                        </div>
                                        <div class="tw-w-[45%]">
                                            <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Email</label>
                                            <input type="email" name="email" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="name" class="tw-block tw-mb-3 tw-text-xl tw-font-medium tw-text-[#242323b4]">Sujet</label>
                                        <input type="text" name="suject" id="name" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600">
                                    </div>
                                    <div class="">
                                        <label for="name" class="tw-block tw-mb-3 tw-text-sm tw-font-medium tw-text-gray-700">Message</label>
                                        <textarea name="message" id="" class=" tw-w-full tw-px-4 tw-py-1 md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4]  focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="tw-w-[45%]">
                                        <button class="tw-bg-teal-600 tw-w-full hover:tw-bg-[#e9e8e8d8] hover:tw-border-teal-600 tw-px-4 tw-py-2 tw-text-[#242323b4] tw-text-xl tw-font-bold md:tw-mr-10 tw-rounded-lg tw-border-2 tw-border-[#242323b4] focus:tw-ring focus:tw-ring-teal-600 focus:tw-border-teal-600"> commenter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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