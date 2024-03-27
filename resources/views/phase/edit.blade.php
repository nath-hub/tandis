<!DOCTYPE html>
<html class="no-js" lang="en">

<body>

  @include('element.head')
  @include('element.header')


  <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/im3.jpg') }}">

  </section>

<table class="table caption-top">
    <caption>Modifier les informations de l'entreprise</caption>

    <tbody>
        <tr>
            <th scope="row">phase : </th>
            <td>
                <div class="col-12">
                    <div class="form-group border " style="border-radius: 10px;">
                        <input type="text" placeholder="phase"
                            class="form-control" value="{{ $enterprise->phase }}"
                            name="phases" aria-describedby="phasesHelp">
                        @if ($errors->has('phases'))
                            <span
                                class="text-danger text-left">{{ $errors->first('phases') }}</span>
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
                            name="date_debuts" aria-describedby="date_debutsHelp">
                        @if ($errors->has('date_debuts'))
                            <span
                                class="text-danger text-left">{{ $errors->first('date_debuts') }}</span>
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
                            value="{{ $enterprise->date_fin }}" name="date_fins"
                            aria-describedby="date_finsHelp">
                        @if ($errors->has('date_fins'))
                            <span
                                class="text-danger text-left">{{ $errors->first('date_fins') }}</span>
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
                            name="prix_phases" aria-describedby="prix_phasesHelp">
                        @if ($errors->has('prix_phases'))
                            <span
                                class="text-danger text-left">{{ $errors->first('prix_phases') }}</span>
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
                            id="exampleDataList" name="statut_phases"
                            value="{{ $enterprise->statut_phase }}"
                            placeholder="Différents options...">
                        <datalist id="datalistOptions">
                            <option value="En-cour">
                            <option value="Terminer">
                            <option value="Non débuté">
                        </datalist>

                        @if ($errors->has('statut_phases'))
                            <span
                                class="text-danger text-left">{{ $errors->first('statut_phases') }}</span>
                        @endif
                    </div>
                </div>
            </td>
        </tr>

    </tbody>
</table>

@include('element.footer')
</html>