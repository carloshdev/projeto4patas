@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.5221942007124!2d-43.92111938549197!3d-19.859405486643237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69ac3c5437e8f%3A0xaf89be1db1ea54e6!2sPuc+Minas+S%C3%A3o+Gabriel!5e1!3m2!1spt-BR!2sbr!4v1558394724825!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection

