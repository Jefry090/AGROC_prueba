@extends('layouts.app')

@section('template_title')
    Chat
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Chat') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('chats.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Datetime</th>
										<th>Text</th>
										<th>Images</th>
										<th>Videos</th>
										<th>Audios</th>
										<th>Id Profiles</th>
										<th>Id Post</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chats as $chat)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $chat->DateTime }}</td>
											<td>{{ $chat->Text }}</td>
											<td>{{ $chat->Images }}</td>
											<td>{{ $chat->Videos }}</td>
											<td>{{ $chat->Audios }}</td>
											<td>{{ $chat->id_profiles }}</td>
											<td>{{ $chat->id_post }}</td>

                                            <td>
                                                <form action="{{ route('chats.destroy',$chat->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('chats.show',$chat->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('chats.edit',$chat->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $chats->links() !!}
            </div>
        </div>
    </div>
@endsection
