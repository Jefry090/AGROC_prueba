@extends('layouts.app')

@section('template_title')
    Machinery
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Machinery') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('machineries.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Type</th>
										<th>Model</th>
										<th>Brand</th>
										<th>Yearmanufactured</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($machineries as $machinery)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $machinery->Type }}</td>
											<td>{{ $machinery->Model }}</td>
											<td>{{ $machinery->Brand }}</td>
											<td>{{ $machinery->YearManuFactured }}</td>
											<td>{{ $machinery->Status }}</td>

                                            <td>
                                                <form action="{{ route('machineries.destroy',$machinery->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('machineries.show',$machinery->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('machineries.edit',$machinery->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $machineries->links() !!}
            </div>
        </div>
    </div>
@endsection
