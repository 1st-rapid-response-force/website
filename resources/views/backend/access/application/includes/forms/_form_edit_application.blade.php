<div class="form-group">
    {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','placeholder'=>'First Name','required']) !!}
</div><!--form group-->

<div class="form-group">
    {!! Form::label('last_name', 'First Name:', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','placeholder'=>'Last Name','required']) !!}
</div><!--form group-->

<div class="form-group">
    {!! Form::label('dob', 'Date of Birth:', ['class' => 'control-label']) !!}
    {!! Form::text('dob', null, ['class' => 'form-control','placeholder'=>'MM/DD/YYYY','required','id'=>'dob']) !!}
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

