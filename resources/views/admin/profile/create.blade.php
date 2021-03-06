<!--<!DOCTYPE html>-->
<!--<html>-->
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    
<!--    <title>MyProfile</title>-->
<!--  </head>-->
<!--  <body>-->
<!--    <h1>自己紹介</h1>-->
<!--  </body>-->
<!--</html>-->

{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.php@yield('title)に'Myプロフィール'を埋め込む --}}
@section('title','Myプロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-8 mx-auto">
       <h2>Myプロフィール</h2>
       <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
       
       @if (count($errors) > 0)
        <ul>
         @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
         @endforeach
        </ul>
       @endif
       <div class="form-group row">
        <label class="col-md-2" for="title">氏名</label>
       <div class="col-md-10">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
       </div>
      </div>
      <div class="form-group row">
       <label class="col-md-2" for="title">性別</label>
       <div class="col-md-10">
        <input type="radio" class="form-control" name="gender" value="male">男性
        <input type="radio" class="form-control" name="gender" value="female">女性
       </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2" for="title">趣味</label>
       <div class="col-md-10">
        <input type="text" class="form-control" name="hobby" value="{{ old('name') }}">
       </div>
      </div>
      <div class="form-group row">
       <label class="col-md-2" for="body">自己紹介</label>
       <div class="col-md-10">
        <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
       </div>
      </div>
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="更新">
       </form>
     </div>
   </div>
 </div>
@endsection