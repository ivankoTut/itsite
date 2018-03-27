<input type="hidden" readonly="readonly" name="id[]" value="">
<div class="col-md-1">
    <select name="kat[]">
        @foreach($ukat as $k)
            <option value="{{$k->id}}"  > {{$k->name}}</option>
        @endforeach

    </select>
</div>
<div class="col-md-5">
    <input type="text" name="name[]" value="" style="width:96%;" >
</div>
<div class="col-md-1">
    <input type="number" name="time[]" value="1" style="width:96%;" >
</div>
<div class="col-md-1">
    <input type="number" name="price[]" value="1" style="width:96%;" >
</div>
<div class="col-md-1">
    <input type="number" name="status[]" value="1" style="width:96%;" >
</div>
<div  class="col-md-1">
</div>
<div style="clear: both"></div>