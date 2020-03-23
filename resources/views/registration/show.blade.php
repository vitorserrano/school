@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">Detalhes da Matrícula</h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/curse.svg') }}" alt="Cursos">
                </div>
        </div>

        <form class="col-lg-12">
            <div class="form-row col-lg-6">
                @php
                    $curse = $registration->find($registration->id)->relCurses;
                    $student = $registration->find($registration->id)->relStudents;
                    $instructor = $registration->find($registration->id)->relInstructors;
                @endphp
                <div class="col-lg-6 mt-4">
                    <label>Curso</label>
                    <input 
                        id="id_curso"
                        name="id_curso"
                        type="text"
                        class="form-control"
                        value="{{ $curse->nome_curso }}"
                        disabled
                    />
                </div>    

                <div class="col-lg-6 mt-4">
                    <label>Aluno</label>
                    <input 
                        id="id_aluno"
                        name="id_aluno"
                        type="text"
                        class="form-control"
                        value="{{ $student->nome_aluno }}"
                        disabled
                    />
                </div>    

                <div class="col-lg-8 mt-4">
                    <label>Instrutor</label>
                    <input 
                        id="id_instrutor"
                        name="id_instrutor"
                        type="text"
                        class="form-control"
                        value="{{ $instructor->nome_instrutor }}"
                        disabled
                    />
                </div>   

                <div class="col-lg-4 mt-4">
                    <label>Data Matrícula</label>
                    <input 
                        id="data_matricula"
                        name="data_matricula"
                        type="text"
                        class="form-control"
                        value="{{ $registration->data_matricula }}"
                        disabled
                    />
                </div>
                
                <div class="col-lg-4 mt-4">
                    <label>Nota 1</label>
                    <input 
                        id="nota1"
                        name="nota1"
                        type="text"
                        class="form-control"
                        value="{{ $registration->nota1 }}"
                        disabled
                    />
                </div>

                <div class="col-lg-4 mt-4">
                    <label>Nota 2</label>
                    <input 
                        id="nota2"
                        name="nota2"
                        type="text"
                        class="form-control"
                        value="{{ $registration->nota2 }}"
                        disabled
                    />
                </div>

                <div class="col-lg-4 mt-4">
                    <label>Data Certificado</label>
                    <input 
                        id="data_certificado"
                        name="data_certificado"
                        type="text"
                        class="form-control"
                        value="{{ $registration->data_certificado }}"
                        disabled
                    />
                </div>

                <div class="col-lg-12 mt-4">
                    <label>Identificador Certificado</label>
                    <input 
                        id="identificador_certificado"
                        name="identificador_certificado"
                        type="text"
                        class="form-control"
                        value="{{ $registration->identificador_certificado }}"
                        disabled
                    />
                </div>
            </div>
        </form>
    </div>
@endsection