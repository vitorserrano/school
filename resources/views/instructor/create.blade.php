@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">
                @if(isset($instructor))
                    Edição do Instrutor
                @else 
                    Cadastro do Instrutor
                @endif
            </h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/instructor.svg') }}" alt="Instrutores">
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

        @if(isset($instructor))
            <form name="formInstructorEdit" method="POST" action="{{ url("/instructor/update/$instructor->id") }}" class="col-lg-12">
        @else 
            <form name="formInstructorCreate" method="POST" action="{{ url("/instructor/create") }}" class="col-lg-12">
        @endif
            @csrf
                <div class="form-row col-lg-6">
                    <div class="col-lg-8 mt-4">
                        <label>Nome do Instrutor</label>
                        <input 
                            id="nome_instrutor"
                            name="nome_instrutor"
                            type="text"
                            class="form-control"
                            placeholder="Digito o nome"
                            value="{{ $instructor->nome_instrutor ?? '' }}"
                        />
                    </div>    

                    <div class="col-lg-4 mt-4">
                        <label>Celular</label>
                        <input 
                            id="fone_celular"
                            name="fone_celular"
                            type="text"
                            class="form-control"
                            placeholder="9 9999-9999"
                            value="{{ $instructor->fone_celular ?? '' }}"
                        />
                    </div>    

                    <div class="col-lg-6 mt-4">
                        <label>CPF</label>
                        <input 
                            id="cpf"
                            name="cpf"
                            type="text"
                            class="form-control"
                            placeholder="999.999.999/99"
                            value="{{ $instructor->cpf ?? '' }}"
                        />
                    </div>    

                    <div class="col-lg-6 mt-4">
                        <label>RG</label>
                        <input 
                            id="rg"
                            name="rg"
                            type="text"
                            class="form-control"
                            placeholder="Digiter o RG"
                            value="{{ $instructor->rg ?? '' }}"
                        />
                    </div>       

                    <div class="col-lg-8 mt-4">
                        <label>E-mail</label>
                        <input 
                            id="email_instrutor"
                            name="email_instrutor"
                            type="email"
                            class="form-control"
                            placeholder="Digite o e-mail"
                            value="{{ $instructor->email_instrutor ?? '' }}"
                        />
                    </div>    

                    <div class="col-lg-4 mt-4">
                        <label>Data de Nascimento</label>
                        <input 
                            id="data_nascimento"
                            name="data_nascimento"
                            type="date"
                            class="form-control"
                            value="{{ $instructor->data_nascimento ?? '' }}"
                        />
                    </div>

                    <div class="col-lg-12 mt-4">
                        <label>Currículo</label>
                        <input 
                            id="mini_curriculum"
                            name="mini_curriculum"
                            type="text"
                            class="form-control"
                            value="{{ $instructor->mini_curriculum ?? '' }}"
                        />
                    </div>  
                </div>

                <button 
                    type="submit" 
                    class="btn btn-default mt-5"
                >
                    @if(isset($instructor))
                        Editar
                    @else 
                        Cadastrar
                    @endif
                </button>
        </form>
    </div>
@endsection