<html lang="en">
@include('layout.head-template')

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h4 class="text-center">Click'n Eat</h4>

                                <div class="mb-4 text-sm text-gray-600">
                                    Mot de passe oublié ? Pas de soucis, saisissez votre adresse e-mail, et nous vous enverrons un lien pour en créer un nouveau.
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                        <x-text-input id="email" class="form-control p-3" placeholder="Email" 
                                                        type="email" name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div >
                                        <x-primary-button class="btn login-form__btn submit w-100 mt-3">
                                            Réinitialiser son mot de passe
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

