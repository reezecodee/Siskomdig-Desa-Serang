@extends('layouts.auth')
@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="flex flex-col items-center">
                    <div class="w-full flex-1 max-w-sm">
                        <div class="my-6 text-start">
                            <div
                                class="leading-none px-2 inline-block text-gray-600 bg-white transform translate-y-1/2 text-2xl font-bold mb-2">
                                Login ke Aplikasi
                            </div>
                        </div>

                        <x-auth.alert.success :success="session('success')" />
                        <x-auth.alert.failed :failed="$errors->has('error')" />

                        <div class="mx-auto">
                            <form action="{{ route('login.handler') }}" method="POST">
                                @csrf
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" value="{{ old('email') }}" placeholder="Email" name="email"
                                    autocomplete="off" required />
                                @error('email')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" value="{{ old('password') }}" placeholder="Password" name="password"
                                    required />
                                @error('password')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <div class="my-2 flex justify-between">
                                    <div class="inline-flex items-center">
                                        <label class="flex items-center cursor-pointer relative" for="check-2">
                                            <input type="checkbox" name="remember" value="true"
                                                class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-slate-300 checked:bg-[#45DFB1] checked:border-[#45DFB1]"
                                                id="check-2" />
                                            <span
                                                class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                    viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                                    stroke-width="1">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </label>
                                        <label class="cursor-pointer ml-2 text-sm" for="check-2">
                                            Ingat saya
                                        </label>
                                        @error('remember')
                                            <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <a href="{{ route('show.forgotPassword') }}" class="text-sm hover:text-[#45DFB1]">Lupa password?</a>
                                </div>
                                <button type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-[#45DFB1] text-white-500 w-full py-4 rounded-lg hover:bg-green-300 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="ml-">
                                        Login
                                    </span>
                                </button>
                                <hr class="border-t-2 mt-4">
                                @if ($userCount == 0)
                                    <a href="{{ route('show.register') }}">
                                        <button type="button"
                                            class="mt-3 tracking-wide font-semibold bg-[#45DFB1] text-white-500 w-full py-4 rounded-lg hover:bg-green-300 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                            <span class="ml-">
                                                Register akun
                                            </span>
                                        </button>
                                    </a>
                                @endif
                            </form>
                            <p class="mt-6 text-xs text-gray-600 text-center">
                                Dengan melakukan login saya setuju terhadap
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Syarat & Ketentuan
                                </a>
                                dan
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Kebijakan Privasi
                                </a>
                                aplikasi komunitas digital Desa Serang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-cover bg-center text-center hidden lg:flex"
                style="background-image: url('/images/banner/kantor-desa.webp');">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat">
                </div>
            </div>
        </div>
    </div>
@endsection
