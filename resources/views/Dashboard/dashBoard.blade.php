@extends('include.footer2');

@extends('include.dashAdd')
@extends('layouts.app')
@section('content')
            <div class="card">
                <div class="card-header ">index</div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

      
@endsection