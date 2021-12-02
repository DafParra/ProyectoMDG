@extends('login')

@section('css')
<!--fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-group">
                <label for="email" class=" col-form-label text-md-right">{{ __('Correo electronico') }}</label> <strong class='text-md-left text-danger'>*</strong>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="ejemplo@gmail.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-group ">
                <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label> <strong class='text-md-left text-danger'>*</strong>
                <div class="input-group-append">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                    <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                </div>
                  
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group ">
                <div class="form-check">
                    <input style="background-color: #8c59a06f" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Recuerdame
                    </label>
                </div>
            </div>

            <div class="col-md-12 offset-md-">
                <button type="submit" class=" col-md-12 btn btn-outline" style="background-color: #8c59a06f">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste la contraseña?') }}
                    </a>
                @endif
            </div>

    </form>

    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    @endsection
@endsection
