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
        @if (!empty($htpuploaddata->Model))
            <div class="sep">
                <div class="title">Model</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Model }} </div>
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
        @if (!empty($htpuploaddata->Static_Load))
            <div class="sep">
                <div class="title">Static Load</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Static_Load }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Dynamic_Load))
            <div class="sep">
                <div class="title">Dynamic Load</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Dynamic_Load }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Working_Range_Above))
            <div class="sep">
                <div class="title"> Working Range Above</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Working_Range_Above }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Working_Range_Below))
            <div class="sep">
                <div class="title">Working Range Below</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Working_Range_Below }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Platform_Length))
            <div class="sep">
                <div class="title">Platform length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Platform_Length }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Platform_Width))
            <div class="sep">
                <div class="title">Platform width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Platform_Width }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Lip_Length))
            <div class="sep">
                <div class="title">Lip Length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Lip_Length }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Lip_width))
            <div class="sep">
                <div class="title">Lip width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Lip_width }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->Lip_Extention))
            <div class="sep">
                <div class="title">Lip Extention</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Lip_Extention }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Lip_Operation))
            <div class="sep">
                <div class="title">Lip Operation</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Lip_Operation }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->lip_flap_sheet_thickness))
            <div class="sep">
                <div class="title">lip flap sheet thickness</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->lip_flap_sheet_thickness }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->Pit_Width))
            <div class="sep">
                <div class="title">Pit width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Pit_Width }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Pit_Length))
            <div class="sep">
                <div class="title">Pit Length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Pit_Length }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Pit_Height))
            <div class="sep">
                <div class="title">	Pit Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Pit_Height }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->Lifting_Cylinder_No))
            <div class="sep">
                <div class="title">	Lifting Cylinder No</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Lifting_Cylinder_No }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->lip_cylinder))
            <div class="sep">
                <div class="title">Lip cylinder</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->lip_cylinder }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->bumper))
            <div class="sep">
                <div class="title">Bumper</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->bumper }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->Motor_Rating))
            <div class="sep">
                <div class="title">Motor Rating</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Motor_Rating }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_railing_height))
            <div class="sep">
                <div class="title">Platform railing height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_railing_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->ramp_overall_length))
            <div class="sep">
                <div class="title">	Ramp overall length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->ramp_overall_length }} </div>
            </div>
        @endif
         @if (!empty($htpuploaddata->ramp_overall_width))
            <div class="sep">
                <div class="title">Ramp overall width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->ramp_overall_width }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->power_pack))
            <div class="sep">
                <div class="title">Power Pack</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->power_pack }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_material))
            <div class="sep">
                <div class="title">Platform Material</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_material }} </div>
            </div>
        @endif
          @if (!empty($htpuploaddata->minimum_height))
            <div class="sep">
                <div class="title">Minimum Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->minimum_height }} </div>
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
