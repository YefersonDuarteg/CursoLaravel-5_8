@extends("theme.$theme.layout")

@section('titulo')
    Permiso
@endsection

@section('contenido')
<section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permiso</h3>
            </div>
            <div class="box-body table-responsive">
                <div p-6>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Slug</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($permisos as $permiso)
                              <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slug}}</td>
                                <td></td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection