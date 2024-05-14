<style>
@import url('https://fonts.googleapis.com/css2?family=Marcellus&family=Montserrat:wght@100;200;300;400;500;600;700&display=swap');
    body{font-family: 'Montserrat', sans-serif;}
    .box{
        padding:1%; margin-top:8%;border-radius: 5px;margin-left:30%;margin-right:30%;
        font-size: 12px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        white-space: nowrap;
        background-color: #845EC2;box-shadow: 1px 1px 7px black;border-radius: 0px 50px 0px 50px;
    }

    .box h1{ color: white;  font-family: 'Marcellus',sans-serif; font-weight: 500;}
    .box a { color: white ; text-decoration: none; font-size: 1.1em ;}
    .card-body {display: flex; justify-content: center;align-items: center; flex-direction: column}
    .flex {display: flex; align-items: center;}
    .form{display: block;}
    .form input:not(.btn),.form textarea,.form select{padding: 12px;border-radius: 10px; width:350px  }
    .form input:not(.btn), .form textarea,.form select{margin-bottom: 20px;  border: 1px solid  rgb(235, 234, 234);  font-size: 1em;}

    .form input[type=submit]{margin-top: 15px; border: none; display: block;}
    .form input::placeholder{ font-size: 1.1em; padding: 10px;  }
    .form label {font-size: 1.5em; margin-bottom: 15px; font-family:'Marcellus', 
    sans-serif; margin-right: 10px;}
    .form input[type=checkbox]{width: 20px; margin-bottom: 10px;}

    .form input[type=radio]{width: 20px; margin-bottom: 10px;}

    textarea:focus, input:focus,  select:focus{outline: none;}
    .btn{margin-bottom:10px; padding: 8px 15px;font-weight: 400;cursor: pointer;border-radius:30px; font-size: 16px !important; font-family: 'Marcellus',sans-serif;}

</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-dark">
            <div class="card box">
                <h1 style="text-align: center; ">Connexion</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form" >
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color:white">{{ __(' Email :') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color:white">{{ __('Mot de passe :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 flex">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" > 
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color:white;">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Connecter" class="btn"
                                    {{ __('Login') }}
                                />

                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

