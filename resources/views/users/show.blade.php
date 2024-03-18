<body>

    @include('element.head')
    @include('element.header')


    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/im3.jpg') }}">

    </section>

    <main>
        <div class="container py-5 d-none d-md-block">
            <div class="row  shadow-lg rounded">
                <div class="col-3 text-center">
                    <img class="rounded" height="150px" width="200px"
                        src="{{ asset('assets/images/testimonial/te1.jpg') }}" alt="Image" />
                    <div class="py-3">
                        <button class="btn btn-success">changer</button>
                    </div>
                    <button class="btn btn-success">modifier mon compte</button>
                    <div class="py-3">
                        <button class="btn btn-success">changer mon mot de passe</button>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#profil" aria-expanded="true" aria-controls="collapseTwo">
                                Profile
                            </button>
                        </h3>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#invest" aria-expanded="false" aria-controls="collapseTwo">
                                Investissements
                            </button>
                        </h3>


                    </div>
                </div>

                <div class="col-8">

                    <div id="profil" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="gy-3">
                                <table class="table caption-top">
                                    <caption>Informations de utilisateur</caption>

                                    <tbody>
                                        <tr>
                                            <th scope="row">Nom : </th>
                                            <td>{{ $user->name }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email: </th>
                                            <td>{{ $user->email }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Téléphone : </th>
                                            <td>{{ $user->phone }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Statut: </th>
                                            <td>{{ $user->statut }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date de creation : </th>
                                            <td>{{ $user->created_at }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pays: </th>
                                            <td>{{ $user->country }} </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Ville : </th>
                                            <td>{{ $user->town }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date de naissance: </th>
                                            <td>{{ $user->birth_date }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type de compte: </th>
                                            <td>{{ $user->type }} </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="invest" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <h4 class="py-3"> Mes investissements </h4>
                            <table class="table table-striped table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col-3">Entreprise</th>
                                        <th scope="col-2">Phase</th>
                                        <th scope="col-2">Montant</th>
                                        <th scope="col-2">Quantité</th>
                                        <th scope="col-2">Date</th>
                                        <th scope="col-2">Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-active">
                                        <td>Tandis</td>
                                        <th>Phase 1</th>
                                        <td>15000</td>
                                        <td>15</td>
                                        <td>15/02/2022</td>
                                        <td>Terminer</td>
                                    </tr>
                                    <tr class="table-active">
                                        <td>Tandis</td>
                                        <th>Phase 1</th>
                                        <td>10000</td>
                                        <td>10</td>
                                        <td>10/02/2022</td>
                                        <td>En-cours</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <form action="{{ route('users.logout') }}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 p-3 float-right">
                                <button type="submit" class="btn btn-danger"> Se déconnecter</button>
                            </div>
                        </div>
                    </form>



                </div>

            </div>
        </div>
        <div class=" d-block d-sm-none">
            <div class="shadow-lg rounded">
                <div class="">
                    <div class="row">
                        <div class="col-4 py-4">
                            <img src="{{ asset('assets/images/testimonial/te1.jpg') }}" alt="Image de profil"
                                class="rounded-circle" width="150" height="140">
                        </div>
                        <div class="col-8">
                            <div class="py-3">
                                <a class="btn btn-success">changer</a>
                            </div>
                            <a class="btn btn-success">modifier mon compte</a>
                            <div class="py-3">
                                <button class="btn btn-success">changer mon mot de passe</button>
                            </div>
                        </div>
                    </div>



                    <a class="accordion-button border bg-success collapsed p-3" data-bs-toggle="collapse"
                        data-bs-target="#profil">
                        <h4>Informations Personnelles +</h4>
                    </a>
                    <a class="accordion-button border bg-success collapsed p-3" data-bs-toggle="collapse"
                        data-bs-target="#investi">
                        <h4>Mes Investissements +</h4>
                    </a>

                    <div id="profil" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="py-5">

                                <table class="table caption-top">
                                    <caption>Informations de utilisateur</caption>

                                    <tbody>
                                        <tr>
                                            <th scope="row">Nom : </th>
                                            <td>{{ $user->name }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email: </th>
                                            <td>{{ $user->email }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Téléphone : </th>
                                            <td>{{ $user->phone }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Statut: </th>
                                            <td>{{ $user->statut }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date de creation : </th>
                                            <td>{{ $user->created_at }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pays: </th>
                                            <td>{{ $user->country }} </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Ville : </th>
                                            <td>{{ $user->town }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Date de naissance: </th>
                                            <td>{{ $user->birth_date }} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type de compte: </th>
                                            <td>{{ $user->type }} </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="investi" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container overflow-hidden">
                                <div class="card table-responsive">
                                    <h3>Mes investissements</h3>
                                    <table class="table table-striped table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col-2">Entreprise</th>
                                                <th scope="col-2">Phase</th>
                                                <th scope="col-2">Montant</th>
                                                <th scope="col-2">Quantité</th>
                                                <th scope="col-2">Date</th>
                                                <th scope="col-2">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <td>Tandis</td>
                                                <th>Phase 1</th>
                                                <td>15000</td>
                                                <td>15</td>
                                                <td>15/02/2022</td>
                                                <td>Terminer</td>
                                            </tr>
                                            <tr class="table-active">
                                                <td>Tandis</td>
                                                <th>Phase 1</th>
                                                <td>10000</td>
                                                <td>10</td>
                                                <td>10/02/2022</td>
                                                <td>En-cours</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('users.logout') }}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 p-3 float-right">
                                <button type="submit" class="btn btn-danger"> Se déconnecter</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </main>

    @include('element.footer')
</body>

</html>
