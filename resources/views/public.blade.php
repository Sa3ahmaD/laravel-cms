@extends('layout')

@section('status')
    @foreach ($status as $st)
    <div class="card mb-3 p-5">
        <div class="row g-0">
            <div class="col-2">
                <img class="rounded-circle" src="{{ $st->user->avatar ? $st->user->avatar : asset('images/avatar.jpg') }}" alt="...">
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

{{-- @section('actions')
    @if ($displayActions)
        <a href="{{route('shout.makefriend',$friendId)}}">Make Friend</a> |
        <a href="{{route('shout.unfriend',$friendId)}}">Unfriend</a>
    @endif
@endsection --}}