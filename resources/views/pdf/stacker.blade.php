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

        @if(!empty($htpuploaddata->manufacturer))
        <div class="sep">
            <div class="title">Manufacturer</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->manufacturer}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->model))
        <div class="sep">
            <div class="title">Model</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->model}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->capacity))
        <div class="sep">
            <div class="title">Capacity</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->capacity}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->operator_type))
        <div class="sep">
            <div class="title">Operator Type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->operator_type}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->width_over_forks))
        <div class="sep">
            <div class="title">Width Over Forks</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->width_over_forks}} </div>
        </div>
 @endif
         @if(!empty($htpuploaddata->mast_type))
        <div class="sep">
            <div class="title">Mast Type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->mast_type}} </div>
        </div>
 @endif
         @if(!empty($htpuploaddata->load_center_for_rated_capacity))
        <div class="sep">
            <div class="title">Load center for rated capacity</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->load_center_for_rated_capacity}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->wheel_base))
        <div class="sep">
            <div class="title">Wheel base</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->wheel_base}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->wheel_type))
        <div class="sep">
            <div class="title">Wheel type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->wheel_type}} </div>
        </div>
         @endif
         @if(!empty($htpuploaddata->number_of_wheels))
        <div class="sep">
            <div class="title">
                No. of wheels
            </div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->number_of_wheels}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->lift_height))
        <div class="sep">
            <div class="title">Lift Heighth</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lift_height}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->max_extended_height))
        <div class="sep">
            <div class="title">Max Extended Height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->max_extended_height}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->lowered_height))
        <div class="sep">
            <div class="title">Lowered Height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lowered_height}} </div>
        </div>@endif
        @if(!empty($htpuploaddata->lowered_fork_height))
        <div class="sep">
            <div class="title">Lowered fork height</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lowered_fork_height}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->overall_length))
        <div class="sep">
            <div class="title">Overall length</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->overall_length}} </div>
        </div>
        @endif
          @if(!empty($htpuploaddata->overall_width))
        <div class="sep">
            <div class="title">Overall width</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->overall_width}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->turning_radius))
        <div class="sep">
            <div class="title">Turning Radius</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->turning_radius}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->min_aisle_width))
        <div class="sep">
            <div class="title">Min Aisle Width</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->min_aisle_width}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->min_ground_clearance))
        <div class="sep">
            <div class="title">Min Ground Clearance</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->min_ground_clearance}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->travel_speed))
        <div class="sep">
            <div class="title">Travel Speed</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->travel_speed}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->lift_speed))
        <div class="sep">
            <div class="title">Lift Speed</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lift_speed}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->lowering_speed))
        <div class="sep">
            <div class="title">Lowering Speed</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lowering_speed}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->gradient))
        <div class="sep">
            <div class="title">	Gradient</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->gradient}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->drive_motor))
        <div class="sep">
            <div class="title">	Drive Motor</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->drive_motor}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->lift_motor))
        <div class="sep">
            <div class="title">Lift Motor</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->lift_motor}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->steering_motor))
        <div class="sep">
            <div class="title">Steering Motor</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->steering_motor}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->battery_type))
        <div class="sep">
            <div class="title">Battery Type</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->battery_type}} </div>
        </div>
        @endif
        @if(!empty($htpuploaddata->battery_capacity))
        <div class="sep">
            <div class="title">Battery Capacity</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->battery_capacity}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->controler))
        <div class="sep">
            <div class="title">Controler</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->controler}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->battery_weight))
        <div class="sep">
            <div class="title">Battery Weight</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->battery_weight}} </div>
        </div>
        @endif
         @if(!empty($htpuploaddata->service_weight))
        <div class="sep">
            <div class="title">Service Weight</div>
            <div class="col"></div>
            <div class="detail">{{$htpuploaddata->service_weight}} </div>
        </div>
        @endif
<p>Image</p><br> 
    <div class="col-md-4"> 
          
        <img src="{{ public_path('../css/asset/image/'.$htpuploaddata->img1) }}" style="width: 300px; height: auto">
    </div>
    </div>


</body>

</html>