@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/datepicker.min.css')}}">
 <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css')}}">
@endsection

@section('content')

<div class="col-md-12">
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un employé</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('employees.update',[$employee->id])}}" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nom</label>
                        <input id="last_name" name="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ $employee->last_name}}" >
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
                        <input id="first_name" name="first_name" type="text" class="form-control  @error('first_name') is-invalid @enderror" value="{{ $employee->first_name}}">
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
                        <div class="input-group date">

                        <input type="text" name="birth_date" class="form-control pull-right" id="datepicker"  @error('birth_date') is-invalid @enderror" value="{{ \Carbon\Carbon::parse( $employee->birth_date)->format('d-m-Y') }}" >

                        </div>

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

                         <select name="gender" class="form-control select2" style="width: 100%;">

                          <option value="Masculin" {{ ($employee->gender === 'Masculin') ? 'selected' : "" }} >Masculin</option>

                          <option value="Feminin" {{ ($employee->gender === 'Feminin') ? 'selected' : "" }} >Feminin</option>

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
                        <input id="address_mail" name="address_mail" type="text" class="form-control  @error('address_mail') is-invalid @enderror" value="{{ $employee->address_mail }}" placeholder="@">
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

              <select name="departement_id" class="form-control select2" style="width: 100%;">
                 @foreach ($departements as $departement)
                  <option value="{{$departement->id}}" {{$departement->id == $employee->departement_id ? "selected" : "" }} >
                    {{$departement->name}}
                  </option>
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
                        <input type="text" name="start_date" class="form-control pull-right" id="datep"  @error('birth_date') is-invalid @enderror" value="{{ \Carbon\Carbon::parse( $employee->start_date)->format('d-m-Y') }}" >


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
                        <input id="phone" name="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" value="{{ $employee->phone}}">
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
                        <input id="address_hard" name="address_hard" type="text" class="form-control  @error('address_hard') is-invalid @enderror" value="{{ $employee->address_hard}}">
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
                        <input id="profession" name="profession" type="text" class="form-control  @error('profession') is-invalid @enderror" value="{{ $employee->profession}}">
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

@section('js')

<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- date-range-picker -->
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/datepicker.js')}}"></script>
<!-- bootstrap color picker -->



<script>

  //Initialize Select2 Elements
    $('.select2').select2()


 //Date picker
    $('#datepicker').datepicker({
      format: 'd-m-yyyy',
      autoclose: true
    })

    $('#datep').datepicker({
      format: 'd-m-yyyy',
      autoclose: true
    })
</script>
@endsection

