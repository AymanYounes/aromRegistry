@if ( count( $errors ) > 0 )
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
            </button>
            <p>{!! $error !!}</p>

        </div>
    @endforeach
    {{--<div class="alert alert-danger" >--}}
    {{--<button class="close" type="button"  data-dismiss="alert"><span aria-hidden="true">&times;</span>--}}
    {{--</button>--}}
    {{--<p>{{trans('btn.input_error')}}</p>--}}
    {{--</div>--}}
@elseif(Session()->has('success'))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p>{{trans(Session()->get('success'))}}</p>
    </div>
@elseif(!empty($success))
    <div class="alert alert-success">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p>{{$success}}</p>
    </div>
@elseif(Session()->has('error'))
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p>{{trans(Session()->get('error'))}}</p>
    </div>
@elseif(Session()->has('info'))
    <div class="alert alert-info">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p>{{trans(Session()->get('info'))}}</p>
    </div>
@endif
@if (session('status'))
    <div class="alert alert-danger">
        <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
        <p>{{ session('status')  }}</p>
    </div>
@endif

