<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>

    </title>
    <style>
        .title1,
        .header,
        .data {
            text-align: center;
        }

        .data {
            padding-left: 50px;
            padding-right: 50px;
        }

        .sep {
            padding: 9px 10px 10px;
            border-bottom: solid 1px #e7e7e7;
        }

        .sep .title {
            width: 30%;
            float: left;
        }

        .sep .detail {
            font-weight: 800;
            color: black;
        }

        .col::before {
            content: ':';
            width: 10%;
            float: left;
            font-weight: 800;
        }
        .col-md-4 {
    width: 33.33333333%;
}
p{
    font-weight: 600;
    font-size:18px;
float:left;
}
    </style>
</head>


<body>
    <div class="header">
        <img src="{{ public_path('../img/mhe-logo.webp') }}" width="200px">
    </div>

    <div class="title1">
        {{$htpuploaddata->title}}
    </div>
    <div class="data">


        <div class="sep">
            <div class="title">Manufacturer</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->manufacturer}} </div>
        </div>
        <div class="sep">
            <div class="title">Model</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->model}} </div>
        </div>
        <div class="sep">
            <div class="title">Capacity</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->capacity}} </div>
        </div>
        <div class="sep">
            <div class="title">Operator Type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->operator_type}} </div>
        </div>
        <div class="sep">
            <div class="title">Width Over Forks</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->width_over_forks}} </div>
        </div>

        <div class="sep">
            <div class="title">Fork Width</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->fork_width}} </div>
        </div>

        <div class="sep">
            <div class="title">Fork Length</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->fork_length}} </div>
        </div>
        <div class="sep">
            <div class="title">Min Height (Fork Lower)</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->min_height}} </div>
        </div>
        <div class="sep">
            <div class="title">Lift Height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lift_height}} </div>
        </div>
        <div class="sep">
            <div class="title">Max Lift Height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->max_lift_height}} </div>
        </div>
        @if(!empty($htpuploaddata->single_fork_width))
        <div class="sep">
            <div class="title">Single Fork Width</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->single_fork_width}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->wheel_type))
        <div class="sep">
            <div class="title">Wheel Type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->wheel_type}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->service_weight))
        <div class="sep">
            <div class="title">Service Weight</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->service_weight}} </div>
        </div>@endif
        @if(!empty($htpuploaddata->overall_length))
        <div class="sep">
            <div class="title">Overall Length</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->overall_length}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->overall_height))
        <div class="sep">
            <div class="title">Overall Height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->overall_height}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->turning_radius))
        <div class="sep">
            <div class="title">Turning Radius</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->turning_radius}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->material))
        <div class="sep">
            <div class="title">Material</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->material}} </div>
        </div>
        @endif
<p>Image</p><br> 
    <div class="col-md-4"> 
          
        <img src="{{ public_path('../css/asset/image/'.$htpuploaddata->img1) }}" style="width: 300px; height: auto">
    </div>
    </div>


</body>

</html>