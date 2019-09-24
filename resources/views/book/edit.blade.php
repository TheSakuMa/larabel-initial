@extends('book/layout')
@section('content')
<!-- \@\includeを使用して、form.blade.phpを\@\section内に挿入する -->
@include('book/form', ['target' => 'update'])
@endsection