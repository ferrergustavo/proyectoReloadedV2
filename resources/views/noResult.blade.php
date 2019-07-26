@extends('layouts.products')
@section('noResult')
    <div class="noResultCont">
        <div class="noResultBody">
            <div class="divH2NoResult">
            <h2 class="noResultH1"> <strong> No<br> se encontraron <br> productos </strong></h2>
            </div>
            <div class="noResultImg">
            <img src="{{Storage::url('/logobyn.svg')}}" alt="">
            </div>
        </div>
    </div>
@endsection