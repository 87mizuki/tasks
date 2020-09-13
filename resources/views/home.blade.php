@extends('layouts.app')

@section('content')


<div class="bg bg02">
@include('parts.bg_02')
</div>

<section class="mv-wrapper">
<div class="container">

<div class="mv -tit">
<div class="inner">
@include('parts.logo')
@include('parts.tit')
</div>
</div>
<div class="mv -img">
@include('parts.phone')
</div>



            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
     
</div>
</section>
<div class="bg">
@include('parts.bg')
</div>
@endsection