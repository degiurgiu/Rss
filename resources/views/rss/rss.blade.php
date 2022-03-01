@extends('layouts.pdf')

<style>
    .page_break { page-break-before: always; }
</style>

@section('content')
<div class="container row content-holeder align-items-center " style="margin: 0 auto;">
    <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
        @php
            $namespaces = $rss->getNamespaces(true);
        @endphp
        @for($n = 0; $n <= 5; $n++)
            <article class="entry-item">
                @php( $thumbnail = @$rss->channel->item[$n]->children($namespaces['media'])->content->attributes()->url)
                <div class="entry-content">
                    <img src="{{$thumbnail}}" style="width: 200px;" alt="">
                    <p>{{ $rss->channel->item[$n]->title}}</p>
                    <a href="{{ $rss->channel->item[$n]->link }}">Read More..</a>
                    {{ $rss->channel->item[$n]->description }}
                </div>
            </article>
            <div class="page_break"></div>
        @endfor
    </div>

</div>

@endsection


