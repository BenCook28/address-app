@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Addresses list') }}</div>

                    <div class="card-body">
                        <table class="table-ligh table-stripedt">
                            <tr>
                                <td>Name</td>
                                <td>Street1</td>
                                <td>Street2</td>
                                <td>City</td>
                                <td>State</td>
                                <td>ZIP</td>
                            </tr>


                            @foreach($addresses as $address)

                                <tr>
                                    <td>{{ $address->name }}</td>
                                    <td>{{ $address->stree1 }}</td>
                                    <td>{{ $address->street2 }}</td>
                                    <td>{{ $address->city }}</td>
                                    <td>{{ $address->zip }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="card-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" onclick="window.location='{{ route('address.create') }}'">
                                    {{ __('create') }}
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
