
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1>Provider Terms & Condition</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy fghds fds gdrg</p>
                    <p>Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy fghds fds gdrg</p>
                    <p>Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy fghds fds gdrg</p>

                    <a class="btn btn-primary" href="{{ route('admin.profile', auth::user()->id) }}">
                        {{ __('Create Service') }}
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
