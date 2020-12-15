@extends('templates.default')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Caisse</li>
        </ol>
    </div><!--/.row-->


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Mise à jour de la caisse</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Caisse</h1>
            </div>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Modifier la caisse</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form role="form" action="{{ route('caisses.update', $caisse->id) }}" method="post">
                                @csrf
                                

                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="description"><strong> Numero de la Caisse</strong></label>
                                        <textarea name="numero_caisse" id="numero_caisse" value="" rows="5" cols="100"
                                            class="form-control" class="@error('numero_caisse') is-danger @enderror"
                                            placeholder="Tapez le numero de la caisse ici" aria-describedby="helpId">
                                        {{ $caisse->numero_caisse }}
                                        </textarea>
                                        @error('numero_caisse')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

       
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="description"><strong> Solde de la caisse</strong></label>
                                        <textarea name="solde" id="solde_ouverture" value="" rows="5" cols="100"
                                            class="form-control" class="@error('solde') is-danger @enderror"
                                            placeholder="Tapez le solde de la caisse" aria-describedby="helpId">
                                        {{ $caisse->solde}}
                                        </textarea>
                                        @error('solde')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Numero du Guichet</label> 
                                    <select name="guichet_id" style="width:300px; height:35px ;background:gray; color:white" id="" class="form-control"
                                    class="@error('nomero_guichet') is-danger @enderror"> 
                                    <option value="" >Select numero Guichet</option>
                                    @foreach($$guichets as $guichet)
                                    <option value="{{$guichet->id}}">{{$guichet->nomero_guichet}}</option>
                                    @endforeach
                                    @error('guichet_id')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    </select>
                                </div>

                                  {{-- <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label> Numero du Guichet</label>
                                        <select name="guichet_id" id="" style="width:300px; height:35px ;background:gray; color:white"class="form-control">
                                            @foreach ($guichets as $guichet)
                                                <option value="{{ $guichet->id }}"{!!$caisse->guichet_id ==
                                                    $guichet->id ? 'selected="selected"' : ''
                                                    !!}>{{ $guichet->nom_guichet }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                </div>
                        </div>
                        </form>
                    </div>
                    <button type="submit"onclick="return confirm('Voulez vous modifier la verification qui a ete faite ?')"
                        class="btn btn-warning">Modifier</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div><!-- /.panel-->
        </div><!-- /.panel-->
    </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
    <!--/.main-->
@endsection
