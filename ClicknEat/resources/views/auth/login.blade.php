<html lang="en">
@include('layout.head-template')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h4 class="text-center">Click'n Eat</h4>

                                    <form method="POST" action="{{ route('login') }}" class="mt-5 mb-5 login-input">
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="form-group">
                                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                            <x-text-input id="email" class="form-control" placeholder="&nbsp Email" 
                                                            type="email" name="email" :value="old('email')" 
                                                            required autofocus autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                            <x-text-input id="password" class="form-control" placeholder="&nbsp Mot de passe"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Remember Me -->
                                        {{-- <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div> --}}

                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                                                    href="{{ route('password.request') }}">
                                                    Mot de passe oublié ?
                                                </a>
                                            @endif

                                            <x-primary-button class="btn login-form__btn submit w-100 mt-3">
                                                Se connecter
                                            </x-primary-button>
                                        </div>
                                    </form>
                                <p class="mt-2 login-form__footer">Pas de compte? <a href="{{ route('register') }}" class="text-primary">S'enregistrer</a> maintenant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>

