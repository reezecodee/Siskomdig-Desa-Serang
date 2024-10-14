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
                                Lupa Password
                            </div>
                            <div
                                class="leading-none px-2 inline-block text-gray-600 bg-white transform translate-y-1/2 text-sm font-medium">
                                Masukkan data akun dan password baru Anda.
                            </div>
                        </div>

                        <x-auth.alert.success :success="session('success')" />
                        <x-auth.alert.failed :failed="$errors->has('error')" />

                        <div class="mx-auto">
                            <form action="{{ route('password.changePassword') }}" method="POST">
                                @csrf
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="text" value="{{ old('username') }}" placeholder="Username" name="username"
                                    autocomplete="off" required />
                                @error('username')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="email" value="{{ old('email') }}" placeholder="Email" name="email"
                                    autocomplete="off" required />
                                @error('email')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" value="{{ old('new_password') }}" placeholder="Password baru" name="new_password"
                                    required />
                                @error('new_password')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" value="{{ old('password_confirm') }}" placeholder="Konfirmasi password" name="password_confirm"
                                    required />
                                @error('password_confirm')
                                    <span class="text-red-600 font-medium mt-2 text-xs">{{ $message }}</span>
                                @enderror
                                <button type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-[#45DFB1] text-white-500 w-full py-4 rounded-lg hover:bg-green-300 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="ml-">
                                        Reset password
                                    </span>
                                </button>
                            </form>
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