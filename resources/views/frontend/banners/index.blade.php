
 @extends('layouts.app')

@section('content')



<div class="row">
                                                <div class="col-sm-12">


<h4>Referral Link</h4>
<code>{{ url('/').'/r/'.$user_details['username'] }}</code>
<hr/>

<h4>Banners</h4>

    <img src="{{ asset('nestla/images/banners/banner-leaderboard.gif') }}"/>  <br/> <br/>

Embed Code (728x90 Banner)
<xmp>
<a href="{{ url('/').'/r/'.$user_details['username'] }}"><img src="{{ url('/').'/images/banners/banner-leaderboard.gif'}}"/></a>
</xmp>

<hr/>

<img src="{{ asset('nestla/images/banners/banner-full.gif') }}"/>  <br/> <br/>

Embed Code (468x60 Banner)
<xmp>
    <a href="{{ url('/').'/r/'.$user_details['username'] }}"><img src="{{ url('/').'/images/banners/banner-full.gif' }}"/></a>
</xmp>
<hr/>
<img src="{{ asset('nestla/images/banners/banner-square.gif') }}"/>  <br/> <br/>

Embed Code (125x125 Banner)
<xmp>
    <a href="{{ url('/').'/r/'.$user_details['username'] }}"><img src="{{ url('/').'/images/banners/banner-square.gif' }}"/></a>
</xmp>

<hr/>
<img src="{{ asset('nestla/images/banners/banner-skyscraper.gif') }}"/>  <br/> <br/>

Embed Code (160x600 Banner)
<xmp>
    <a href="{{ url('/').'/r/'.$user_details['username'] }}"><img src="{{ url('/').'/images/banners/banner-skyscraper.gif' }}"></a>
</xmp>

<style>
    xmp {

        margin-bottom: 10px;
        overflow: auto;
        width: auto;
        background-color: #eee;
        padding: 10px;
        max-height: 600px;
        font-size: 12px;
    }
</style>



            </div>
        </div>
        </div>







@endsection
