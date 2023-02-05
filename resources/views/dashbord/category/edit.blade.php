@extends('layouts.admin.master')
@section('title')
    Edit Category
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Edit Category</h3>
        @endslot

        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
        <li class="breadcrumb-item active"> Edit Category</li>
    @endcomponent

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        {{-- @include('admin.alert.notfications') --}}
        <form class="form theme-form" method="post" action="{{ route('category.update', $category->id) }}">
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
                                    <div class="mb-3">
                                        <label class="col-form-label">Category Name</label>
                                        <input class="form-control" type="text" placeholder="" name="name"
                                            value="{{ $category->name }}">
                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                    </div>


                                    <div class="row g-1">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="validationDefault09">Languages</label>
                                            <select class="form-select" data-live-search="true" id="validationDefault09"
                                                name="language_id">
                                                <option disabled="" value="">Languages
                                                </option>
                                                @foreach ($languages as $language)
                                                    <option {{ $category->language_id == $language->id ? 'selected' : '' }}
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
