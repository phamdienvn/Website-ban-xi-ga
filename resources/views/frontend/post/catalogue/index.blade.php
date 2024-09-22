@extends('frontend.homepage.layout')
@section('content')
    <div class="post-catalogue page-wrapper intro-wrapper">
        @if(!empty($postCatalogue->image))
        <span class="image img-cover"><img src="{{ image($postCatalogue->image) }}" alt=""></span>
        @endif
        @include('frontend.component.breadcrumb', ['model' => $postCatalogue, 'breadcrumb' => $breadcrumb])
        <div class="uk-container uk-container-center">
            <div class="post-container">
                <h1 class="heading-1" style="  display: flex; justify-content: center; align-items: center;  text-transform: uppercase;margin-top: 20px;margin-bottom: 20px;"><span>{{ $postCatalogue->name }}</span></h1>
                @if(!is_null($posts))
                <div class="uk-grid uk-grid-medium"> 
                    @foreach($posts as $key => $post)
                    @php
                        $name = $post->languages->first()->pivot->name;
                        $description = $post->languages->first()->pivot->description;
                        $image = image($post->image);
                        $canonical = write_url($post->languages->first()->pivot->canonical);
                    @endphp
                    <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4" style="margin-bottom: 35px;">
                        <div class="blog-item uk-clearfix">
                            <a href="{{ $canonical }}" class="image img-cover"><img src="{{ $image }}" alt="{{ $name }}" style="object-fit: scale-down;"></a>
                            <div class="info">
                                <h3 class="title" style="padding-left: 10px; padding-top: 5px; margin: 0px; "><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a></h3>
                                <div class="description" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;max-height: 5em;line-height: 1.5em;text-align: justify;padding-left: 10px;padding-top: 3px;">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @include('frontend.component.pagination', ['model' => $posts])
            </div>
        </div>

    </div>
@endsection

