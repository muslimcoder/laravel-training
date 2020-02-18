
    {{Form::open(['url'=>route('store-blog')])}}
    <div class="form-group">
        {{Form::label('title','Judule')}}
        {{Form::text('title',$blog->title ?? old('title'),['class'=>'form-control','id'=>'title','placeholder'=>'tuliskan judule'])}}
        @error('title')
        <span class="text-danger" role="alert">
        <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>

        <div class="form-group">
            {{Form::label('descriptions','Descriptions')}}
            {{Form::textarea('descriptions',$blog->descriptions ?? old('descriptions'),[
                'class'=>'form-control',
                'id'=>'descriptions',
                'rows'=>'3',
                'placeholder'=>'Tuliskan isinya disini',
            ]) }}

            @error('descriptions')
            <span class="text-danger" role="alert">
            <strong>{{$message}}</strong>
            </span>
            @enderror
            </div>
            <div class="form-group">
                {{ Form::submit('simpan',['class'=>'btn btn-success'])}}
                </div>

    {{Form::close()}}
