@extends('layouts/candy_index')

@section('main')


  <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-md-4 margintop-sm">


              </div>
              <div class="col-md-4 margintop-sm">
                <div class="row">

                <form class="row" action="" method="post">
                  @csrf

                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="text" class="form-control" value="{{$detalle->title}}" id="title" name="title" placeholder="Titulo">
                          <p></p>
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="price" value="{{$detalle->price}}" name="price" placeholder="Precio">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="stock" name="stock"  value="{{$detalle->stock}}" placeholder="Stock">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="size" name="size" value="{{$detalle->size}}" placeholder="Peso (Gramos)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="date" class="form-control" id="release_date" value="{{$detalle->release_date}}" name="release_date" placeholder="Fecha De Lanzamiento">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control"  value="{{$detalle->getCategorieName()}}" name="categorianame" placeholder="Fecha De Lanzamiento">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  value="{{$detalle->categorie_id}}" name="categoria" placeholder="Fecha De Lanzamiento">
                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="categorie_id" id="categorie_id" placeholder="Categoria">
                                <option value="">Selecciona una Categoria</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary full-width" name="button">Editar Candy</button>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn-primary">
                        <a href="/candys/eliminate/{{$detalle->id}}">Eliminar</a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="btn btn-primary">
                        <a href="/candys">Atras</a>
                      </div>
                    </div>

                  </form>
                </div>

              </div>
              <div class="col-md-4 margintop-sm">

              </div>
          </div>
      </div>
  </section>

  @endsection
