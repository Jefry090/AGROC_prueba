@extends('layouts.app')

@section('template_title')
    Inventory
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inventory') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inventories.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Total Cost</th>
										<th>Cost Unit</th>
										<th>Quantity</th>
										<th>Date Input</th>
										<th>Id Warehouses</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventories as $inventory)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventory->Total_Cost }}</td>
											<td>{{ $inventory->Cost_unit }}</td>
											<td>{{ $inventory->Quantity }}</td>
											<td>{{ $inventory->Date_Input }}</td>
											<td>{{ $inventory->id_warehouses }}</td>

                                            <td>
                                                <form action="{{ route('inventories.destroy',$inventory->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inventories.show',$inventory->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inventories.edit',$inventory->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $inventories->links() !!}
            </div>
        </div>
    </div>
@endsection
