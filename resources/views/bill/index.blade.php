@extends('layouts.app')

@section('template_title')
    Bill
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bill') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bills.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Time</th>
										<th>Type Bagde</th>
										<th>Cost</th>
										<th>Id Transaction</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bills as $bill)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bill->Time }}</td>
											<td>{{ $bill->Type_Bagde }}</td>
											<td>{{ $bill->cost }}</td>
											<td>{{ $bill->id_transaction }}</td>

                                            <td>
                                                <form action="{{ route('bills.destroy',$bill->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bills.show',$bill->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bills.edit',$bill->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $bills->links() !!}
            </div>
        </div>
    </div>
@endsection
