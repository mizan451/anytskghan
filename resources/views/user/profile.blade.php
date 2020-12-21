@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$user['name']}}</h1>
    </div>
@endsection

<script type="javascript">
    document.title = {{$user['name']}}
</script>
