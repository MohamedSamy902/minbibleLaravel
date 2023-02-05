@extends('layouts.admin.master')

@section('title')
    Product
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatable-extension.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Product</h3>
        @endslot
        <li class="breadcrumb-item active">Product</li>
    @endcomponent


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('master.title') }}</th>
                                        <th>{{ __('master.content') }}</th>
                                        <th>Languages</th>
                                        <th>{{ __('master.image') }}</th>
                                        <th>{{ __('master.processes') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>

                                            <td>{{ ++$i }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{!! $product->content !!}</td>
                                            <td>{{ $product->language->name }}</td>
                                            <td>
                                                @if (isset($product->image->name))
                                                    <img style="max-width: 100px;max-height: 100px;"
                                                        src="{{ url('media/' . $product->image->name) }}">
                                                @endif

                                            </td>


                                            <td>
                                                <div style="display: flex;">
                                                    <a class="btn btn-outline-primary-2x" style="margin-right: 20px;"
                                                        href="{{ route('products.edit', $product->id) }}">{{ __('master.edit') }}</a>

                                                    <form action="{{ route('products.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input style="border-color: #d22d3d;"
                                                            class="btn btn-outline-danger-2x"
                                                            value="{{ __('master.delete') }}" type="submit">

                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
        <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
        <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    @endpush
@endsection
