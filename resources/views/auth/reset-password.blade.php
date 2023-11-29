<x-guest-layout>

    <div class="col-md-5">

        <div class="banner-center-box text-center text-white">
            <div class="cta-subscribe cta-subscribe-2 box-form">
                <div class="box-title text-white">
                    <h3 class="title">Daftar</h3>
                    <p>Hallo, Silahkan daftar akun</p>
                    <img class="svg" src="{{ asset('assets/img/rounded.svg') }}" alt="">
                </div><!-- .box-title end -->
                <div class="box-content">

                    <x-jet-validation-errors class="mb-4" />

                        <form id="loginform" action="{{ route('password.update') }}" method="POST" id="form-cta-subscribe-2" class="form-inline" style="min-height: 300px;">
                            @csrf    
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
            
                        <div class="form-group">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                        </div>
            
                        <div class="form-group">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="form-group">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button>
                                {{ __('Reset Password') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div><!-- .box-content end -->
            </div><!-- .box-form end -->
        </div><!-- .banner-center-box end -->

    </div><!-- .col-md-5 end -->

</x-guest-layout>
