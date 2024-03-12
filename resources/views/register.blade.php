<!DOCTYPE html>
<html class="no-js" lang="en">

@include('element.head')

<body>

    {{-- @include('element.prehead') --}}

    {{-- <section class="tj-service-section"> --}}
    <div class="container">
        <div class="row pb-5">
            <div class="tj-sec-heading text-center">

                <div class="d-md-none d-sm-block">
                    <img src="assets/images/im2.jpg" height="250" />
                </div>

            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row no-gutters shadow-lg pb-5">
            <div class="col-md-5 d-none d-md-block">
                <img src="assets/images/blog/b2.jpeg" height="850" />
            </div>
            <div class="col-md-6 bg-white py-5 md-2">
                <h3 class="pb-3 text-center">S'inscrire</h3>
                <div class="form-style">

                    <form method="POST" action="{{route('users.store')}}">
                        @csrf
                        <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                            <input type="name" name="name" placeholder="Nom" class="form-control"
                                aria-describedby="nameHelp">
                        </div>
                        <div class="form-group border mb-3" style="border-radius: 10px;">
                            <input type="email" name="email" placeholder="Email" class="form-control"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                            <input type="number" name="phone" placeholder="Phone" class="form-control"
                                aria-describedby="phoneHelp">
                        </div>

                        <div class="form-group  border mb-3" style="border-radius: 10px;">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" name="statut" class="form-check-input" id="show-fields">
                            <label class="form-check-label" for="show-fields">
                                Je suis une entreprise
                            </label>
                        </div>

                        <div class="collapse" data-bs-target="#show-fields">
                            <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                                <input type="name" name="name_enterprise" placeholder="Nom de l'entreprise"
                                    class="form-control" aria-describedby="nameHelp">
                            </div>

                            <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                                <input type="name" name="commercial_register"
                                    placeholder="Register de commerce de l'entreprise" class="form-control"
                                    aria-describedby="nameHelp">
                            </div>

                            <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                                <input type="name" name="adresse" placeholder="adresse de l'entreprise"
                                    class="form-control" aria-describedby="nameHelp">
                            </div>

                            <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                                <input type="number" name="objectif" placeholder="Objectif de l'entreprise"
                                    class="form-control" aria-describedby="nameHelp">
                            </div>

                            <div class="form-group pb-1 border mb-3" style="border-radius: 10px;">
                                <input type="web_site" name="web_site" placeholder="Site de l'entreprise"
                                    class="form-control" id="exampleInputweb_site1" aria-describedby="web_siteHelp">
                            </div>
                        </div>


                        <div class="d-flex align-items-center justify-content-between">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                j'accepte les termes et conditions d'utilisation de Tandis Investment
                            </label>
                        </div>

                        <div class="pb-4">
                            <button type="submit" class="btn btn-success w-100 font-weight-bold mt-2">Submit</button>
                        </div>
                    </form>
                    <div class="sideline pb-4">OR</div>
                    <div class="pb-4">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary w-100 font-weight-bold"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-danger w-100 font-weight-bold "><i
                                        class="fa fa-google" aria-hidden="true"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="pb-4">
                        Vous n'avez pas de compte ? <a style= 'color:green;' href="/login">Se Connecter</a> <br />
                    </div>


                    <a href="#section1" style= 'color:green;'>Mot de passe oublié</a>

                </div>
            </div>
        </div>
    </div>
    </section>


</body>
{{-- @include('element.footer') --}}

<script>
    const checkbox = document.getElementById('show-fields');
    const collapse = document.querySelector('.collapse');

    checkbox.addEventListener('change', () => {
        collapse.classList.toggle('show');
    });
</script>

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
