@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">
                @if(isset($curse))
                    Edição do Curso
                @else 
                    Cadastro do Curso
                @endif
            </h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/curse.svg') }}" alt="Curso">
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

        @if(isset($curse))
            <form name="formCurseEdit" method="POST" action="{{ url("/curse/update/$curse->id") }}" class="col-lg-12">
        @else 
            <form name="formCurseCreate" method="POST" action="{{ url("/curse/create") }}" class="col-lg-12">
        @endif
            @csrf
                <div class="form-row col-lg-6">
                    <div class="col-lg-8 mt-4">
                        <label>Nome do Curso</label>
                        <input 
                            id="nome_curso"
                            name="nome_curso"
                            type="text"
                            class="form-control"
                            placeholder="Digito o nome"
                            value="{{ $curse->nome_curso ?? '' }}"
                        />
                    </div>    

                    <div class="col-lg-4 mt-4">
                        <label>Carga Horaria</label>
                        <input 
                            id="carga_horaria"
                            name="carga_horaria"
                            type="number"
                            class="form-control"
                            value="{{ $curse->carga_horaria ?? '' }}"
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
                            value="{{ $curse->ementa_curso ?? '' }}"
                        />
                    </div>    

                </div>

                <button 
                    type="submit" 
                    class="btn btn-default mt-5"
                >
                    @if(isset($curse))
                        Editar
                    @else 
                        Cadastrar
                    @endif
                </button>
        </form>
    </div>
@endsection