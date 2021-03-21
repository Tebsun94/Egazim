@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="subCategory" class="col-md-4 col-form-label text-md-right">{{ __('Sub Category') }}</label>

                            <div class="col-md-6">
                                <input id="subCategory" type="text" class="form-control @error('subCategory') is-invalid @enderror" name="subCategory" value="{{ old('subCategory') }}" required autocomplete="subCategory" autofocus>

                                @error('subCategory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="productName" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="productName" type="text" class="form-control @error('productName') is-invalid @enderror" name="productName" value="{{ old('productName') }}" required autocomplete="productName" autofocus>

                                @error('productName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="productCompany" class="col-md-4 col-form-label text-md-right">{{ __('Product Company') }}</label>

                            <div class="col-md-6">
                                <input id="productCompany" type="productCompany" class="form-control @error('productCompany') is-invalid @enderror" name="productCompany" value="{{ old('productCompany') }}" required autocomplete="productCompany">

                                @error('productCompany')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="productPrice" class="col-md-4 col-form-label text-md-right">{{ __('productPrice') }}</label>

                            <div class="col-md-6">
                                <input id="productPrice" type="phone" class="form-control @error('productPrice') is-invalid @enderror" name="productPrice" value="{{ old('productPrice') }}" required autocomplete="productPrice">

                                @error('productPrice)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="productDescription" class="col-md-4 col-form-label text-md-right">{{ __('Produc Description') }}</label>

                            <div class="col-md-6">
                                <input id="productDescription"   type="textarea" class="form-control @error('productDescription') is-invalid @enderror" name="productDescription" value="{{ old('productDescription') }}" required autocomplete="productDescription">

                                @error('productDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                
                        
                            
                        <div class="form-group row">
                            <label for="productImage1" class="col-md-4 col-form-label text-md-right">{{ __('Product Image1') }}</label>

                            <div class="col-md-6">
                                <input id="productImage1" type="productImage1" class="form-control @error('productImage1') is-invalid @enderror" name="productImage1" required autocomplete="productImage1">

                                @error('productImage1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="DeliveryCharge" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Charge') }}</label>

                            <div class="col-md-6">
                                <input id="DeliveryCharge" type="DeliveryCharge" class="form-control @error('DeliveryCharge') is-invalid @enderror" name="DeliveryCharge" required autocomplete="DeliveryCharge">

                                @error('DeliveryCharge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="productAvailability" class="col-md-4 col-form-label text-md-right">{{ __('Product Availability') }}</label>

                            <div class="col-md-6">
                                <input id="productAvailability" type="productAvailability" class="form-control @error('productAvailability') is-invalid @enderror" name="productAvailability" required autocomplete="productAvailability">

                                @error('productAvailability')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
