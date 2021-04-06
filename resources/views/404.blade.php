@extends('layouts.index')

@section('extra_class')
    error-nav
@endsection
@section('content')
<div class="error">
    <div class="rym-container">
        <div class="error-block">
            <div class="error-item">
                <div class="error-item-img">
                    <img src="/images/404.png" alt="">
                </div>
                <div class="error-item-title">@lang('messages.sorry')</div>
                <div class="error-item-text">@lang('messages.not_found')</div>
                <div class="error-item-link">
                    <a href="/" class="error-item-btn">@lang('messages.home')</a>
                </div>
            </div>
            <div class="error-img">
                <img src="/images/oops.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection