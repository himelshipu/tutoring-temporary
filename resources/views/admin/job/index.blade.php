@extends('admin.newlayout.layout',['breadcom'=>['Job List']])
@section('title')
  Jobs
@endsection
@section('page')

    <section class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-details">
                <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Position</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td class="text-center">{{ $job->title }}</td>
                        <td class="text-center">{{ $job->position }}</td>
                        <td class="text-center">{{ $job->end_date }}</td>
                        <td class="text-center">{{ $job->description }}</td>
                        <td class="text-center">{{ $job->status }}</td>
                        <td class="text-center">
                            <a href="{{ route('career-jobs.edit',$job->id) }}" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="#" class="text-danger" data-href="{{ route('career-jobs.destroy',$job->id) }}" title="Delete" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection

