@extends('layouts.admin.master')
@section('title')
    Edit translation
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Edit translation</h3>
        @endslot

        <li class="breadcrumb-item"><a href="{{ route('translations.index') }}">translation</a></li>
        <li class="breadcrumb-item active"> Edit translation</li>
    @endcomponent

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        {{-- @include('admin.alert.notfications') --}}
        <form class="form theme-form" method="post" action="{{ route('translations.update', $translation->id) }}">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                {{-- <div class="card-header pb-0">
                                    <h5>بيانات القسم</h5>
                                </div> --}}
                                <div class="card-body">

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Word</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="name">
                                                <option {{ $translation->name == 'home' ? 'selected' : '' }} value="home">Home
                                                </option>
                                                <option {{ $translation->name == 'aboutTheWriter' ? 'selected' : '' }}
                                                    value="aboutTheWriter">About The Writer</option>
                                                <option {{ $translation->name == 'products' ? 'selected' : '' }} value="products">
                                                    Products</option>
                                                <option {{ $translation->name == 'nonMuslimViews' ? 'selected' : '' }}
                                                    value="nonMuslimViews">NonMuslimViews</option>
                                                <option {{ $translation->name == 'blog' ? 'selected' : '' }} value="blog">Blog
                                                </option>
                                                <option {{ $translation->name == 'contact' ? 'selected' : '' }} value="contact">
                                                    Contact</option>

                                            </select>
                                            <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                            <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                        </div>
                                    </div>

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationCustom01">Transelation</label>
                                            <input class="form-control" id="validationCustom01" type="text"
                                                name="translation" required="" value="{{ $translation->translation }}"/>
                                            <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                            <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                        </div>
                                    </div>

                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Languages</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="language_id">
                                                <option disabled="" value="">Languages
                                                </option>
                                                @foreach ($languages as $language)
                                                    <option
                                                        {{ $translation->language_id == $language->id ? 'selected' : '' }}
                                                        value="{{ $language->id }}">{{ $language->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                            <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Container-fluid Ends-->
@endsection
