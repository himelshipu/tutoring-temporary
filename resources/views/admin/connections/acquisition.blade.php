@extends('admin.newlayout.layout',['breadcom'=>['Connection','Talent Acquisition']])
@section('title')
    Talent Acquisition Messages
@endsection
@section('page')


    <section class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                    <thead>
                    <tr>

                        <th class="text-center">Type</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">Budget</th>
                        <th class="text-center">message</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($acquisitionMessages as $item)
                        <tr>
                            <td class="text-center">{{ $item->type }}</td>
                            <td class="text-center">{{ $item->name }}</td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->phone }}</td>
                            <td class="text-center">{{ $item->subject }}</td>
                            <td class="text-center">{{ $item->budget }}</td>
                            <td class="text-center">{{ $item->message }}</td>
                            <td class="text-center">
                                <a href="#" class="text-danger" data-href="{{ route('talent-acquisitions.destroy',$item->id) }}" title="Delete" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">
            {!! $acquisitionMessages->appends($_GET)->links('pagination.default') !!}
        </div>
    </section>
@endsection
