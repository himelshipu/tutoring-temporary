@extends('admin.newlayout.layout',['breadcom'=>['Jobs','New Job']])
@section('title')
 New Job
@endsection
@section('page')
    <div class="card">
        <div class="card-body">
            <div id="main" class="tab-pane active">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('career-jobs.store') }}" class="form-horizontal form-bordered">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label">Title</label>
                        <div class="col-md-6">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Position</label>
                        <div class="col-md-6">
                            <input type="text" name="position" value="{{ old('position') }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control summernote" rows="10" cols="10" name="description">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">End Date</label>
                        <div class="col-md-6">
                            <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-6">
                            <select name="status" class="form-control populate">
                                <option value="active">Action</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection


