@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">
                @if(isset($registration))
                    Edição da Matrícula
                @else 
                    Cadastro da Matrícula
                @endif
            </h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/registration.svg') }}" alt="Matrícula">
                </div>
        </div>

        @if(isset($errors) && count ($errors) > 0) 
            <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                @foreach($errors->all() as $error)
                    <div class="col-lg-4 alert alert-danger p-2 mt-1 mb-1">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        @if(isset($registration))
            <form name="formRegistrationEdit" method="POST" action="{{ url("/registration/update/$registration->id") }}" class="col-lg-12">
        @else 
            <form name="formRegistrationCreate" method="POST" action="{{ url("/registration/create") }}" class="col-lg-12">
        @endif
            @csrf
                <div class="form-row col-lg-6">
                    <div class="col-lg-6 mt-4">
                        <label>Curso</label>
                        <select class="form-control" name="id_curso" id="id_curso">
                            <option 
                                value="{{$registration->relCurses->id ?? ''}}"
                            >{{ $registration->relCurses->nome_curso ?? 'Selecione...' }}</option>
                                @foreach($curse as $curses)
                                    <option value="{{ $curses->id }}">{{ $curses->nome_curso }}</option>
                                @endforeach
                        </select>
                    </div>    

                    <div class="col-lg-6 mt-4">
                        <label>Aluno</label>
                        <select class="form-control" name="id_aluno" id="id_aluno">
                            <option 
                                value="{{ $registration->relStudents->id ?? '' }}"
                            >{{ $registration->relStudents->nome_aluno ?? 'Selecione...' }}</option>
                                @foreach($student as $students)
                                    <option value="{{ $students->id }}">{{ $students->nome_aluno }}</option>
                                @endforeach
                        </select>
                    </div>    

                    <div class="col-lg-8 mt-4">
                        <label>Instrutor</label>
                        <select class="form-control" name="id_instrutor" id="id_instrutor">
                            <option 
                                value="{{ $registration->relInstructors->id ?? '' }}"
                            >{{ $registration->relInstructors->nome_instrutor ?? 'Selecione...' }}</option>
                                @foreach($instructor as $instructors)
                                    <option value="{{ $instructors->id }}">{{ $instructors->nome_instrutor }}</option>
                                @endforeach
                        </select>
                    </div> 
                    
                    <div class="col-lg-4 mt-4">
                        <label>Data Matrícula</label>
                        <input 
                            id="data_matricula"
                            name="data_matricula"
                            type="date"
                            class="form-control"
                            value="{{ $registration->data_matricula ?? '' }}"
                        />
                    </div> 

                    <div class="col-lg-4 mt-4">
                        <label>Nota 1</label>
                        <input 
                            id="nota1"
                            name="nota1"
                            type="text"
                            class="form-control"
                            placeholder="Digite a nota 1"
                            value="{{ $registration->nota1 ?? '' }}"
                        />
                    </div> 

                    <div class="col-lg-4 mt-4">
                        <label>Nota 2</label>
                        <input 
                            id="nota2"
                            name="nota2"
                            type="text"
                            class="form-control"
                            placeholder="Digite a nota 2"
                            value="{{ $registration->nota2 ?? '' }}"
                        />
                    </div> 

                    <div class="col-lg-4 mt-4">
                        <label>Data Certificado</label>
                        <input 
                            id="data_certificado"
                            name="data_certificado"
                            type="date"
                            class="form-control"
                            value="{{ $registration->data_certificado ?? '' }}"
                        />
                    </div> 

                    <div class="col-lg-12 mt-4">
                        <label>Identificador Certificado</label>
                        <input 
                            id="identificador_certificado"
                            name="identificador_certificado"
                            type="text"
                            class="form-control"
                            placeholder="Digite o identificador"
                            value="{{ $registration->identificador_certificado ?? '' }}"
                        />
                    </div>                 

                </div>

                <button 
                    type="submit" 
                    class="btn btn-default mt-5"
                >
                    @if(isset($registration))
                        Editar
                    @else 
                        Cadastrar
                    @endif
                </button>
        </form>
    </div>
@endsection