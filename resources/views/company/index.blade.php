@extends('layouts.userlayout')

@section('content')

        <ul class="nav nav-tabs" role="tablist" id="company">
            <li class="nav-item" role="presentation">
                <a href="#details" class="nav-link active" id="details-tab" data-toggle="tab" role="tab">Company Details</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#about" class="nav-link" id="about-tab" data-toggle="tab" role="tab">About</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#services" class="nav-link" id="services-tab" data-toggle="tab" role="tab">Services</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#vision" class="nav-link" id="vision-tab" data-toggle="tab" role="tab">Vision</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#contact" class="nav-link" id="contact-tab" data-toggle="tab" role="tab">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="companyContent">
            <div class="tab-pane fade show active" id="details" role="tabpanel">
                <form action="" method="post" enctype="multipart/form-data">
                @csrf 
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" value="{{ old('name', $company->name) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Company Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control" value="{{ old('email', $company->email) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-2 col-form-label">Company Website</label>
                        <div class="col-sm-6">
                            <input type="text" name="website" class="form-control" value="{{ old('website') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-6">
                            <input type="file" name="logo" class="form-control" value="{{ old('logo') }}">
                        </div>
                        <div class="preview-image">
                            <img id="imagePreview" alt=""><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Company Phone</label>
                        <div class="col-sm-6">
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" name="submit" value="Save Details" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="about" role="tabpanel"><p>About Company</p></div>
            <div class="tab-pane fade" id="services" role="tabpanel">Company Services</div>
        </div>
    
@endsection
<script>
    function loadfile(event){
        var output = document.getElementById('imagePreview');
        output.src = URL.createObjectURL(event.target.files[0]);
        console.log(output.src);
    }
</script>