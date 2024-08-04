@extends('layouts.back.main')
@section('title', __('Edit Slider'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Edit Slider') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">{{ __('Slider') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Edit Slider') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{ __('Edit Slider') }}</h5>
                    </div>
                    {!! Form::model($slider, [
                        'route' => ['sliders.update', $slider->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('body', __('Title'), ['class' => 'form-label']) }}
                                    {!! Form::text('title', null, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter title'),
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('image', __('Image'), ['class' => 'form-label']) }} *
                                    {!! Form::file('image', ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('sliders.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Update'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection