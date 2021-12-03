@extends('register')

@section('content')

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Nombre y apellido') }}</label> <strong class='text-md-left text-danger'>*</strong>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Su nombre y apellido">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group row">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Correo electronico') }}</label> <strong class='text-md-left text-danger'>*</strong>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="ejemplo@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>






                        <div class="form-group row">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña') }}</label><br> <strong class='text-md-left text-danger'>*</strong>

                            <div class="input-group" >
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label> <strong class='text-md-left text-danger'>*</strong>

                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                            </div>
                        </div>


                                <input  type="checkbox"   required > <span> Aceptas terminos y condiciones<strong class='text-md-left text-danger'>*</strong></span>



                        <div class="form-group row mb-0 ">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-outline col-md-12" style="background-color: #8c59a06f">
                                    {{ __('Registar') }}
                                </button>
                            </div>
                        </div>
                    </form>

@endsection
