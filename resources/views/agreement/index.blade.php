@extends('layouts.app')

@section('content')
@if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="container">
    <div class="row">
		<div class="well well-lg">Una vista por defecto para Convenios</div>
	</div>
</div>
@endsection