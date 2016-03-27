<fieldset>
    <legend>A. ENLISTEE/REENLISTEE IDENTIFICATION DATA</legend>
    <div data-row-span="4">
        <div data-field-span="1">
            {{Form::label('first_name','FIRST NAME')}}
            {{Form::text('first_name',old('first_name'),['required'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('last_name','LAST NAME')}}
            {{Form::text('last_name',old('last_name'),['required'])}}
        </div>
        <div data-field-span="2">
            {{Form::label('steam_id','MILITARY IDENTIFICATION NUMBER')}}
            {{Form::text('steam_id',\Auth::user()->steam->steam_id,['disabled'])}}
        </div>
    </div>
    <div data-row-span="3">
        <div data-field-span="1">
            {{Form::label('dob','DATE OF BIRTH')}}
            {{Form::text('dob',old('dob'),['id'=>'dob','placeholder'=>"02/01/2016",'required'])}}
        </div>
        <div data-field-span="2">
            {{Form::label('nationality','NATIONALITY')}}
            @include('frontend.applications.forms._nationality_form')
        </div>
    </div>
    <div data-row-span="4">
        <div data-field-span="4" data-field-error="Please enter a valid email address">
            {{Form::label('email','EMAIL')}}
            {{Form::email('email', \Auth::user()->email,['disabled'])}}
        </div>
    </div>
</fieldset>
<br>
<fieldset>
    <legend>B. ENLISTMENT SECTION</legend>
    <div data-row-span="1">
        <div data-field-span="1">
            <label>REQUESTED ASSIGNMENT</label>
            {{Form::label('mos','REQUESTED ASSIGNMENT')}}
            {{Form::hidden('mos_id',null)}}
            {{Form::text('mos',null,['disabled'])}}
        </div>
    </div>
    <BR>
    <fieldset>
        <legend>PREVIOUS EXPERIENCE</legend>
        <div data-row-span="2">
            <div data-field-span="1">
                <label>HAVE YOU BEEN IN A MILSIM UNIT BEFORE</label>
                <label>{{Form::radio('milsim_experience',1,old('milsim_experience',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('milsim_experience',0,old('milsim_experience',['required']))}} NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                <label>HAVE YOU BEEN DISHONORABLY DISCHARGED/REMOVED FROM A UNIT</label>
                <label>{{Form::radio('milsim_badconduct',1,old('milsim_badconduct',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('milsim_badconduct',0,old('milsim_badconduct',['required']))}}  NO</label> &nbsp;
            </div>
        </div>
    </fieldset>
    <div data-row-span="1">
        <div data-field-span="1">
            {{Form::label('milsim_grouplist','WHAT GROUPS HAVE YOU BEEN A PART OF:')}}
            {{Form::text('milsim_grouplist',old('milsim_grouplist'),['placeholder'=>'LEAVE THE REST OF THIS SECTION BLANK, IF NOT APPLICABLE'])}}
        </div>
    </div>
    <div data-row-span="2">
        <div data-field-span="1">
            {{Form::label('milsim_grouplist','HIGHEST RANK ATTAINED:')}}
            {{Form::text('milsim_highestrank',old('milsim_highestrank'))}}
        </div>
        <div data-field-span="1">
            {{Form::label('milsim_previoustraining','RELEVANT TRAINING:')}}
            {{Form::text('milsim_previoustraining',old('milsim_previoustraining'))}}
        </div>
    </div>
    <div data-row-span="1">
        <div data-field-span="1">
            {{Form::label('milsim_depature','REASON FOR DEPARTURE FROM PREVIOUS UNIT:')}}
            {{Form::text('milsim_depature',old('milsim_depature'))}}
        </div>
    </div>
    <br>
    <fieldset>
        <legend>AGREEMENTS</legend>
        <div data-row-span="2">
            <div data-field-span="1">
                <label></label>
                {{Form::label('agreement_milsim','I UNDERSTAND THAT I AM JOINING A MILITARY SIMULATION UNIT:')}}
                <label>{{Form::radio('agreement_milsim',1,old('agreement_milsim',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_milsim',0,old('agreement_milsim',['required']))}}  NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                {{Form::label('agreement_guidelines','I UNDERSTAND THAT BY SUBMITTING THIS FORM, IT WILL IN EFFECT CHANGE MY STATUS AS A CIVILIAN TO A MEMBER OF THE 1ST RRF AND WILL BE HELD TO UNIT GUIDELINES:')}}
                <label>{{Form::radio('agreement_guidelines',1,old('agreement_guidelines',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_guidelines',0,old('agreement_guidelines',['required']))}}  NO</label> &nbsp;
            </div>
        </div>
        <div data-row-span="2">
            <div data-field-span="1">
                {{Form::label('agreement_orders','I UNDERSTAND THAT I AM EXPECTED TO FOLLOW ORDERS GIVEN TO ME:')}}
                <label>{{Form::radio('agreement_orders',1,old('agreement_orders',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_orders',0,old('agreement_orders',['required']))}}  NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                {{Form::label('agreement_ranks','I UNDERSTAND THAT I AM EXPECTED TO RESPECT RANKS, CUSTOMS AND COURTESIES:')}}
                <label>{{Form::radio('agreement_ranks',1,old('agreement_ranks',['required']))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_ranks',0,old('agreement_ranks',['required']))}}  NO</label> &nbsp;
            </div>
        </div>
    </fieldset>
    <br>
    <legend>C. FINAL SECTION</legend>
    <div data-row-span="3">
        <div data-field-span="2">
            {{Form::label('signature','SIGNATURE:')}}
            {{Form::text('signature',old('signature'),['required'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('signature_date','DATE:')}}
            {{Form::text('signature_date',\Carbon\Carbon::now()->toDateTimeString(),['readonly'])}}
        </div>
    </div>
    <br>
    <div class="pull-right">
        <input class="btn btn-primary" type="submit">
    </div>
</fieldset>