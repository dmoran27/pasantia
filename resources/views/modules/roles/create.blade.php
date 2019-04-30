@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>

                <div class="panel-body">                    
                    <form method="POST" action="{{ route('roles.store') }}" aria-label="{{ __('registrar') }}">
                        @csrf
                        @include('modules.roles.partials.form')
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection