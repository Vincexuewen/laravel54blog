<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/11
 * Time: 17:39
 */
?>
@extends('Blog.Reception.Layout.layout')
@section('css')
<link href="{{ URL::asset('blog/reception/css/default.css') }}" rel="stylesheet">
<link href="{{ URL::asset('blog/reception/css/component.css') }}" rel="stylesheet">
@endsection
@section('js')
<script src="{{ URL::asset('blog/reception/js/modernizr.custom.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="container">
                            <div class="main">
                                <ul class="cbp_tmtimeline">
                                    @foreach($diarys as $diary)
                                    <li>
                                        <time class="cbp_tmtime">
                                            <span>{{ \Carbon\Carbon::parse($diary->created_at)->diffForHumans() }}</span>
                                            <span></span>
                                        </time>
                                        <div class="cbp_tmicon cbp_tmicon-screen"></div>
                                        <div class="cbp_tmlabel">
                                            <h4>{{ $diary->title }}</h4>
                                            <p>{{ $diary->content }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
