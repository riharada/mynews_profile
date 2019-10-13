@extends('layouts.profile_front')

@section('content')
    <div class="container">
        <hr color="#000080">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="date">
                                {{ $headline->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="name p-2">
                                <h1>{{ str_limit($headline->name, 70) }}</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#0F0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="intoroduction mt-3">
                                    {{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#800080">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection