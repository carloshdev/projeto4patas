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
  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.9417616349715!2d-46.69910528501925!3d-23.713773684607347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4fa526fe9823%3A0x9974dc23da9cadd4!2sRua+Valter+Ribeiro+Marrany%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1558388903751!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection

