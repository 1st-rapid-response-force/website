<div class="form-group">
    {!! Form::label('question', 'Question:', ['class' => 'control-label']) !!}
    {!! Form::text('question', old('question'), ['class' => 'form-control','placeholder'=>'What is the question?','required']) !!}
</div><!--form group-->
<div class="form-group">
    {!! Form::label('order', 'Order:', ['class' => 'control-label']) !!}
    {!! Form::text('order', old('order'), ['class' => 'form-control','placeholder'=>'Provide a number, lower appears higher','required']) !!}
</div><!--form group-->
<label>Options:</label>
{!! Form::input('hidden','published',0) !!}
<div class="checkbox">
    <label>
        {!! Form::input('checkbox','published',1) !!} Published
    </label>
</div>
<hr>

<div class="form-group">
    {!! Form::label('answer', 'Answer:', ['class' => 'control-label']) !!}
    {!! Form::textarea('answer',old('answer'),['required']) !!}
</div><!--form group-->

