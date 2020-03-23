@extends('template.layout')

@section('content')
   <div class="content-list mt-5">
      <div class="form-row">
         <div class="header-list col-lg-12">
            <div class="title">
               <h2>Cursos</h2>
            </div>   
         
            <div class="button">
               <a href="{{ url('/curse/create') }}" class="btn btn-create">
                  <i class="fa fa-plus pr-1"></i>
                  Curso
               </a>
            </div>
         </div>
         <div class="card-list col-lg-12 mt-3">
            @csrf
               <table class="table table-responsive-md table-hover">
                  <thead>
                     <tr>
                        <th></th>
                        <th>#</th>
                        <th>Nome Curso</th>
                        <th>Carga Horaria</th>
                        <th>Ementa</th>
                        <th>Ações</th>
                     </tr>
                  </thead>
                  <tbody>

                     @foreach($curse as $curses)
                        <tr>
                           <td><img src="{{ url('assets/img/curse.svg') }}" alt="Instrutor"></td>
                           <td>{{ $curses->id }}</td>
                           <td>{{ $curses->nome_curso }}</td>
                           <td>{{ $curses->carga_horaria }}</td>
                           <td>{{ $curses->ementa_curso }}</td>
                           <td>
                              <div class="action">
                                 <form method="GET" action="{{ url("/curse/edit/$curses->id") }}">
                                    @csrf
                                       <button class="btn btn-circle">
                                          <i class="fa fa-pencil"></i>
                                       </button>
                                 </form>

                                 <form method="GET" action="{{ url("/curse/show/$curses->id") }}">
                                    @csrf
                                       <button class="btn btn-circle">
                                          <i class="fa fa-eye"></i>
                                       </button>
                                 </form>
         
                                 <form method="POST" action="{{ url("/curse/remove/$curses->id") }}">
                                    @csrf
                                       <button class="btn btn-remove-circle">
                                          <i class="fa fa-trash"></i>
                                       </button>
                                 </form>
                              </div>
                           </td>
                        </tr>
                     @endforeach

                  </tbody>
               </table>
         </div>
      </div>
      <div class="mt-2 float-right">
         {{ $curse->links() }}
      </div>
   </div>
@endsection