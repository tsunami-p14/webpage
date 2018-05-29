<div class="form-group">
    {{--{!! Form::label('m_maker', 'm_maker:') !!}--}}
    {{--{!! Form::select('m_maker[]', $makers, null, ['class' => 'form-control','size'=>1]) !!}--}}
    {{--<example-select></example-select>--}}
    <example-bvselcet :makers="{{$makers}}" :makerinfor="{{$makerinfor}}" :icategory="{{$icategory}}" :icategoryALL="{{$icategoryall}}" :ifunction="{{$ifunction}}" :ifunctionall="{{$ifunctionall}}"  :iinterface="{{$iinterface}}" :iinterfaceall="{{$iinterfaceall}}"  :mitem="{{$mitem}}" ></example-bvselcet>
</div>
<div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="Edit mitem">
</div>
