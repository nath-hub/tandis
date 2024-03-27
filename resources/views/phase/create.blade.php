<!DOCTYPE html>
<html class="no-js" lang="en">

<body>

    @include('element.head')
    @include('element.header')


    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/im3.jpg') }}">

    </section>
    <form method="POST" action="{{"store/"}}">
        @csrf

        <div class="container py-5 ">
            <div class="row  shadow-lg rounded">

                <div class="col-12">
                    <div>
                        <div class="accordion-body">
                            <div class="gy-3">
                                <table class="table caption-top">
                                    <caption> <h3> Ajouter les phases d'investissement de votre projets </h3></caption>

                                    <tbody>
                                        <tr>
                                            <th scope="row">phase : </th>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group border " style="border-radius: 10px;">
                                                        <input type="text" placeholder="phase" class="form-control"
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
                                            <th scope="row">date de debut : </th>
                                            <td>
                                                <div class="col-12">
                                                    <div class="form-group border " style="border-radius: 10px;">
                                                        <input type="date" placeholder="date de debut"
                                                            class="form-control" name="date_debut"
                                                            aria-describedby="date_debutHelp">
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
                                                            class="form-control" name="date_fin"
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
                                                            class="form-control" name="prix_phase"
                                                            aria-describedby="prix_phaseHelp">
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
        
    </form>
 
    @if (isset($phases)) 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center"> 
                        <h2 class="sec-title">
                        Les phases existantes <br />
                        </h2>
                    </div>
                </div>
            </div>
            <div class="card table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col-2">Phases</th>
                        <th scope="col-2">Début</th>
                        <th scope="col-2">Fin</th>
                        <th scope="col-2">Montant</th>
                        <th scope="col-2 tj-color-theme-primary">Statut</th>
                        <th scope="col-2">date de creation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($phases as $phase)
                   
                      <tr class="table-active">
                        <th scope="row">{{ $phase->phase }}</th>
                        <td>{{ $phase->date_debut }}</td>
                        <td>{{ $phase->date_fin }}</td>
                        <td>{{ $phase->prix_phase }}</td>
                        <td>{{ $phase->statut_phase }}</td>
                        <td>{{ $phase->created_at }}</td>
                      </tr>  
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        @else
            <p>Aucune phase n'existe!</p>
        @endif

        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 p-3 float-right"> 
                <a class="btn btn-success" href="/"> retour  </a>
            </div>
        </div>
    @include('element.footer')

</html>
