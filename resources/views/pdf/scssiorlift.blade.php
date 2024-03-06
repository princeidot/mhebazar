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

        p {
            font-weight: 600;
            font-size: 18px;
            float: left;
        }
    </style>
</head>


<body>
    <div class="header">
        <img src="{{ public_path('../img/mhe-logo.webp') }}" width="200px">
    </div>

    <div class="title1">
        {{ $htpuploaddata->title }}
    </div>



    <div class="data">

        @if (!empty($htpuploaddata->manufacturer))
            <div class="sep">
                <div class="title">Manufacturer</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->manufacturer }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->model))
            <div class="sep">
                <div class="title">Model</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->model }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->capacity))
            <div class="sep">
                <div class="title">Capacity</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->capacity }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->operator_type))
            <div class="sep">
                <div class="title">Operator Type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Operator_Type }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_width))
            <div class="sep">
                <div class="title">Platform Width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_width }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->platform_height))
            <div class="sep">
                <div class="title">Platform Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->lift_height))
            <div class="sep">
                <div class="title">Lift Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->lift_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->total_lift_height))
            <div class="sep">
                <div class="title">Total lift height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->total_lift_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->overall_length))
            <div class="sep">
                <div class="title">Overall Length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->overall_length }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->overall_width))
            <div class="sep">
                <div class="title"> Overall width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->overall_width }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->hydraulic_cylinder_no))
            <div class="sep">
                <div class="title">Hydraulic cylinder no</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->hydraulic_cylinder_no }} </div>
            </div>
        @endif
        
       
        @if (!empty($htpuploaddata->floor_lock_no))
            <div class="sep">
                <div class="title">floor lock no</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->floor_lock_no }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->floor_lock_type))
            <div class="sep">
                <div class="title">floor lock type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->floor_lock_type }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->no_of_wheel))
            <div class="sep">
                <div class="title">No. of wheel</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->no_of_wheel }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->wheel_type))
            <div class="sep">
                <div class="title">wheel type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->wheel_type }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->wheel_dimensions))
            <div class="sep">
                <div class="title">wheel dimensions</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->wheel_dimensions }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_extension))
            <div class="sep">
                <div class="title">Platform extension</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_extension }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_extention_type))
            <div class="sep">
                <div class="title">	Platform Extention Type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_extention_type }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->capacity_on_extented_platform	))
            <div class="sep">
                <div class="title">	capacity on extented platform	</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->capacity_on_extented_platform }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->wheel_base))
            <div class="sep">
                <div class="title">wheel base</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->wheel_base }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->ground_clearance))
            <div class="sep">
                <div class="title">Ground Clearance</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->ground_clearance }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->self_weight))
            <div class="sep">
                <div class="title">self weight</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->self_weight }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->turning_radoius))
            <div class="sep">
                <div class="title">Turning Radoius</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->turning_radoius }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->travel_speed))
            <div class="sep">
                <div class="title">		Travel speed</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->travel_speed }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->lifting_speed))
            <div class="sep">
                <div class="title">Lifting speed</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->lifting_speed }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->power_source))
            <div class="sep">
                <div class="title">Power source</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->power_source }} </div>
            </div>
        @endif
       
        <p>Image</p><br>
        <div class="col-md-4">

            <img src="{{ public_path('../css/asset/image/' . $htpuploaddata->img1) }}"
                style="width: 300px; height: auto">
        </div>
    </div>


</body>

</html>
