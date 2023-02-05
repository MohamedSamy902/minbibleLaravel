@extends('layouts.admin.master')

@section('title')
Add Languages
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Language</a></li>
        <li class="breadcrumb-item active">Add Language</li>
    @endcomponent


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('master.data') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{ route('languages.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">{{ __('master.name') }}</label>
                                        <input class="form-control" id="validationCustom01" type="text" required=""
                                            name="name" placeholder="English" value="{{ old('name') }}" />
                                        <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                        <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                    </div>
                                </div>

                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom02">Short Name</label>
                                        <input class="form-control" id="validationCustom02" type="text" required=""
                                            name="short_name" placeholder="en" value="{{ old('short_name') }}" />
                                        <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                        <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                    </div>
                                </div>

                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom03">Flag</label>
                                        <input class="form-control" id="validationCustom03" type="text"
                                            name="name" placeholder="fi fi-us" value="{{ old('flag') }}" />
                                        <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                        <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                    </div>
                                </div>

                                <div class="row g-1">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationDefault04">Direction</label>
                                        <select class="form-select" id="validationDefault04" required="" name="direction">
                                            <option selected="" disabled="" value=""> Direction</option>
                                            <option value="rtl">Rtl</option>
                                            <option value="ltr" >ltr</option>
                                        </select>
                                        <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                        <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                    </div>
                                </div>




                            <button class="btn btn-primary" type="submit">{{ __('master.save') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    @endpush
@endsection
