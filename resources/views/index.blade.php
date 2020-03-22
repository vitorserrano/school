@extends('template.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Alunos</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/student.svg') }}" alt="Alunos">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>alunos</strong> da graduação.</p>
                        <a href="/student" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cursos</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/curse.svg') }}" alt="Cursos">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>cursos</strong> da graduação.</p>
                        <a href="#" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Instrutores</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/instructor.svg') }}" alt="Instrutores">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>instrutores</strong> da graduação.</p>
                        <a href="#" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection