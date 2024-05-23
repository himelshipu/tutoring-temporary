@extends('admin.newlayout.layout')
@section('title','Quizzes results')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush
@section('page')
    <div class="card">
        <div class="card-header">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
            </div>
            <h2 class="panel-title">Quizzes results</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none m-b-0" id="datatable-details">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{ trans('admin.th_name') }}</th>
                        <th class="text-center">{{ trans('admin.student') }}</th>
                        <th class="text-center">{{ trans('admin.th_vendor') }}</th>
                        <th class="text-center">{{ trans('admin.grades') }}</th>
                        <th class="text-center">{{ trans('admin.grade_date') }}</th>
                        <th class="text-center">{{ trans('admin.status') }}</th>
                        <th class="text-center">{{ trans('admin.th_controls') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($quiz_results as $index=>$item)
                        <tr>
                            <td class="text-center">{!! $index+1 !!}</td>
                            <td class="text-center">{!! $quiz->name ?? '' !!}</td>
                            <td class="text-center">{!! $item->student->name ?? '' !!}</td>
                            <td class="text-center">{!! $quiz->user->username ?? '' !!}</td>
                            <td class="text-center">{!! $item->user_grade ?? 0 !!}</td>
                            <td class="text-center">{!! $item->user_grade ?? 0 !!}</td>
                            <td class="text-center">
                                @if($item->status=='pass')
                                    <span class="badge badge-info">Passed</span>
                                @elseif($item->status=='waiting')
                                <span class="badge badge-warning">Waiting</span>
                                @else
                                    <span class="badge badge-danger">Failed</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="#" data-href="/admin/quizzes/{{$quiz->id}}/results/{{$item->id}}/delete" title="Delete"
                                   data-toggle="modal" data-target="#confirm-delete" class="c-r"><i class="fa fa-times"
                                                                                                    aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
{{--                {{$lists->links()}}--}}
            </div>
        </div>
    </div>
@stop
@push('script')
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable-details').DataTable();
        } );
    </script>
@endpush
