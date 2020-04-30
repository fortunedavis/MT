@extends('layouts.main')

@section('content')

<div class="col-md-12">
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un employé</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('employees.store')}}">
                @csrf
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nom</label>
                        <input id="last_name" name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" >
                      </div>
                         @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Prénoms</label>
                        <input id="first_name" name="first_name" type="text" class="form-control  @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                      </div>
                      @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date de naissance</label>
                        <input id="birth_date" name="birth_date" type="date" class="form-control  @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}" >
                      </div>
                      @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>


                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sexe</label>
                            <select name="gender" class="form-control custom-select" style="width: 100%;">
                                <option value="Masculin">Masculin</option>
                                <option value="Feminin">Feminin</option>
                            </select>
                      </div>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input id="address_mail" name="address_mail" type="text" class="form-control  @error('address_mail') is-invalid @enderror" value="{{ old('address_mail') }}" placeholder="@">
                      </div>
                        @error('address_mail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Departement</label>
                         <select name="departement_id" class="form-control custom-select" style="width: 100%;">
                         @foreach ($departements as $departement)
                                    <option value="{{ $departement->id}}">{{$departement->name}}</option>
                         @endforeach
                         </select>

                      </div>
                        @error('departement_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                  </div>

                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Date de prise de fonction</label>
                        <input id="start_date" name="start_date" type="date" class="form-control  @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}" >
                      </div>
                          @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Numéro de Téléphone</label>
                        <input id="phone" name="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                      </div>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Adresse Physique</label>
                        <input id="address_hard" name="address_hard" type="text" class="form-control  @error('address_hard') is-invalid @enderror" value="{{ old('address_hard') }}">
                      </div>
                         @error('address_hard')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Poste</label>
                        <input id="profession" name="profession" type="text" class="form-control  @error('profession') is-invalid @enderror" value="{{ old('profession') }}">
                      </div>
                      @error('profession')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                  </div>







                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>

@endsection

