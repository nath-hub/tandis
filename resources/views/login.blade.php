<!DOCTYPE html>
<html class="no-js" lang="en">

@include('element.head')

<body>

    {{-- @include('element.prehead') --}}

    <section class="tj-service-section">
        <div class="container">

            <div class="row no-gutters shadow-lg">
                <div class="col-md-5 d-none d-md-block">
                    <img src="assets/images/blog/b2.jpeg" height="650" />
                </div>
                <div class=" d-block d-sm-none text-center">
                    <img src="assets/images/im9.png" height="150" width="150"/>
                </div>
                <div class="col-md-6 bg-white py-4">
                    <h3 class=" text-center">Connexion</h3>
                    <div class="form-style">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group border mb-3" style="border-radius: 10px;">
                                <input type="email" placeholder="Email" class="form-control"
                                    value="{{ old('email') }}" name="email" aria-describedby="emailHelp">
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
 

                            <div class="form-group border mb-3" style="border-radius: 10px;">
                                <input type="password" placeholder="Password" class="form-control"
                                    value="{{ old('password') }}" name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                <label class="form-check-label" for="invalidCheck">
                                    Se souvenir de moi!
                                </label>


                            </div>
                            <div class="pb-4">
                                <button type="submit"
                                    class="btn btn-success w-100 font-weight-bold mt-2">Submit</button>
                            </div>
                        </form>
                        <div class="sideline pb-4">OR</div>
                        <div class="pb-4">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary w-100 font-weight-bold"><i
                                            class="fa-brands fa-facebook" aria-hidden="true"></i></button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-danger w-100 font-weight-bold "><i
                                            class="fa-brands fa-google" aria-hidden="true"></i></button>
                                </div>
                            </div>

                        </div>
                        <div class="pb-4">
                            Vous n'avez pas de compte ? <a style= 'color:green;' href="/users">S'inscrire'</a> <br />
                        </div>
                    
                        <a href="#section1" style= 'color:green;'>Mot de passe oublié</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
