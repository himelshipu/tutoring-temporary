@extends('admin.newlayout.layout',['breadcom'=>['Connection','Subscriptions']])
@section('title')
  Subscriptions
@endsection
@section('page')


    <section class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                    <thead>
                    <tr>
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscriptions as $subscription)
                        <tr>
                            <td class="text-center">{{ $subscription->email }}</td>
                            <td class="text-center">
                                <a href="#" class="text-danger" data-href="{{ route('subscribers.destroy',$subscription->id) }}" title="Delete" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">
            {!! $subscriptions->appends($_GET)->links('pagination.default') !!}
        </div>
    </section>
@endsection
