@extends('layouts.main')

@section('content')


 <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Détails de {{$employee->fullname}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <strong><i class="fas fa-users mr-1"></i> Nom et Prénoms</strong>

                <p class="text-muted">{{$employee->fullname}}</p>

                <hr>

               <strong><i class="fas fa-tty mr-1"></i> Numéro </strong>

                <p class="text-muted">{{$employee->phone}}</p>

                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Adresse Mail </strong>

                <p class="text-muted">{{$employee->address_mail}}</p>

                <hr>


                <strong><i class="fas fa-birthday-cake mr-1"></i> Date de naissance </strong>

                <p class="text-muted">{{$employee->birth_date->format('d/m/Y')}}</p>

                <hr>

                <strong><i class="fas fa-angle-up mr-1"></i> Date de début de contrat </strong>

                <p class="text-muted">{{$employee->start_date->format('d/m/Y')}}</p>

                <hr>

                 <strong><i class="fas fa-angle-down mr-1"></i> Date de fin de contrat </strong>

                <p class="text-muted">{{$employee->end_date? $employee->end_date->format('d/m/Y') : "Contrat en cours" }}</p>

                <hr>

                <strong><i class="fab fa-accusoft"></i> Profession </strong>

                <p class="text-muted">{{$employee->profession}}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$employee->address_hard}}</p>

                <hr>




                <strong><i class="fas fa-male mr-1"></i> Genre</strong>

                <p class="text-muted">
                 {{$employee->gender}}
                </p>

                <hr>

                <strong><i class="fab fa-angellist"></i> Status courant</strong>

                <p class="text-muted"></p>

                <hr>



                <strong><i class="fas fa-anchor"></i></i> Département</strong>

                <p class="text-muted">{{$employee->departement->name}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


@endsection

@section('js')

@endsection
