@extends('_master')

@section('title')
	Create a new Committee Member
@stop


@section('content')

	

    {{ Form::open(array('action' => 'CommitteeMemberController@store')) }}

        <h1>Create a new committee member</h1>

        @foreach($errors->all() as $message) 
            <div class='error'>{{ $message }}</div>
        @endforeach

        <div class="webmaster_cruds">
        <nav>
            <ul>
                <li class="webmaster_crud  to_vertical_align"><a href='#'>Create as BHCA Member first</a></li>
            </ul>
        </nav>
        <h2 class='webmaster_small_white_text float_right  to_vertical_align'>Webmaster: </h2>
        </div>

		<div class="big_white_text clear_right">
            <h2 class="crud_warning_message">NOTE: A person must be in the bhca_members table before being added to the committee_members table 
               via this form.  If the person's name is not in the BHCA Member select list below, please add them to the bhca_members table first by clicking
                the button above.</h2>
            
            {{ Form::label('bhca_member_id', 'BHCA Member') }}
		    {{ Form::select('bhca_member_id', $bhca_members) }}
            <br> 
            
            
            {{ Form::label('picture','Picture: ') }}
			{{ Form::file('picture') }}  
            <br> 
            
            
			{{ Form::label('first_name','First Name: ') }}
			{{ Form::text('first_name') }}
             
            
                  
            {{ Form::label('middle_name','Middle Name: ') }}
			{{ Form::text('middle_name') }}
             
            
             
            {{ Form::label('last_name','Last Name: ') }}
			{{ Form::text('last_name') }}
            <br> 
            
             
            {{ Form::label('email','Email: ') }}
			{{ Form::email('email') }}
             
            
             
            {{ Form::label('committee_position','Committee position: ') }}
			{{ Form::select('committee_position', array(
              'Please select' => 'Please select',
                  'President' => 'President', 
             'Vice President' => 'Vice President',
             'Vice President' => 'Vice President',
                  'Treasurer' => 'Treasurer',
               'Board Member' => 'Board Member'
                       ), 'Please select') }}
             <br>
            
             
            {{ Form::label('bhca_board_member','BHCA board member? ') }}
            {{ Form::select('bhca_board_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '1') }}
                 
            
             
            {{ Form::label('bhca_pool_committee_member','BHCA Pool Committee member? ') }}
            {{ Form::select('bhca_pool_committee_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '0') }}
             <br> 
                
             
            {{ Form::label('finance_committee_member','Finance Committee member? ') }}
            {{ Form::select('finance_committee_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '0') }}
             
            
             
            {{ Form::label('programs_committee_member','Programs Committee member? ') }}
            {{ Form::select('programs_committee_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '0') }}
             <br>
            
             
            {{ Form::label('property_committee_member','Property Committee member? ') }}
            {{ Form::select('property_committee_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '0') }}
             
            
             
            {{ Form::label('membership_committee_member','Membership Committee member? ') }}
            {{ Form::select('membership_committee_member', array( 
                            '0' => 'False',
                            '1' => 'True' 
                         ), '0') }}
            <br>
            {{ Form::label('bio','Bio: ') }}
            <br>
			{{ Form::textarea('bio', 'Enter biography here...') }}
             
            <br><br>
            
		</div>

		{{ Form::submit('Add Committee Member') }}
        <br><br>
	{{ Form::close() }}

@stop