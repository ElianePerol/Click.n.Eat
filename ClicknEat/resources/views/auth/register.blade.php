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

                                        <form method="POST" class="mt-5 mb-5 login-input" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Name -->
                                            <div class="form-group">
                                                {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                                                <x-text-input id="name" class="form-control p-3"  placeholder="Nom" type="text" 
                                                                name="name" :value="old('name')" 
                                                                required autofocus autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <!-- Role -->
                                            <div class="form-group">
                                                <select class="pl-3 form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                        name="role"> 
                                                    <option value="">Client ou Restaurant ?</option>
                                                    <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Client</option>
                                                    <option value="restaurant" {{ old('role') == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                                                </select>
                                                @error('role')
                                                <ul class="text-sm text-red-600 space-y-1">
                                                    @if ($message === 'The role field is required.')
                                                        <li class="mt-2">Veuillez sélectionner un rôle.</li>
                                                    @endif
                                                </ul>
                                                @enderror
                                            </div>

                                            <!-- Email Address -->
                                            <div class="form-group">
                                                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                                <x-text-input id="email" class="form-control p-3"  placeholder="Email" type="email" 
                                                                name="email" :value="old('email')" 
                                                                required autocomplete="username" />
                                                @error('email')
                                                <ul class="text-sm text-red-600 space-y-1">
                                                    @if ($message === 'The email field is required.')
                                                        <li class="mt-2">Veuillez entrer votre adresse email.</li>
                                                    @elseif (str_contains($message, 'already been taken'))
                                                        <li class="mt-2">Cette adresse email est déjà utilisée.</li>
                                                    @elseif (str_contains($message, 'valid email address'))
                                                        <li class="mt-2">Veuillez entrer une adresse email valide.</li>
                                                    @elseif ($message === 'The email field must be lowercase.')
                                                        <li class="mt-2">L'adresse email doit être en minuscules.</li>
                                                    @else
                                                        <li class="mt-2">{{ $message }}</li>
                                                    @endif
                                                </ul>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group">
                                                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                                                <x-text-input id="password" class="form-control p-3" placeholder="Mot de passe"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="new-password" />

                                                @error('password')
                                                <ul class="text-sm text-red-600 space-y-1">
                                                    @if ($message === 'The password field is required.')
                                                        <li class="mt-2">Veuillez entrer un mot de passe.</li>
                                                    @elseif (str_contains($message, 'least 8 characters'))
                                                        <li class="mt-2">Le mot de passe doit contenir au moins 8 caractères.</li>
                                                    @elseif ($message === 'The password field confirmation does not match.')
                                                        <li class="mt-2">Les mots de passe ne correspondent pas.</li>
                                                    @else
                                                        <li class="mt-2">{{ $message }}</li>
                                                    @endif
                                                </ul>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="form-group">
                                                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                                                <x-text-input id="password_confirmation" class="form-control p-3" placeholder="Confirmer le mot de passe"
                                                                type="password"
                                                                name="password_confirmation" required autocomplete="new-password" />

                                                @error('password_confirmation')
                                                <ul class="text-sm text-red-600 space-y-1">
                                                    @if ($message === 'The password confirmation field is required.')
                                                        <li>Veuillez confirmer votre mot de passe.</li>
                                                    @else
                                                        <li class="mt-2">{{ $message }}</li>
                                                    @endif
                                                </ul>
                                                @enderror
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                <x-primary-button class="btn login-form__btn submit w-100 mt-3">
                                                    S'enregistrer
                                                </x-primary-button>
                                            </div>
                                        </form>

                                    <p class="login-form__footer">Déjà un compte ? <a href="{{ route('login') }}" class="text-primary">Se connecter </a> maintenant</p>
                                    </p>
                                </div>
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
