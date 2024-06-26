{{-- <x-guest-layout>
    <div class="flex flex-col md:flex-row justify-center items-start gap-8">
        <div class="w-full md:w-1/2">
            <div class="flex flex-col justify-center mb-6">
                <div class="bg-white flex justify-center rounded-md p-2 shadow-md h-12 w-96 mx-auto relative">
                    <div class="flex justify-between items-center w-full px-2">
                        <a href="{{ route('login') }}" id="signInBtn"
                            class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                            <span
                                class="px-2 py-1 rounded {{ Request::routeIs('login') ? 'border border-gray-400 bg-gray-100' : '' }}">Sign
                                In</span>
                        </a>
                        <div class="h-8 w-px bg-gray-300 mx-2 px-4">|</div>
                        <a href="{{ route('register') }}" id="signUpBtn"
                            class="w-[45%] h-[34px] rounded-md transition-all duration-300 z-10 text-sm font-medium focus:outline-none">
                            <span
                                class="px-2 py-1 rounded {{ Request::routeIs('register') ? 'border border-gray-400 bg-gray-100' : '' }}">Sign
                                Up</span>
                        </a>
                        <div id="slider"
                            class="absolute top-[5px] {{ Request::routeIs('login') ? 'left-[9px]' : 'left-[calc(50% + 5px)]' }} w-[45%] h-[34px] bg-blue-500 rounded-md transition-all duration-300">
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="dark:text-dark text-5xl font-bold">
                        Welcome to Vitalife
                    </h2>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <div class="relative">
                        <x-text-inputPW id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="new-password" />
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <div class="relative">
                        <x-text-inputPW id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-start mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div class="flex items-center justify-center mt-4 bg-gray-900">


                    <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
                        <div class="w-full">
                            <button type="submit"
                                class="w-full bg-blue-300 text-white py-2 px-4 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-500"
                                onclick="animateButton(this)">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
        const signInBtn = document.getElementById('signInBtn');
        const signUpBtn = document.getElementById('signUpBtn');
        const slider = document.getElementById('slider');

        function setActiveButton(activeBtn, inactiveBtn) {
            activeBtn.querySelector('span').classList.add('border', 'border-gray-400', 'bg-gray-100');
            inactiveBtn.querySelector('span').classList.remove('border', 'border-gray-400', 'bg-gray-100');
        }

        function animateButton(button) {
            button.classList.add('animate-pulse', 'cale-90');
            setTimeout(() => {
                button.classList.remove('animate-pulse', 'cale-90');
            }, 300);
        }

        signInBtn.addEventListener('click', () => {
            slider.style.left = '9px';
            setActiveButton(signInBtn, signUpBtn);
            animateButton(signInBtn);
        });

        signUpBtn.addEventListener('click', () => {
            slider.style.left = 'calc(50% + 5px)';
            setActiveButton(signUpBtn, signInBtn);
            animateButton(signUpBtn);
        });

        // Set initial active state
        setActiveButton(signUpBtn, signInBtn);
        slider.style.left = 'calc(50% + 5px)';
    </script>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="grid grid-cols-2 min-h-screen bg-gray-100">
        <!-- Left Column -->
        <div class="relative flex flex-col justify-center items-center px-6 text-white min-h-screen bg-cover bg-center rounded-l-lg"
            style="background-image: url('../image/login.jpg');">
            <div class="absolute inset-0 bg-gradient-to-l from-blue-700 to-transparent opacity-70"></div>
            <div class="absolute top-4 left-4 z-20 px-4 py-40">
                <img src="../image/LOGO_1.png" alt="Logo" class="w-32 h-auto">
            </div>
            <div class="relative z-10 text-start px-3">
                <h2 class="text-4xl font-bold mb-4">Welcome, Friend!</h2>
                <p class="mb-8">To keep connected with us please login with your personal info</p>
                <a href="{{ route('login') }}"
                    class="inline-block border border-white text-white py-2 px-8 rounded-full hover:bg-white hover:text-black transition duration-300">
                    SIGN IN
                </a>
            </div>
        </div>

        <!-- Right Column - Create Account -->
        <div class="flex flex-col justify-center items-center px-6 bg-white">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold mb-8 text-emerald-500">Create Account</h2>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 10.06c0-5.52-4.48-10-10-10s-10 4.48-10 10 4.48 10 10 10 10-4.48 10-10zm-10 5.84c-3.23 0-5.84-2.61-5.84-5.84s2.61-5.84 5.84-5.84 5.84 2.61 5.84 5.84-2.61 5.84-5.84 5.84z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0C4.477 0 0 4.477 0 10c0 4.411 2.865 8.138 6.839 9.465.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.891 1.529 2.341 1.087 2.91.831.092-.646.349-1.086.635-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C17.137 18.135 20 14.41 20 10c0-5.523-4.477-10-10-10z" />
                        </svg>
                    </a>
                </div>

                <p class="text-gray-500 mb-6">or use your email for registration:</p>

                <!-- Registration Form -->
                <form method="POST" action="{{ route('register') }}" class="w-full">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- User Role -->
                    <div class="mt-4">
                        <x-input-label :value="__('Register as')" class="block mt-1 w-full" />
                        <select id="role" name="role"
                            class="w-full border-gray-300 dark:border-gray-700 dark:bg-white dark:text-indigo-600 text-indigo-900 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-full shadow-sm">
                            <option value="user">Regular User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-inputPW id="password" class="block mt-1 w-full" type="password" name="password"
                            required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-inputPW id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>

                    <div class="mt-4 flex flex-col items-center bg-gray-500 rounded-md">
                        <div class="w-full">
                            <button type="submit"
                                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 transition duration-150 ease-in-out uppercase font-semibold transform active:scale-90 active:bg-blue-700"
                                onclick="animateButton(this)">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
