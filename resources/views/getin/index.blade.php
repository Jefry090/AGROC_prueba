@extends('layouts.app')

@section('template_title')
    Getin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Getin') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('getins.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Date</th>
										<th>Quantity</th>
										<th>Id Crops</th>
										<th>Id Product</th>
										<th>Id Supplies</th>
										<th>Id Animal</th>
										<th>Id Machineries</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getins as $getin)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $getin->Date }}</td>
											<td>{{ $getin->Quantity }}</td>
											<td>{{ $getin->id_crops }}</td>
											<td>{{ $getin->id_product }}</td>
											<td>{{ $getin->id_supplies }}</td>
											<td>{{ $getin->id_animal }}</td>
											<td>{{ $getin->id_machineries }}</td>

                                            <td>
                                                <form action="{{ route('getins.destroy',$getin->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('getins.show',$getin->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('getins.edit',$getin->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $getins->links() !!}
            </div>
        </div>
    </div>
@endsection
