@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
      <div class="row">

        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Категория 0</span></p>
            </div>
        </div>

            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Материалов 0</span></p>
                </div>
            </div>

                <div class="col-sm-3">
                    <div class="jumbotron">
                        <p><span class="label label-primary">Посетителей 0</span></p>
                    </div>
                </div>

                    <div class="col-sm-3">
                        <div class="jumbotron">
                            <p><span class="label label-primary">Посетителей сегодня 0</span></p>
                        </div>
                    </div>
        </div>
          <div class="row">

              <div class="col-sm-6">
                  <a href="#" class="btn btn-block btn-link btn-outline-primary">Создать категорию</a>
                  <a href="#" class="list-group-item">
                      <h4 class="list-group-item-heading">Категория 1</h4>
                       <p class="list-group-item-text">
                           Количество материалов
                       </p>
                  </a>
              </div>

              <div class="col-sm-6">
                  <a href="#" class="btn btn-block btn-link btn-outline-primary">Создать материал</a>
                  <a href="#" class="list-group-item">
                      <h4 class="list-group-item-heading">Последний добавленный материал</h4>
                      <p class="list-group-item-text">
                          Категория
                      </p>
                  </a>
              </div>

          </div>
      </div>
@endsection
