<fieldset>
    <legend>A. ENLISTEE/REENLISTEE IDENTIFICATION DATA</legend>
    <div data-row-span="4">
        <div data-field-span="1">
            {{Form::label('first_name','FIRST NAME')}}
            {{Form::text('first_name',old('first_name'),['required','disabled'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('last_name','LAST NAME')}}
            {{Form::text('last_name',old('last_name'),['required','disabled'])}}
        </div>
        <div data-field-span="2">
            {{Form::label('steam_id','MILITARY IDENTIFICATION NUMBER')}}
            {{Form::text('steam_id',\Auth::user()->steam->steam_id,['disabled'])}}
        </div>
    </div>
    <div data-row-span="3">
        <div data-field-span="1">
            {{Form::label('dob','DATE OF BIRTH')}}
            {{Form::text('dob',old('dob'),['id'=>'dob','placeholder'=>"02/01/2016",'required','disabled'])}}
        </div>
        <div data-field-span="2">
            {{Form::label('nationality','NATIONALITY')}}
            {{Form::text('nationality',old('nationality'),['disabled'])}}
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
                <label>{{Form::radio('milsim_experience',1,old('milsim_experience'))}} YES</label> &nbsp;
                <label>{{Form::radio('milsim_experience',0,old('milsim_experience'))}} NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                <label>HAVE YOU BEEN DISHONORABLY DISCHARGED/REMOVED FROM A UNIT</label>
                <label>{{Form::radio('milsim_badconduct',1,old('milsim_badconduct'))}} YES</label> &nbsp;
                <label>{{Form::radio('milsim_badconduct',0,old('milsim_badconduct'))}}  NO</label> &nbsp;
            </div>
        </div>
    </fieldset>
    <div data-row-span="1">
        <div data-field-span="1">
            {{Form::label('milsim_grouplist','WHAT GROUPS HAVE YOU BEEN A PART OF:')}}
            {{Form::text('milsim_grouplist',$application->milsim_grouplist,['placeholder'=>'LEAVE THE REST OF THIS SECTION BLANK, IF NOT APPLICABLE','readonly'])}}
        </div>
    </div>
    <div data-row-span="2">
        <div data-field-span="1">
            {{Form::label('milsim_grouplist','HIGHEST RANK ATTAINED:')}}
            {{Form::text('milsim_highestrank',$application->milsim_highestrank,['readonly'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('milsim_previoustraining','RELEVANT TRAINING:')}}
            {{Form::text('milsim_previoustraining',$application->milsim_previoustraining,['readonly'])}}
        </div>
    </div>
    <div data-row-span="1">
        <div data-field-span="1">
            {{Form::label('milsim_depature','REASON FOR DEPARTURE FROM PREVIOUS UNIT:')}}
            {{Form::text('milsim_depature',$application->milsim_depature,['readonly'])}}
        </div>
    </div>
    <br>
    <fieldset>
        <legend>AGREEMENTS</legend>
        <div data-row-span="2">
            <div data-field-span="1">
                <label></label>
                {{Form::label('agreement_milsim','I UNDERSTAND THAT I AM JOINING A MILITARY SIMULATION UNIT:')}}
                <label>{{Form::radio('agreement_milsim',1,old('agreement_milsim'))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_milsim',0,old('agreement_milsim'))}}  NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                {{Form::label('agreement_guidelines','I UNDERSTAND THAT BY SUBMITTING THIS FORM, IT WILL IN EFFECT CHANGE MY STATUS AS A CIVILIAN TO A MEMBER OF THE 1ST RRF AND WILL BE HELD TO UNIT GUIDELINES:')}}
                <label>{{Form::radio('agreement_guidelines',1,old('agreement_guidelines'))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_guidelines',0,old('agreement_guidelines'))}}  NO</label> &nbsp;
            </div>
        </div>
        <div data-row-span="2">
            <div data-field-span="1">
                {{Form::label('agreement_orders','I UNDERSTAND THAT I AM EXPECTED TO FOLLOW ORDERS GIVEN TO ME:')}}
                <label>{{Form::radio('agreement_orders',1,old('agreement_orders'))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_orders',0,old('agreement_orders'))}}  NO</label> &nbsp;
            </div>
            <div data-field-span="1">
                {{Form::label('agreement_ranks','I UNDERSTAND THAT I AM EXPECTED TO RESPECT RANKS, CUSTOMS AND COURTESIES:')}}
                <label>{{Form::radio('agreement_ranks',1,old('agreement_ranks'))}} YES</label> &nbsp;
                <label>{{Form::radio('agreement_ranks',0,old('agreement_ranks'))}}  NO</label> &nbsp;
            </div>
        </div>
    </fieldset>
    <br>
    <legend>C. FINAL SECTION</legend>
    <div data-row-span="3">
        <div data-field-span="2">
            {{Form::label('signature','SIGNATURE:')}}
            {{Form::text('signature',old('signature'),['disabled'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('signature_date','DATE:')}}
            {{Form::text('signature_date',\Carbon\Carbon::now()->toDateTimeString(),['disabled'])}}
        </div>
    </div>
    <br>
    <legend>D. APPROVAL AND ACCEPTANCE BY SERVICE REPRESENTATIVE</legend>
    <p>Section to be filled out by Command Element Office.<p>
    <div data-row-span="3">
        <div data-field-span="2">
            {{Form::label('processed_name','NAME:')}}
            {{Form::text('processed_name',old('processed_name'),['disabled'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('signature_date','Pay Grade:')}}
            {{Form::text('signature_date',old('signature_date'),['disabled'])}}
        </div>
    </div>
    <div data-row-span="2">
        <div data-field-span="1">
            {{Form::label('processed_unitname','Unit Name:')}}
            {{Form::text('processed_unitname',old('processed_unitname'),['disabled'])}}
        </div>
        <div data-field-span="1">
            {{Form::label('processed_signature','Signature:')}}
            {{Form::text('processed_signature',old('processed_signature'),['disabled'])}}
        </div>
    </div>
    @if((($application->status == 'Accepted') || ($application->status == 'Declined')))
        <br>
        <legend>E. ENLISTMENT DECISION BY COMMAND</legend>
        <p>Section to be filled out by member of the Officer Corp with authority to accept or reject applications.<p>
        <div data-row-span="3">
            <div data-field-span="2">
                {{Form::label('decision_name','Name:')}}
                {{Form::text('decision_name',old('decision_name'),['disabled'])}}
            </div>
            <div data-field-span="1">
                {{Form::label('decision_paygrade','Pay Grade:')}}
                {{Form::text('decision_paygrade',old('decision_paygrade'),['disabled'])}}
            </div>
        </div>
        <div data-row-span="2">
            <div data-field-span="1">
                {{Form::label('processed_unitname','Unit Name:')}}
                {{Form::text('processed_unitname',old('processed_unitname'),['disabled'])}}
            </div>
            <div data-field-span="1">
                {{Form::label('processed_signature','Unit Name:')}}
                {{Form::text('processed_signature',old('processed_signature'),['disabled'])}}
            </div>
        </div>
    @endif
    <div data-row-span="2">
        <div data-field-span="1">
            <label>STATUS</label>
            @if(($application->status == 'Under Review'))
                <img height="200" width="200" style="transform: rotate(3deg);display: block;margin-left: auto;margin-right: auto;" src="/images/under_review.jpg">
            @endif
            @if(($application->status == 'Accepted'))
                <img height="200" width="200" style="transform: rotate(45deg);display: block;margin-left: auto;margin-right: auto;" src="/images/approved.gif">
            @endif
            @if(($application->status == 'Declined'))
                <img height="150" width="400" style="transform: rotate(7deg);display: block;margin-left: auto;margin-right: auto;" src="/images/rejected.png">
            @endif
        </div>
        <div data-field-span="1">
            {{Form::label('processed_statement','Statement:')}}
            {{Form::textarea('processed_statement',old('processed_statement'),['disabled'])}}
        </div>
    </div>
</fieldset>