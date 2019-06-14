@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                	<iframe width="100%" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMWQzMjc1YmEtOTMxYi00MzkzLWJmMWQtYzEwNDViMDhhYWY5IiwidCI6IjQzNzVmZjkzLTkwNTYtNDRiZi05MzZhLTVhZjg5ODJiNDk1NCJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
