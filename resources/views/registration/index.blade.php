@extends('template.layout')

@section('content')
   <div class="content-list mt-5">
      <div class="form-row">
         <div class="header-list col-lg-12">
            <div class="title">
               <h2>Matrículas</h2>
            </div>   
         
            <div class="button">
               <a href="{{ url('/registration/create') }}" class="btn btn-create">
                  <i class="fa fa-plus pr-1"></i>
                  Matrícula
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
                        <th>Curso</th>
                        <th>Aluno</th>
                        <th>Instrutor</th>
                        <th>Dt. Matricula</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Dt. Certificado</th>
                        <th>Id. Certificado</th>
                        <th>Ações</th>
                     </tr>
                  </thead>
                  <tbody>

                     @foreach($registration as $registrations)
                        @php
                           $curse = $registrations->find($registrations->id)->relCurses;
                           $student = $registrations->find($registrations->id)->relStudents;
                           $instructor = $registrations->find($registrations->id)->relInstructors;
                        @endphp
                           <tr>
                              <td><img src="{{ url('assets/img/registration.svg') }}" alt="Instrutor"></td>
                              <td>{{ $registrations->id }}</td>
                              <td>{{ $curse->nome_curso }}</td>
                              <td>{{ $student->nome_aluno }}</td>
                              <td>{{ $instructor->nome_instrutor }}</td>
                              <td>{{ $registrations->data_matricula }}</td>
                              <td>{{ $registrations->nota1 }}</td>
                              <td>{{ $registrations->nota2 }}</td>
                              <td>{{ $registrations->data_certificado }}</td>
                              <td>{{ $registrations->identificador_certificado }}</td>
                              <td>
                                 <div class="action">
                                    <form method="GET" action="{{ url("/registration/edit/$registrations->id") }}">
                                       @csrf
                                          <button class="btn btn-circle">
                                             <i class="fa fa-pencil"></i>
                                          </button>
                                    </form>

                                    <form method="GET" action="{{ url("/registration/show/$registrations->id") }}">
                                       @csrf
                                          <button class="btn btn-circle">
                                             <i class="fa fa-eye"></i>
                                          </button>
                                    </form>
            
                                    <form method="POST" action="{{ url("/registration/remove/$registrations->id") }}">
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
            {{ $registration->links() }}
         </div>
   </div>
@endsection