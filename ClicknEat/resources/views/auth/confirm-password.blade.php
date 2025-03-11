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
                                    Ceci est une zone sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.
                                </div>

                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <!-- Password -->
                                    <div>
                                        {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                        <x-text-input id="password" class="form-control p-3" placeholder="Mot de passe"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div>
                                        <x-primary-button class="btn login-form__btn submit w-100 mt-3">
                                            Confirmer
                                        </x-primary-button>
                                    </div>
                                </form>
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