<body>

    @include('element.head')
    @include('element.header')


    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('assets/images/im3.jpg') }}">

    </section>


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h4>Modifier les informations d'un utilisateur</h4>
                </div>

            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="*">
            @csrf
            @method('PUT')

            <div class="container py-5 d-none d-md-block">
                <div class="row  shadow-lg rounded">
                    <div class="col-3 text-center">
                        <div class="user-image-container">
                            <img id="imagePreview" class="rounded-circle" height="200px" width="200px"
                                src="{{ asset('assets/images/pp.jpg' ?? $user->photo) }}" /><br />


                            <div class="custom-file-upload py-3">

                                <button type="button" class="btn btn-success" id="imageUploadButton">Choisir une
                                    image</button>
                                <input type="file" class="d-none" id="imageUpload" name="photo" accept="image/*"
                                    onchange="handleImageUpload(this)">
                                @if ($errors->has('photo'))
                                    <span class="text-danger text-left">{{ $errors->first('photo') }}</span>
                                @endif
                            </div>
                        </div>



                        <a class="btn btn-success py-3" href="edit">
                            changer mon mot de passe
                        </a>
                        @if ($user->type === 'ENTERPRISE')
                            <div class="py-3">
                                <a class="btn btn-success" href="{{ route('enterprise.edit', $enterprise->id) }}">
                                    Soumettre un projet au financement
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="col-9">
                        <div>
                            <div class="accordion-body">
                                <div class="gy-3">
                                    <table class="table caption-top">
                                        <caption>Informations de utilisateur</caption>

                                        <tbody>
                                            <tr>
                                                <th scope="row">Nom : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="name" placeholder="Noms"
                                                                class="form-control" value="{{ $user->name }}"
                                                                name="name" aria-describedby="nameHelp">
                                                            @if ($errors->has('name'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Téléphone : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="phone" placeholder="Téléphone"
                                                                class="form-control" value="{{ $user->phone }}"
                                                                name="phone" aria-describedby="phoneHelp">
                                                            @if ($errors->has('phone'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ville : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="Ville" name="town"
                                                                class="form-control" value="{{ $user->town }}"
                                                                aria-describedby="townHelp">
                                                            @if ($errors->has('town'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('town') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pays: </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="Pays"
                                                                class="form-control" value="{{ $user->country }}"
                                                                name="country" aria-describedby="countryHelp">
                                                            @if ($errors->has('country'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('country') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date de naissance : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="date" placeholder="Date de naissance"
                                                                class="form-control" value="{{ $user->birth_date }}"
                                                                name="birth_date" aria-describedby="birth_dateHelp">
                                                            @if ($errors->has('birth_date'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('birth_date') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Type de compte : </th>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01">Type
                                                            de compte : </label>
                                                        <select class="form-select" name="type"
                                                            id="inputGroupSelect01">
                                                            <option value="{{ $user->type }}" selected>Choissisez...
                                                            </option>
                                                            <option value="ENTERPRISE">Entreprise</option>
                                                            <option value="INVEST">Investisseur</option>
                                                        </select>
                                                        @if ($errors->has('type'))
                                                            <span
                                                                class="text-danger text-left">{{ $errors->first('type') }}</span>
                                                        @endif
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
                            <div class="col-5">
                                <img id="imagePreview" class="rounded-circle" height="200px" width="200px"
                                    src="{{ asset($user->photo) }}" value="{{ $user->photo }}" /><br />

                            </div>

                            <div class="col-7">
                                <div class="custom-file-upload py-3">
                                    <button type="button" class="btn btn-success" id="imageUploadButton">Choisir une
                                        image</button>
                                    <input type="file" class="d-none" id="imageUpload" name="photo"
                                        accept="image/*">
                                </div>

                                <div class="py-3">
                                    <a class="btn btn-success" href="edit">
                                        changer mon mot de passe
                                    </a>
                                </div>

                                @if ($user->type === 'ENTERPRISE')
                                    <div class="py-3">
                                        <a class="btn btn-success" href="edit">
                                            Soumettre un projet au financement
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div id="profil" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="py-5">

                                    <table class="table caption-top">
                                        <caption>Modifier les informations d'un utilisateur</caption>

                                        <tbody>
                                            <tr>
                                                <th scope="row">Nom : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="name" placeholder="Noms"
                                                                class="form-control" value="{{ $user->name }}"
                                                                name="name" aria-describedby="nameHelp">
                                                            @if ($errors->has('name'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Téléphone : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="phone" placeholder="Téléphone"
                                                                class="form-control" value="{{ $user->phone }}"
                                                                name="phone" aria-describedby="phoneHelp">
                                                            @if ($errors->has('phone'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ville : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="Ville" name="town"
                                                                class="form-control" value="{{ $user->town }}"
                                                                aria-describedby="townHelp">
                                                            @if ($errors->has('town'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('town') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pays: </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="text" placeholder="Pays"
                                                                class="form-control" value="{{ $user->country }}"
                                                                name="country" aria-describedby="countryHelp">
                                                            @if ($errors->has('country'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('country') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Date de naissance : </th>
                                                <td>
                                                    <div class="col-5">
                                                        <div class="form-group border " style="border-radius: 10px;">
                                                            <input type="date" placeholder="Date de naissance"
                                                                class="form-control" value="{{ $user->birth_date }}"
                                                                name="birth_date" aria-describedby="birth_dateHelp">
                                                            @if ($errors->has('birth_date'))
                                                                <span
                                                                    class="text-danger text-left">{{ $errors->first('birth_date') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Type de compte : </th>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01">Type
                                                            de compte : </label>
                                                        <select class="form-select" name="type"
                                                            id="inputGroupSelect01">
                                                            <option value="{{ $user->type }}" selected>Choissisez...
                                                            </option>
                                                            <option value="ENTERPRISE">Entreprise</option>
                                                            <option value="INVEST">Investisseur</option>
                                                        </select>
                                                        @if ($errors->has('type'))
                                                            <span
                                                                class="text-danger text-left">{{ $errors->first('type') }}</span>
                                                        @endif
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

    <script>
        const imageUpload = document.getElementById('imageUpload');
        const imagePreview = document.getElementById('imagePreview');

        const addFileBtn = document.querySelector('.add-file-btn');

        const imageUploadButton = document.getElementById('imageUploadButton');

        imageUploadButton.addEventListener('click', function() {
            imageUpload.click();
        });

        imageUpload.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>

</body>


@include('element.footer')
