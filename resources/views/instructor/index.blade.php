@extends('template.layout')

@section('content')
   <div class="content-list mt-5">
      <div class="form-row">
         <div class="header-list col-lg-12">
            <div class="title">
               <h2>Instrutores</h2>
            </div>   
         
            <div class="button">
               <a href="{{ url('/instructor/create') }}" class="btn btn-create">
                  <i class="fa fa-plus pr-1"></i>
                  Instrutor
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
                        <th>Nome Instrutor</th>
                        <th>Nascimento</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Celular</th>
                        <th>E-mail</th>
                        <th>Currículo</th>
                        <th>Ações</th>
                     </tr>
                  </thead>
                  <tbody>

                     @foreach($instructor as $instructors)
                        <tr>
                           <td><img src="{{ url('assets/img/instructor.svg') }}" alt="Instrutor"></td>
                           <td>{{ $instructors->id }}</td>
                           <td>{{ $instructors->nome_instrutor }}</td>
                           <td>{{ $instructors->data_nascimento }}</td>
                           <td>{{ $instructors->cpf }}</td>
                           <td>{{ $instructors->rg }}</td>
                           <td>{{ $instructors->fone_celular }}</td>
                           <td>{{ $instructors->email_instrutor }}</td>
                           <td>{{ $instructors->mini_curriculum }}</td>
                           <td>
                              <div class="action">
                                 <form method="GET" action="{{ url("/instructor/edit/$instructors->id") }}">
                                    @csrf
                                       <button class="btn btn-circle">
                                          <i class="fa fa-pencil"></i>
                                       </button>
                                 </form>

                                 <form method="GET" action="{{ url("/instructor/show/$instructors->id") }}">
                                    @csrf
                                       <button class="btn btn-circle">
                                          <i class="fa fa-eye"></i>
                                       </button>
                                 </form>
         
                                 <form method="POST" action="{{ url("/instructor/remove/$instructors->id") }}">
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
         {{ $instructor->links() }}
      </div>
   </div>
@endsection