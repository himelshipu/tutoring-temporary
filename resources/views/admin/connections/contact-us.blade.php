@extends('admin.newlayout.layout',['breadcom'=>['Connection','Contact Us']])
@section('title')
    Contact Us Messages
@endsection
@section('page')


    <section class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                    <thead>
                    <tr>

                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">message</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td class="text-center">{{ $contact->name }}</td>
                            <td class="text-center">{{ $contact->email }}</td>
                            <td class="text-center">{{ $contact->phone }}</td>
                            <td class="text-center">{{ $contact->subject }}</td>
                            <td class="text-center">{{ $contact->message }}</td>
                            <td class="text-center">
                                <a href="#" class="text-danger" data-href="{{ route('contact-us.destroy',$contact->id) }}" title="Delete" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">
            {!! $contacts->appends($_GET)->links('pagination.default') !!}
        </div>
    </section>
@endsection
