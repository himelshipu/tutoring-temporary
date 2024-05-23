@extends('admin.newlayout.layout')
@section('title','Quizzes List')
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
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-none m-b-0" id="datatable-details">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{ trans('admin.th_name') }}</th>
                        <th class="text-center">{{ trans('admin.instructor') }}</th>
                        <th class="text-center">{{ trans('admin.question_count') }}</th>
                        <th class="text-center">{{ trans('admin.students_count') }}</th>
                        <th class="text-center">{{ trans('admin.average_grade') }}</th>
{{--                        <th class="text-center">{{ trans('admin.certificate') }}</th>--}}
                        <th class="text-center">{{ trans('admin.status') }}</th>
                        <th class="text-center">{{ trans('admin.th_controls') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($quizzes as $index=>$item)
                        @php
                            $QuizResults = $item->QuizResults;
                            $passed_results = 0;
                            $total_grade = 0;
                            foreach ($QuizResults as $result) {
                                if ($result->status == 'pass') {
                                    $passed_results += 1;
                                }
                                $total_grade += (int)$result->user_grade;
                            }

                            $item->passed = $passed_results;
                            $grade = $item->average_grade = ($total_grade > 0) ? round($total_grade / count($QuizResults), 2) : 0;
                        @endphp
                        <tr>
                            <td class="text-center">{!! $index+1 !!}</td>
                            <td class="text-center">{!! $item->name ?? '' !!}</td>
                            <td class="text-center">{!! $item->user->name ?? '' !!}</td>
                            <td class="text-center">{!! $item->questions->count() ?? '' !!}</td>
                            <td class="text-center">
                                {!! $item->user->count() ?? '' !!}<br>
                                <span>(Passed: {{$item->QuizResults->count()}})</span>
                            </td>
                            <td class="text-center">{{$grade}}</td>
                            <td class="text-center">
                                @if($item->status=='active')
                                    <span class="badge badge-info">Active</span>
                                @else
                                <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{route('results.show',$item->id)}}" title="Quiz Result">
                                    <i class="fa fa-poll-h fa-2x" aria-hidden="true"></i></a>
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
