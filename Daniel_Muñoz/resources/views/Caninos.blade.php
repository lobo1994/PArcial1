@extends('layouts.master')
    @section('content')
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('images/1p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date1 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('images/2p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date2 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('images/3p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date3 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('images/4p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date4 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('images/5p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date5 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="{{ asset('images/6p.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">caninos</h5>
    <p class="card-text"><ul>
    @foreach ($date6 as $p)
        <li>{{$p}}</li>
    @endforeach
    </ul>
    </p>
    <a href="#" class="btn btn-primary">comprar </a>
  </div>
</div>
@stop