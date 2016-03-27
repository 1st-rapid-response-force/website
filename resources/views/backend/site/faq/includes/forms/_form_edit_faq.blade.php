<div class="form-group">
    {!! Form::label('question', 'Question:', ['class' => 'control-label']) !!}
    {!! Form::text('question', null, ['class' => 'form-control','placeholder'=>'What is the question?','required']) !!}
</div><!--form group-->
<div class="form-group">
    {!! Form::label('order', 'Order:', ['class' => 'control-label']) !!}
    {!! Form::text('order', null, ['class' => 'form-control','placeholder'=>'Provide a number, lower appears higher','required']) !!}
</div><!--form group-->
<label>Options:</label>
{!! Form::input('hidden','published',0) !!}
<div class="checkbox">
    <label>
        {!! Form::checkbox('published',1,$faq->published) !!} Published
    </label>
</div>
<hr>

<div class="form-group">
    {!! Form::label('answer', 'Answer:', ['class' => 'control-label']) !!}
    {!! Form::textarea('answer',null,['required']) !!}
</div><!--form group-->

