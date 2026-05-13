@extends('layout.guest')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 to-green-300 p-5">

    <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-md w-full text-center">

        <!-- Success Icon -->
        <div class="flex justify-center mb-6">

            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center">

                <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    class="w-14 h-14 text-green-600" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        stroke-width="3" 
                        d="M5 13l4 4L19 7" 
                    />
                </svg>

            </div>

        </div>

        <!-- Title -->
        <h1 class="text-4xl font-bold text-green-600 mb-4">
            Success!
        </h1>

        <!-- Message -->
        <p class="text-gray-600 text-lg mb-8">
            Your operation has been completed successfully.
        </p>

        <!-- Button -->
        <a 
            href="/" 
            class="inline-block bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-xl text-lg font-semibold transition duration-300"
        >
            Go Home
        </a>

    </div>

</div>

@endsection