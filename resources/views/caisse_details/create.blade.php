@extends('templates.default')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">caisse_details</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> caisse_details</h1>
        </div>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Buttons</div> -->
                <div class="panel-body">
                    <form action="{{url('caisse_details')}}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="nom_compte"> comptes </label>
                                        <select name="compte_id"
                                            style="width:300px; height:35px ;background:gray; color:white" id=""
                                            class="form-control" class="@error('nom_compe') is-danger @enderror">
                                            <option value="">Select comptes</option>
                                            @foreach($comptes as $compte)
                                            <option value="{{$compte->id}}">{{$compte->nom_compte}}</option>
                                            @endforeach
                                            @error('compte->id')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_caisse"> caisse</label>
                                        <select name="caisse_id"
                                            style="width:300px; height:35px ;background:gray; color:white" id=""
                                            class="form-control" class="@error('numero_caisse') is-danger @enderror">
                                            <option value="">Select caisse</option>
                                            @foreach($caisses as $caisse)
                                            <option value="{{$caisse->id}}">{{$caisse->numero_caisse}}</option>
                                            @endforeach
                                            @error('caisse_id')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </select>
                                    </div>
                                </td>
                            
                                <td style="width:10%"> </td>
                                
                                <div class="form-group">
                                    <label for=""> encaissement</label>
                                    <input type="float" style="width:300px; height:35px ;background:gray; color:white"
                                        name="encaissement" id="" class="form-control"
                                        class="@error('encaissement') is-danger @enderror" placeholder="">
                                    @error('encaissement')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""> decaissement</label>
                                    <input type="float" style="width:300px; height:35px ;background:gray; color:white"
                                        name="decaissement" id="" class="form-control"
                                        class="@error('decaissement') is-danger @enderror" placeholder="">
                                    @error('decaissement')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">libelle</label>
                                    <input type="text" style="width:300px; height:35px ;background:gray; color:white"
                                        name="libelle" id="" class="form-control"
                                        class="@error('libelle') is-danger @enderror" placeholder="">
                                    @error('libelle')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                </td>
                            </tr>
                        </table>


                        <div class="form-group">
                            <div class="col-md-5 widget-right">
                                <!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> -->
                                <button type="submit" class="btn btn-sm btn-success">enregistrer</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        @endsection()