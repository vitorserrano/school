@extends('template.layout')

@section('content')
    <div class="content-form">
        <div class="header-form mt-5">
            <h2 class="card-title">Detalhes do Aluno</h2>
                <div class="card-image">
                    <img src="{{ url('assets/img/student.svg') }}" alt="Alunos">
                </div>
        </div>

        <form action="" class="col-lg-12">
            <div class="form-row col-lg-6">
                <div class="col-lg-8 mt-4">
                    <label>Nome do Aluno</label>
                    <input 
                        id="nome_aluno"
                        name="nome_aluno"
                        type="text"
                        class="form-control"
                        placeholder="Digito o nome"
                        value="{{ $student->nome_aluno }}"
                        disabled
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
                        value="{{ $student->fone_celular }}"
                        disabled
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
                        value="{{ $student->cpf }}"
                        disabled
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
                        value="{{ $student->rg }}"
                        disabled
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
                        value="{{ $student->email_aluno }}"
                        disabled
                    />
                </div>    

                <div class="col-lg-4 mt-4">
                    <label>Data de Nascimento</label>
                    <input 
                        id="data_nascimento"
                        name="data_nascimento"
                        type="date"
                        class="form-control"
                        value="{{ $student->data_nascimento }}"
                        disabled
                    />
                </div> 
            </div>
        </form>
    </div>
@endsection