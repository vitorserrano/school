@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">Cadastro do Aluno</h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/student.svg') }}" alt="Alunos">
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
        <form name="formStudent" method="POST" action="{{ url('student') }}" class="col-lg-12">
            @csrf
                <div class="form-row col-lg-6">
                    <div class="col-lg-8 mt-4">
                        <label>Nome do Aluno</label>
                        <input 
                            id="nome_aluno"
                            name="nome_aluno"
                            type="text"
                            class="form-control"
                            placeholder="Digito o nome"
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
                        />
                    </div>       

                    <div class="col-lg-8 mt-4">
                        <label>E-mail</label>
                        <input 
                            id="email_aluno"
                            name="email_aluno"
                            type="email"
                            class="form-control"
                            placeholder="Digite o e-mail"
                        />
                    </div>    

                    <div class="col-lg-4 mt-4">
                        <label>Data de Nascimento</label>
                        <input 
                            id="data_nascimento"
                            name="data_nascimento"
                            type="date"
                            class="form-control"
                        />
                    </div> 
                </div>

                <button 
                    type="submit" 
                    class="btn btn-default mt-5"
                >Cadastrar</button>
        </form>
    </div>
@endsection