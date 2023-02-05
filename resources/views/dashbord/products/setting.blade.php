@extends('layouts.admin.master')

@section('title')
    {{ __('master.seo_article') }}
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">{{ __('master.article') }}</a></li>
        <li class="breadcrumb-item active">{{ __('master.seo_article') }}</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('master.data') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{ route('articles.settingArticlePatch', $seo->model) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom07">{{ __('master.meta_en') }}</label>
                                    <input class="form-control" id="validationCustom07" type="text" name="title"  required="" value="{{ old('title') ? old('title') : $seo->getTranslation('title', 'en') }}"/>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom08">{{ __('master.meta_ar') }}</label>
                                    <input class="form-control" id="validationCustom08" type="text" name="title_ar" required="" value="{{ old('title_ar') ? old('title_ar') : $seo->getTranslation('title', 'ar') }}"/>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom09">{{ __('master.description_en') }}</label>
                                    <input class="form-control" id="validationCustom09" type="text" name="description"  required="" value="{{ old('description') ? old('description') : $seo->getTranslation('description', 'en') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom10">{{ __('master.description_ar') }}</label>
                                    <input class="form-control" id="validationCustom10" type="text" name="description_ar" required="" value="{{ old('description_ar') ? old('description_ar') : $seo->getTranslation('description', 'ar') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom11">{{ __('master.keywords_en') }}</label>
                                    <input class="form-control" id="validationCustom11" type="text" name="keywords"  required="" value="{{ old('keywords') ? old('keywords') : $seo->getTranslation('keywords', 'en') }}"/>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom12">{{ __('master.keywords_ar') }}</label>
                                    <input class="form-control" id="validationCustom12" type="text" name="keywords_ar" required="" value="{{ old('keywords_ar') ? old('keywords_ar') : $seo->getTranslation('keywords', 'ar') }}"/>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12">
                                    <label class="form-label" for="validationCustom11">{{ __('master.url') }}</label>
                                    <input class="form-control" id="validationCustom11" type="text" name="url"  required="" value="{{ old('url') ? old('url') : $seo->url }}"/>
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
