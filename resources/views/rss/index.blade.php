@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3"></div>
        <div class="col-xs-12 col-md-12 col-lg-4 col-xl-4" style="margin-top: 60px;">

            <div class="card card-custom">
                <div class="card-body">
                    <div class="portlet-body form">
                        <form role="form" action="{{route('parse.rss')}}" id="form" method="post">
                            {{ csrf_field() }}


                            <div class="form-body">
                                <div class="form-group">
                                    <label class="form-field-label" for="full_name">URL:<i
                                            class="field-required fa fa-asterisk font-size-xs text-danger"
                                            data-toggle="tooltip" title=""
                                            data-original-title="this field is required"></i></label>

                                        <input class="form-control h-auto mb20" type="text"
                                               placeholder="URL" name="url" id="url"/>
                                </div>

                                <div class="form-actions" align="right" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit
                                    </button>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger" style="margin-top: 20px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-5 col-xl-5"></div>
    </div>

@endsection


