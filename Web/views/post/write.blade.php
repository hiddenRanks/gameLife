@extends('layout/master')

@section('scriptsection')
<script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<form action="/post" method="post">
    <textarea id="editor" class="area" rows="10"></textarea>
</form>
@endsection