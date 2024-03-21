<body>

    @include('element.head')
    @include('element.header')


    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/im3.jpg') }}">

    </section>


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h4>Modifier les informations de l'entreprise</h4>
                </div>

            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('enterprise.update', $enterprise->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="container py-5 d-none d-md-block">
                <div class="row  shadow-lg rounded">

                    <div class="col-12">
                        <div>
                            <div class="accordion-body">
                                <div class="gy-3">
                                    <table class="table caption-top">
                                        <caption>Modifier les informations de l'entreprise</caption>

                                        <tbody>
                                            <tr>
                                                <th scope="row">siren : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="siren" placeholder="siren"
                                                                class="form-control" value="{{ $enterprise->siren }}"
                                                                name="siren" aria-describedby="sirenHelp">
                                                            @if ($errors->has('siren'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('siren') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">register commercial : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="commercial_register"
                                                                placeholder="commercial_register" class="form-control"
                                                                value="{{ $enterprise->commercial_register }}"
                                                                name="commercial_register"
                                                                aria-describedby="commercial_registerHelp">
                                                            @if ($errors->has('commercial_register'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('commercial_register') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">nom enterprise : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="name_enterprise"
                                                                class="form-control"
                                                                value="{{ $enterprise->name_enterprise }}"
                                                                name="name_enterprise"
                                                                aria-describedby="name_enterpriseHelp">
                                                            @if ($errors->has('name_enterprise'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('name_enterprise') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">address: </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="address"
                                                                class="form-control" value="{{ $enterprise->address }}"
                                                                name="address" aria-describedby="addressHelp">
                                                            @if ($errors->has('address'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('address') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">phase : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="phase"
                                                                class="form-control" value="{{ $enterprise->phase }}"
                                                                name="phase" aria-describedby="phaseHelp">
                                                            @if ($errors->has('phase'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('phase') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">livres : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            @if (!empty($enterprise->livres))
                                                                
                                                                <a  class="btn btn-outline-warning" href="{{ url($enterprise->livres) }}">Lire le
                                                                    PDF</a>
                                                                
                                                            @endif
                                                            <input type="file" placeholder="livres"
                                                                class="form-control" value="{{ $enterprise->livres }}"
                                                                name="livres" accept=".pdf"
                                                                aria-describedby="livresHelp">
                                                            @if ($errors->has('livres'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('livres') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Politique : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            @if (!empty($enterprise->politique))
                                                              
                                                                <a class="btn btn-outline-warning" href="{{ asset($enterprise->politique) }}">Lire le
                                                                    PDF</a> 
                                                            @endif

                                                            <input type="file" placeholder="politique"
                                                                class="form-control"
                                                                value="{{ $enterprise->politique }}" name="politique"
                                                                aria-describedby="politiqueHelp">
                                                            @if ($errors->has('politique'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('politique') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">date de debut : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="date" placeholder="date de debut"
                                                                class="form-control"
                                                                value="{{ $enterprise->date_debut }}"
                                                                name="date_debut" aria-describedby="date_debutHelp">
                                                            @if ($errors->has('date_debut'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('date_debut') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">date_fin : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="date" placeholder="date_fin"
                                                                class="form-control"
                                                                value="{{ $enterprise->date_fin }}" name="date_fin"
                                                                aria-describedby="date_finHelp">
                                                            @if ($errors->has('date_fin'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('date_fin') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">prix de la phase : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="number" placeholder="prix de la phase"
                                                                class="form-control"
                                                                value="{{ $enterprise->prix_phase }}"
                                                                name="prix_phase" aria-describedby="prix_phaseHelp">
                                                            @if ($errors->has('prix_phase'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('prix_phase') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">statut_phase : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">

                                                            <input class="form-control" list="datalistOptions"
                                                                id="exampleDataList" name="statut_phase"
                                                                value="{{ $enterprise->statut_phase }}"
                                                                placeholder="Différents options...">
                                                            <datalist id="datalistOptions">
                                                                <option value="En-cour">
                                                                <option value="Terminer">
                                                                <option value="Non débuté">
                                                            </datalist>

                                                            @if ($errors->has('statut_phase'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('statut_phase') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">objectif : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="number" placeholder="objectif"
                                                                class="form-control"
                                                                value="{{ $enterprise->objectif }}" name="objectif"
                                                                aria-describedby="objectifHelp">
                                                            @if ($errors->has('objectif'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('objectif') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">montant actuel : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="number" placeholder="montant actuel"
                                                                class="form-control"
                                                                value="{{ $enterprise->montant_actuel }}"
                                                                name="montant_actuel"
                                                                aria-describedby="montant_actuelHelp">
                                                            @if ($errors->has('montant_actuel'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('montant_actuel') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">site web : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="site web"
                                                                class="form-control"
                                                                value="{{ $enterprise->web_site }}" name="web_site"
                                                                aria-describedby="web_siteHelp">
                                                            @if ($errors->has('web_site'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('web_site') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">description : </th>
                                                <td>
                                                    <div class="col-12">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="description"
                                                                class="form-control"
                                                                value="{{ $enterprise->description }}"
                                                                name="description" aria-describedby="descriptionHelp">
                                                            @if ($errors->has('description'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('description') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 p-3 float-right">
                                <button type="submit" class="btn btn-success"> Enregistrer</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" d-block d-sm-none">
                <div class="shadow-lg rounded">
                    <div class="">
                        <div class="row">

                            <div id="profil" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="py-5">

                                        <table class="table caption-top">
                                            <caption>Modifier les informations d'une entreprise</caption>

                                            <tbody>
                                                <tr>
                                                    <th scope="row">siren : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="siren" placeholder="siren"
                                                                    class="form-control" value="{{ $enterprise->siren }}"
                                                                    name="siren" aria-describedby="sirenHelp">
                                                                @if ($errors->has('siren'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('siren') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">register commercial : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="commercial_register"
                                                                    placeholder="commercial_register" class="form-control"
                                                                    value="{{ $enterprise->commercial_register }}"
                                                                    name="commercial_register"
                                                                    aria-describedby="commercial_registerHelp">
                                                                @if ($errors->has('commercial_register'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('commercial_register') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">nom enterprise : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="text" placeholder="name_enterprise"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->name_enterprise }}"
                                                                    name="name_enterprise"
                                                                    aria-describedby="name_enterpriseHelp">
                                                                @if ($errors->has('name_enterprise'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('name_enterprise') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">address: </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="text" placeholder="address"
                                                                    class="form-control" value="{{ $enterprise->address }}"
                                                                    name="address" aria-describedby="addressHelp">
                                                                @if ($errors->has('address'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('address') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">phase : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="text" placeholder="phase"
                                                                    class="form-control" value="{{ $enterprise->phase }}"
                                                                    name="phase" aria-describedby="phaseHelp">
                                                                @if ($errors->has('phase'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('phase') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">livres : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                @if (!empty($enterprise->livres))
                                                                    
                                                                    <a  class="btn btn-outline-warning" href="{{ url($enterprise->livres) }}">Lire le
                                                                        PDF</a>
                                                                    
                                                                @endif
                                                                <input type="file" placeholder="livres"
                                                                    class="form-control" value="{{ $enterprise->livres }}"
                                                                    name="livres" accept=".pdf"
                                                                    aria-describedby="livresHelp">
                                                                @if ($errors->has('livres'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('livres') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Politique : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                @if (!empty($enterprise->politique))
                                                                  
                                                                    <a class="btn btn-outline-warning" href="{{ asset($enterprise->politique) }}">Lire le
                                                                        PDF</a> 
                                                                @endif
    
                                                                <input type="file" placeholder="politique"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->politique }}" name="politique"
                                                                    aria-describedby="politiqueHelp">
                                                                @if ($errors->has('politique'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('politique') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">date de debut : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="date" placeholder="date de debut"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->date_debut }}"
                                                                    name="date_debut" aria-describedby="date_debutHelp">
                                                                @if ($errors->has('date_debut'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('date_debut') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">date_fin : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="date" placeholder="date_fin"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->date_fin }}" name="date_fin"
                                                                    aria-describedby="date_finHelp">
                                                                @if ($errors->has('date_fin'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('date_fin') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">prix de la phase : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="number" placeholder="prix de la phase"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->prix_phase }}"
                                                                    name="prix_phase" aria-describedby="prix_phaseHelp">
                                                                @if ($errors->has('prix_phase'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('prix_phase') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">statut_phase : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
    
                                                                <input class="form-control" list="datalistOptions"
                                                                    id="exampleDataList" name="statut_phase"
                                                                    value="{{ $enterprise->statut_phase }}"
                                                                    placeholder="Différents options...">
                                                                <datalist id="datalistOptions">
                                                                    <option value="En-cour">
                                                                    <option value="Terminer">
                                                                    <option value="Non débuté">
                                                                </datalist>
    
                                                                @if ($errors->has('statut_phase'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('statut_phase') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <th scope="row">objectif : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="number" placeholder="objectif"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->objectif }}" name="objectif"
                                                                    aria-describedby="objectifHelp">
                                                                @if ($errors->has('objectif'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('objectif') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <th scope="row">montant actuel : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="number" placeholder="montant actuel"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->montant_actuel }}"
                                                                    name="montant_actuel"
                                                                    aria-describedby="montant_actuelHelp">
                                                                @if ($errors->has('montant_actuel'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('montant_actuel') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">site web : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="text" placeholder="site web"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->web_site }}" name="web_site"
                                                                    aria-describedby="web_siteHelp">
                                                                @if ($errors->has('web_site'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('web_site') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">description : </th>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="form-group border " style="border-radius: 10px;">
                                                                <input type="text" placeholder="description"
                                                                    class="form-control"
                                                                    value="{{ $enterprise->description }}"
                                                                    name="description" aria-describedby="descriptionHelp">
                                                                @if ($errors->has('description'))
                                                                    <span
                                                                        class="text-danger text-left">{{ $errors->first('description') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 p-3 float-right">
                                        <button type="submit" class="btn btn-success"> Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
    </div>

</body>


@include('element.footer')
