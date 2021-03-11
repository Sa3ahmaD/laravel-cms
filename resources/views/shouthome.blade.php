@extends('layout')

@section('form')
<div class="status-post-box">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{route('shout.save')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="status" id="" cols="25" rows="10"></textarea>
                        <input class="text-right btn float-end" type="submit" value="Submit">
                    </div>
                </form>                                    
            </div>
        </div>
    </div>
</div>  <!-- status post box End -->
@endsection

@section('status')
    @foreach ($status as $st)
    <div class="card mb-3 p-5">
        <div class="row g-0">
            <div class="col-2">
                <img class="rounded-circle" src="{{ $avatar }}" alt="...">
            </div>
            <div class="col-10">
                <div class="card-body">
                    <h5 class="card-title">{{ $st->user->name }} | <small class="text-muted">{{date('H:i A, dS M Y', strtotime($st->created_at))}}</small></h5>
                    <p class="card-text">{{$st['status']}}</p>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('script')
<script>
    ;(function($) {
        $(document).ready(function() {
            
        });
    })(jQuery);
</script>
@endsection