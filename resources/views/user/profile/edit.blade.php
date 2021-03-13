@extends('layouts.userlayout')

@section('content')

<article class="card mb-3">
    <div class="card-header">Edit Profile</div>
    <div class="card-body">
        <form action="{{ route('user.profile.update', $profile->user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="file" name="thumbnail" value="{{ $profile->thumbnail }}">
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ old('phone', $profile->phone) }}">
                    @if($errors->has('phone'))
                        <div class="text-danger">{{ $errors->first('phone') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname', $profile->firstname) }}">
                    @if($errors->has('firstname'))
                        <div class="text-danger">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ old('lastname', $profile->lastname) }}">
                    @if($errors->has('lastname'))
                        <div class="text-danger">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="1234 Main St" value="{{ old('address',$profile->address) }}">
                @if($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" class="form-control" name="street" placeholder="Main St" value="{{ old('street',$profile->street) }}">
                @if($errors->has('street'))
                    <div class="text-danger">{{ $errors->first('street') }}</div>
                @endif
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="{{ old('city', $profile->city) }}">
                    @if($errors->has('city'))
                        <div class="text-danger">{{ $errors->first('city') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="state" placeholder="State" value="{{ old('state', $profile->state) }}">
                    @if($errors->has('state'))
                        <div class="text-danger">{{ $errors->first('state') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-2">
                    <label for="pincode">Zip</label>
                    <input type="text" class="form-control" name="pincode" placeholder="Zip" value="{{ old('pincode', $profile->pincode) }}">
                    @if($errors->has('pincode'))
                        <div class="text-danger">{{ $errors->first('pincode') }}</div>
                    @endif
                </div>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" placeholder="country" value="{{ old('country', $profile->country) }}">
                    @if($errors->has('country'))
                    <div class="text-danger">{{ $errors->first('country') }}</div>
                    @endif
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
                
        </form>
    </div> <!-- card-body .// -->
</article> <!-- card.// -->

@endsection