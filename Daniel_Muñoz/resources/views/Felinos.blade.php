@extends('layouts.master')
    @section('content')
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('images/1g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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
  <img src="{{ asset('images/2g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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
  <img src="{{ asset('images/3g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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
  <img src="{{ asset('images/4g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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
  <img src="{{ asset('images/5g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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
  <img src="{{ asset('images/6g.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">felinos</h5>
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