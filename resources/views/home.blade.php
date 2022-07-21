@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-12">
        
            <div class="card">
            <diary-component></diary-component>
               
                
                <div class="card-body">


                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('текст страници') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
