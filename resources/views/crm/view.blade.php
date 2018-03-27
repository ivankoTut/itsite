@extends('layout')
@section('userjs')
@endsection
@section('content')


    <div class="row catfl3">
        <div class="col-md-1">
            <?php
            use Carbon\Carbon;

            $dt = Carbon::create();
            $m= date("m");
            $y= $dt->endOfMonth()->year;
                ?>


            <!--
                <h4>ГОД</h4>
                <a href="/crm/<?php echo $y; ?>"><?php echo $y;  ?></a> <br>

                -->
        </div>
        <div class="col-md-1">
            <h4><a href="/crm/">Все задачи</a> </h4>
            <h4>По датам</h4>
            <?php

            for ($id=1;  $id <= $dt->endOfMonth()->day; $id++)
            {
                if($id<10){ $id="0".$id;}
            ?>
            <a href="/crm/<?php echo $y."-".$m."-".$id; ?>"><?php echo $y."-".$m."-".$id;  ?></a> <br>

            <?php

            $dt->addDay(1);
            }
            ?>

        </div>
        <div class="col-md-10">

        <br><br>
        <hr>
        <form name="editnclass" method="post" action="/crm/save">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-success"  value="Сохранить все">
            <hr>
            <?php

            if(isset($d)){
               // dd($d);
              //  $d = Carbon::create($d, 1, 1, 0, 0, 0,'America/Toronto')->toDateTimeString();
            }

            ?>
            <input type=date" name="date" value="{{$d or date('Y-m-d')}}">
            <hr>
            <div id="nclass" class="row nclass">

                <div class="col-md-1">
                    <label  style="width:96%;" > категория </label>
                </div>
                <div class="col-md-5">
                    <label  style="width:96%;" > название </label>
                </div>
                <div class="col-md-1">
                    <label  style="width:96%;" > время мин. </label>
                </div>
                <div class="col-md-1">
                    <label  style="width:96%;" > стоимость </label>
                </div>
                <div  class="col-md-2">
                    <label  style="width:96%;" > статус </label>
                </div>
                <div style="clear: both"></div>

                @if(isset($c))
                    @foreach( $c as $cn)
                        <input type="hidden" readonly="readonly" name="id[]" value="{{$cn->id}}">
                        <div class="col-md-1">
                            <select name="kat[]">
                                @foreach($ukat as $k)
                                <option value="{{$k->id}}"  <?php if($k->id == $cn->kat){ echo "selected";} ?> > {{$k->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="name[]" value="{{$cn->name}}" style="width:96%;" >
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="time[]" value="{{$cn->time}}" style="width:96%;" >
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="price[]" value="{{$cn->price}}" style="width:96%;" >
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="status[]" value="{{$cn->status}}" style="width:96%;" >
                        </div>
                        <div  class="col-md-1">
                            <a href="/crm/delete/{{$cn->id}}"> <img src="/img/delete2.png" class="imgdel"> </a>
                        </div>
                        <div style="clear: both"></div>

                    @endforeach
                @endif
            </div>
            <img src="/img/add.png" class="crossrefaddb"  onclick="crmaddedform(1);"> <br>

        </form>

        </div>
    </div>
@endsection


