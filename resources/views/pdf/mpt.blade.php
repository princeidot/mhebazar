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

        @if (!empty($htpuploaddata->Manufacturer))
            <div class="sep">
                <div class="title">Manufacturer</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Manufacturer }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Model))
            <div class="sep">
                <div class="title">Model</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Model }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->Capacity))
            <div class="sep">
                <div class="title">Capacity</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Capacity }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->operator_type))
            <div class="sep">
                <div class="title">Operator Type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->Operator_Type }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->wheel_base))
            <div class="sep">
                <div class="title">Wheel base</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->wheel_base }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_size))
            <div class="sep">
                <div class="title">Platform size</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_size }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->platform_height))
            <div class="sep">
                <div class="title">Platform Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->platform_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->handle_height))
            <div class="sep">
                <div class="title">Handle Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->handle_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->overall_length))
            <div class="sep">
                <div class="title">Overall length</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->overall_length }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->overall_width))
            <div class="sep">
                <div class="title">Overall width</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->overall_width }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->overall_height))
            <div class="sep">
                <div class="title">Overall Height</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->overall_height }} </div>
            </div>
        @endif
        @if (!empty($htpuploaddata->wheel_type))
            <div class="sep">
                <div class="title">Wheel type</div>
                <div class="col"></div>
                <div class="detail">{{ $htpuploaddata->wheel_type }} </div>
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
