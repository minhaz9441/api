@extends('layouts.userlayout')

@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
<strong>Successfull...! </strong> {{ session('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>    
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger">
<strong>Error...! </strong> {{ session('error') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>    
</div>
@endif

<form action="{{ route('user.update_password') }}" method="post">
@csrf

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Settings</li>
  </ol>
</nav>

<section>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" name="currentPassword" id="currentPassword" class="form-control" placeholder="Current Password" value="{{ old('currentPassword') }}">
                        @if($errors->has('currentPassword'))
                            <div class="text-danger">{{ $errors->first('currentPassword') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                        @if($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-type Password">
                        @if($errors->has('password_confirmation'))
                            <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <br/>
        <button type="reset" class="btn btn-default"><i class="ti-back-left"></i> Reset</button>
       <button type="submit" class="btn btn-success"><i class="ti-save"></i> Save</button>
    </div>
</section>
</form>
@endsection
