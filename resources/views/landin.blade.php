@extends('layouts.app') {{-- O usa 'layouts.base' según tu plantilla --}}

@section('content')
<div class="bg-[#fef7ef] text-black font-sans">
    <div class="relative">
        <!-- Header con imagen de fondo -->
        <img src="{{ asset('images/header-image.png') }}" alt="Roof worker" class="w-full h-auto rounded-lg">
        <!-- Sección de agradecimiento -->
        <div class="absolute bottom-0 w-full bg-[#0e4936] text-white py-6 text-center">
            <h1 class="text-3xl font-bold">THANK YOU</h1>
            <p class="text-3xl mt-2">for taking the next step to increase your sales</p>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container mx-auto px-4 py-12">
        <h2 class="text-xl font-semibold mb-4">Plotterly helps you find decision-makers, property owners, and business owners faster.</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>We use the power of Google Maps to find the right contacts for your business.</li>
            
        </ul>
        <div class="w-3/4 mx-auto my-6">
            <video class="w-full rounded-xl shadow-md" controls>
                <source src="{{ asset('videos/targeting.mp4') }}" type="video/mp4">
                Tu navegador no soporta video HTML5.
            </video>
        </div>
        {{-- <div class="mt-8">
            <h3 class="text-2xl font-bold text-green-800 mb-2">WAIT!!</h3>
            <p class="font-semibold mb-2">Before you sign up for your free account, consider this:</p>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Schedule a 30-minute Zoom meeting to review your sales process.</li>
                <li>If you do, we'll activate your FREE account plus add 100 leads for free.</li>
            </ul>
            <p class="mt-4 font-bold text-black">No questions. No commitments. No credit cards.</p>
        </div>
        <div class="mt-8">
            <h4 class="font-semibold mb-2">What you get with your 100 free leads:</h4>
            <div class="my-6">
                <video class="w-full rounded-xl shadow-md" controls>
                    <source src="{{ asset('videos/leads.mp4') }}" type="video/mp4">
                    Tu navegador no soporta video HTML5.
                </video>
            </div>
        </div> --}}
        <section class="container mx-auto px-4 py-8">
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8"> --}}
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 my-8">
                <!-- Contenido -->
                <div >
                    <h2 class="text-2xl font-bold text-green-800 mb-4">WAIT!!</h2>
                    <p class="font-semibold mb-2">
                        Before you sign up for your free account, consider this:
                    </p>
                    <ul class="list-disc list-inside mb-4 space-y-1 text-gray-800">
                        <li>Schedule a 30-minute Zoom meeting to review your sales process.</li>
                        <li>If you do, we'll activate your FREE account plus add 100 leads for free.</li>
                    </ul>
                    <p class="font-bold text-gray-900 mb-4">
                        No questions. No commitments. No credit cards.
                    </p>
        
                    <div class="my-6">
                        <video class="w-full rounded-xl shadow-md" controls>
                            <source src="{{ asset('videos/leads.mp4') }}" type="video/mp4">
                            Tu navegador no soporta video HTML5.
                        </video>
                    </div>
                </div>
        
                <!-- Imagen de la persona -->
                {{-- <div class="flex justify-center md:justify-start"> --}}
                <div class="flex justify-center">
                    <img src="{{ asset('images/persona1.png') }}" alt="Business Man" class="w-64 md:w-72 lg:w-80 rounded-xl shadow-lg">
                </div>
            </div>
        </section>
        
        <!-- Botones -->
        {{-- <div class="mt-8 flex flex-col md:flex-row gap-4 justify-around">
            <a href="#" class="bg-[#0e4936] hover:bg-green-900 text-white font-semibold py-3 px-6 rounded text-center">Give me the free version</a>
            <a href="#" class="bg-[#0e4936] hover:bg-green-950 text-white font-semibold py-3 px-6 rounded text-center">
                Give me the free version + 100 leads <br class="hidden md:inline"> Schedule Zoom now
            </a>
        </div> --}}
        <div class="mt-6 flex flex-col md:flex-row gap-6 justify-center items-center">
            <a href="#" class="bg-[#0e4936] hover:bg-green-800 text-white font-bold text-lg md:text-xl px-8 py-5 rounded-2xl shadow-lg transition-all duration-300 text-center w-full md:w-auto">
                Give me the free version
            </a>
            <a href="#" class="bg-[#0e4936] hover:bg-green-900 text-white font-bold text-lg md:text-xl px-8 py-5 rounded-2xl shadow-lg transition-all duration-300 text-center w-full md:w-auto">
                Give me the free version + 100 leads <br class="hidden md:inline"> Schedule Zoom now
            </a>
        </div>
        
    </div>

</div>



{{-- <div class="bg-[#fef7ef] text-black font-sans">
    <div class="relative">
        <!-- Header con imagen de fondo -->
        <img src="{{ asset('images/header-image.png') }}" alt="Roof worker" class="w-full h-auto rounded-lg">
        <!-- Sección de agradecimiento -->
        <div class="absolute bottom-0 w-full bg-[#0e4936] text-white py-6 text-center">
            <h1 class="text-3xl font-bold">THANK YOU</h1>
            <p class="text-3xl mt-2">for taking the next step to increase your sales</p>
        </div>
    </div>

    <!-- Contenido principal con imagen al lado en desktop -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row items-start gap-8">
            <!-- Texto principal -->
            <div class="flex-1">
                <h2 class="text-xl font-semibold mb-4">
                    Plotterly helps you find decision-makers, property owners, and business owners faster.
                </h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>We use the power of Google Maps to find the right contacts for your business.</li>
                </ul>

                <!-- Video 1 -->
                <div class="my-6">
                    <video class="w-full rounded-xl shadow-md" controls>
                        <source src="{{ asset('videos/targeting.mp4') }}" type="video/mp4">
                        Tu navegador no soporta video HTML5.
                    </video>
                </div>

                <!-- Sección de espera -->
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-green-800 mb-2">WAIT!!</h3>
                    <p class="font-semibold mb-2">Before you sign up for your free account, consider this:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Schedule a 30-minute Zoom meeting to review your sales process.</li>
                        <li>If you do, we'll activate your FREE account plus add 100 leads for free.</li>
                    </ul>
                    <p class="mt-4 font-bold text-black">No questions. No commitments. No credit cards.</p>
                </div>

                <!-- Video 2 -->
                <div class="mt-8">
                    <h4 class="font-semibold mb-2">What you get with your 100 free leads:</h4>
                    <div class="my-6">
                        <video class="w-full rounded-xl shadow-md" controls>
                            <source src="{{ asset('videos/leads.mp4') }}" type="video/mp4">
                            Tu navegador no soporta video HTML5.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Imagen del hombre con traje -->
            <div class="flex-shrink-0 w-full lg:w-80 mx-auto lg:mx-0">
                <img src="{{ asset('images/persona1.png') }}" alt="Business Man"
                     class="rounded-xl shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out w-full">
            </div>
        </div>

        <!-- Botones -->
        <div class="mt-12 flex flex-col md:flex-row gap-4 justify-center">
            <a href="#" class="bg-[#0e4936] hover:bg-green-900 text-white font-semibold py-3 px-6 rounded text-center">
                Give me the free version
            </a>
            <a href="#" class="bg-[#0e4936] hover:bg-green-950 text-white font-semibold py-3 px-6 rounded text-center">
                Give me the free version + 100 leads <br class="hidden md:inline"> Schedule Zoom now
            </a>
        </div>
    </div>
</div> --}}

@endsection
