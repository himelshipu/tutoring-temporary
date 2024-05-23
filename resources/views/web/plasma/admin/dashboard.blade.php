@extends('admin.newlayout.layout')
@section('title','Plasma Dashboard')
@section('page')
    <div class="card card-primary">
        <div class="card-header"><h4>Middle Feature Box</h4></div>
        <form method="post" action="/admin/setting/store">
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <label>Live classes</label>
                        <input type="text" class="form-control text-center" name="plasma_middle_feature_live_class_count" value="{{ get_option('plasma_middle_feature_live_class_count') }}">
                    </div>
                    <div class="col-12 col-md-3">
                        <label>Video courses</label>
                        <input type="text" class="form-control text-center" name="plasma_middle_feature_video_courses_count" value="{{ get_option('plasma_middle_feature_video_courses_count') }}">
                    </div>
                    <div class="col-12 col-md-3">
                        <label>Instructor</label>
                        <input type="text" class="form-control text-center" name="plasma_middle_feature_instructor_count" value="{{ get_option('plasma_middle_feature_instructor_count') }}">
                    </div>
                    <div class="col-12 col-md-3">
                        <label>Students</label>
                        <input type="text" class="form-control text-center" name="plasma_middle_feature_student_count" value="{{ get_option('plasma_middle_feature_student_count') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="h-10" style="height: 20px;"></div>
                    <input type="hidden" name="plasma_middle_feature_enable" value="0">
                    <input type="checkbox" class="custom-checkbox" name="plasma_middle_feature_enable" value="1" @if(get_option('plasma_middle_feature_enable') == 1) checked @endif>&nbsp;Enable
                </div>
                <div class="col-12 col-md-6 text-right">
                    <input type="submit" class="btn btn-primary" value="{{ trans('main.save') }}">
                </div>
            </div>
        </div>
        </form>
    </div>
@stop
<script>
    import Index from "../../../../../public/assets/default/vendor/flot/examples/zooming/index.html";
    export default {
        components: {Index}
    }
</script>
