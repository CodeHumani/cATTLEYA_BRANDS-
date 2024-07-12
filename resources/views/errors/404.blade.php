@extends('layouts.errors')
@section('content')
    <main class="flex w-full grow items-center justify-center p-6 bg-gray-100 dark:bg-gray-900">
        <div class="flex max-w-screen-lg flex-col items-center gap-12 lg:flex-row lg:gap-24">
            <div class="relative">
                <img class="hidden dark:block animate-bounce" width="440" src="{{ URL::to('assets/images/illustrations/penguins-dark.svg') }}" alt="404 image">
                <img class="block dark:hidden animate-bounce" width="440" src="{{ URL::to('assets/images/illustrations/penguins.svg') }}" alt="404 image">
            </div>
            <div class="text-center lg:text-left">
                <p class="text-7xl font-bold text-primary dark:text-accent lg:mt-0 transition-transform duration-500 hover:scale-105">
                    404
                </p>
                <p class="mt-6 text-xl font-semibold text-slate-800 dark:text-navy-50 lg:mt-10 lg:text-3xl transition-transform duration-500 hover:scale-105">
                    Oops. This Page Not Found.
                </p>
                <p class="pt-2 text-slate-500 dark:text-navy-200 lg:text-lg">
                    The page you are looking for is not available.
                </p>
                <a href="{{ route('home') }}" class="btn mt-10 h-11 bg-primary text-base font-medium text-white transition-all duration-200 transform hover:-translate-y-1 hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                    Back To Home
                </a>
            </div>
        </div>
    </main>
@endsection
