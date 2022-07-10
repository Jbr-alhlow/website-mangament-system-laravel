@extends('layouts.app')

@section('content')
<link href="{{ asset('css/task.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @php
                    $x = 0;
                   $y = 0;
                    $f = 0;
                   @endphp
                   @foreach ($list as $item)
                   @if($item->status==0)
                   <div class="g">{{ $x = $x+1}}</div>
                   @elseif($item->status==1)
                   <div class="g">{{ $y = $y+1}}</div>
                   @elseif($item->status==2)
                   <div class="g">{{ $f = $f+1}}</div>
                   @endif

                   @endforeach
                   @php
                    echo('<div class="x" id="x">'.$x.'</div>');
                    echo('<div class="y" id="y">'.$y.'</div>');
                    echo('<div class="f" id="f">'.$f.'</div>');

                    echo('<div  >in progress task:'.$x.'</div>');
                    echo('<div  >done task:'.$y.'</div>');
                    echo('<div  >feild task:'.$f.'</div>');
                     $t=$f+$y+$x;
                    echo('<div class="f" id="all">'.$t.'</div>');


                    @endphp


                    <script>
window.onload = function() {
    let x = document.getElementById("x").innerText;
    let y = document.getElementById("y").innerText;
    let f = document.getElementById("f").innerText;
       let all = document.getElementById("all").innerText;

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "tasks"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: x*100/all, label: "In progress"},
			{y: f*100/all, label: " feild"},
			{y: y*100/all, label: "done"},

		]
	}]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="{{ asset('js/canvas.js') }}" ></script>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
