@extends('layouts.template')
@section('content')
    <style>
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: gray;
            display: inline-block;
        }
        .inputfile + label {
            cursor: pointer; /* "hand" cursor */
        }
        .headerline {
            border-bottom: 2px solid #8c8c8c;
            background-color: lightgrey;
        }
        label {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        input {
            font-family: ThaiNeue;
            font-size: 12pt;
        }
        a {
            font-family: ThaiNeue;
            font-size: 18pt;
        }
        .textinput{
            margin-top: 11px;
            margin-left: -20px;
        }

    </style>
    <div class="container ">
        <div class="row">
            <div class="page-header col-md-offset-1">
                <button class="btn btn-default"><span class="glyphicon glyphicon-user"></span><a href="{{ url('editprofile') }}">แก้ไขโปร์ไฟล์</a></button>
                <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>
                    <a href="{{ url('post') }}"> เพิ่มประกาศรับสมัคร</a>
                </button>
            </div>
            <div class="col-xs-12  col-md-12">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-xs-3" align="center">
                            <img src="{{url('image/pic-default.png')}}" alt="เลือกรูปภาพ" class="img-rounded" width="200"
                                 height="200" id="output">
                            <br><br><input type="file" name="file" id="file" class="inputfile" onchange="loadFile(event)"/>
                            <label for="file">
                                <i class="glyphicon glyphicon-upload"></i> Choose a Picture...</label>
                        </div>
                        <div class="col-sm-5 col-md-8">
                            <div class="row">
                                <form class="form-horizontal" role="form" action="{{ url('detail_employer') }}">
                                    <fieldset>
                                        <legend class="font">แก้ไขโปร์ไฟล์</legend>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ชื่อ :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Name" class="form-control textinput">
                                            </div>
                                            <label class="col-sm-2 control-label">นามสกุล :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Last Name" class="form-control textinput">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">ที่อยู่ :</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" cols="30" rows="3" class="textinput"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">โทร :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="080-xxxxxxx" class="form-control textinput" value="">
                                            </div>
                                            <label class="col-sm-2 control-label">E-mail :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="@hotmail.com" class="form-control textinput" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Faecbook :</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Siriwut Patsan" class="form-control textinput" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="pull-left">
                                                    <button type="submit" class="btn btn-success btn-lg textinput">บันทึก</button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection