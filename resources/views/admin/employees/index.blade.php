@extends('layouts.main')

@section('content')


 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 600px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénoms</th>
                      <th>Département</th>
                      <th>Poste</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                      <td>{{$employee->last_name}}</td>
                      <td> {{$employee->first_name}}</td>
                      <td> {{$employee->departement->name}}</td>
                      <td> {{$employee->profession}}</td>
                        <td></td>
                        <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">

                        <a href="{{ route('employees.show', ['employee'=>$employee->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                         <a href="{{ route('employees.edit', ['employee'=>$employee->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>

                       <td>





        <form method="POST" action="/admin/employees/{{$employee->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
                <button class="btn btn-danger btn-sm">
                     <i class="fas fa-trash"></i><input type="submit" class="btn btn-danger" value="supp" >
                </button>
      </form>




                    </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


@endsection

@section('js')
<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
