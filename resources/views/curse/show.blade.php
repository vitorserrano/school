@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">Detalhes do Curso</h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/curse.svg') }}" alt="Cursos">
                </div>
        </div>

        <form class="col-lg-12">
            <div class="form-row col-lg-6">
                <div class="col-lg-8 mt-4">
                    <label>Nome do Curso</label>
                    <input 
                        id="nome_curso"
                        name="nome_curso"
                        type="text"
                        class="form-control"
                        placeholder="Digito o nome"
                        value="{{ $curse->nome_curso }}"
                        disabled
                    />
                </div>    

                <div class="col-lg-4 mt-4">
                    <label>Carga Horaria</label>
                    <input 
                        id="carga_horaria"
                        name="carga_horaria"
                        type="text"
                        class="form-control"
                        value="{{ $curse->carga_horaria }}"
                        disabled
                    />
                </div>    

                <div class="col-lg-12 mt-4">
                    <label>Ementa do Curso</label>
                    <input 
                        id="ementa_curso"
                        name="ementa_curso"
                        type="text"
                        class="form-control"
                        placeholder="Digite a ementa"
                        value="{{ $curse->ementa_curso }}"
                        disabled
                    />
                </div>    
            </div>
        </form>
    </div>
@endsection