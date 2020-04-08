@extends('template.layout')

@section('content')
    <div class="content">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Matrículas</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/registration.svg') }}" alt="Matrículas">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes das <strong>matrículas</strong> da escola.</p>
                        <a href="/registration" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Alunos</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/student.svg') }}" alt="Alunos">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>alunos</strong> da escola.</p>
                        <a href="/student" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cursos</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/curse.svg') }}" alt="Cursos">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>cursos</strong> da escola.</p>
                        <a href="/curse" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Instrutores</h2>
                        <div class="card-image">
                            <img src="{{ url('assets/img/instructor.svg') }}" alt="Instrutores">
                        </div>
                        <p class="card-text">Cadastre, edite e veja detalhes dos <strong>instrutores</strong> da escola.</p>
                        <a href="/instructor" class="btn btn-default">Listagem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection