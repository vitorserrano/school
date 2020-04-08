@extends('template.layout')

@section('content')
<div class="content-list mt-5">
   <div class="form-row">
      <div class="header-list col-lg-12">
         <div class="title">
            <h2>Alunos</h2>
         </div>   
      
         <div class="button">
            <a href="{{ url('/student/create') }}" class="btn btn-create">
               <i class="fa fa-plus pr-1"></i>
               Aluno
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
                     <th>Nome Aluno</th>
                     <th>Nascimento</th>
                     <th>CPF</th>
                     <th>RG</th>
                     <th>Celular</th>
                     <th>E-mail</th>
                     <th>Ações</th>
                  </tr>
               </thead>
               <tbody>

                  @foreach($student as $students)
                     <tr>
                        <td><img src="{{ url('assets/img/student.svg') }}" alt="Aluno"></td>
                        <td>{{ $students->id }}</td>
                        <td>{{ $students->nome_aluno }}</td>
                        <td>{{ $students->data_nascimento }}</td>
                        <td>{{ $students->cpf }}</td>
                        <td>{{ $students->rg }}</td>
                        <td>{{ $students->fone_celular }}</td>
                        <td>{{ $students->email_aluno }}</td>
                        <td>
                           <div class="action">
                              <form method="GET" action="{{ url("/student/edit/$students->id") }}">
                                 @csrf
                                    <button class="btn btn-circle">
                                       <i class="fa fa-pencil"></i>
                                    </button>
                              </form>

                              <form method="GET" action="{{ url("/student/show/$students->id") }}">
                                 @csrf
                                    <button class="btn btn-circle">
                                       <i class="fa fa-eye"></i>
                                    </button>
                              </form>
      
                              <form method="POST" action="{{ url("/student/remove/$students->id") }}">
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
      {{ $student->links() }}
   </div>
</div>
@endsection