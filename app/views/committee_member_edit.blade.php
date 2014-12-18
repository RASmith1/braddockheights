@extends('_master')

@section('title')
	Create a new Committee Member
@stop


@section('content')

	

    {{ Form::open(array('action' => 'CommitteeMemberController@update')) }}

        <h1>Update an existing committee member</h1>

        @foreach($errors->all() as $message) 
            <div class='error'>{{ $message }}</div>
        @endforeach

        <!--<div class="webmaster_cruds">
        <nav>
            <ul>
                <li class="webmaster_crud  to_vertical_align"><a href='/bhca_member/create'>Create as BHCA Member first</a></li>
            </ul>
        </nav>
        <h2 class='webmaster_small_white_text float_right  to_vertical_align'>Webmaster: </h2>
        </div>-->

		<div class="big_white_text clear_right">
            
            {{ Form::label('bhca_member_id', 'BHCA Member') }}
		    {{ Form::text('bhca_member_id', $id) }}
            <br>
            
            <!--{{ Form::label('picture','picture: ') }}
			{{ Form::text('picture') }}
-->
            
			{{ Form::label('first_name','First Name: ') }}
			{{ Form::text('first_name') }}
                        
            {{ Form::label('middle_name','Middle Name: ') }}
			{{ Form::text('middle_name') }}
            
            {{ Form::label('last_name','Last Name: ') }}
			{{ Form::text('last_name') }}
            <br>
            
            
            {{ Form::label('email','email: ') }}
			{{ Form::text('email') }}
            
            {{ Form::label('committee_position','committee position: ') }}
			{{ Form::select('committee_position', array(
              'Please select' => 'Please select',
                  'President' => 'President', 
             'Vice President' => 'Vice President',
             'Vice President' => 'Vice President',
                  'Treasurer' => 'Treasurer',
               'Board Member' => 'Board Member'
                       ), 'Please select') }}
            <br>
            
            
            {{ Form::label('bio','bio: ') }}
			{{ Form::text('bio') }}
            <br>
            
            
            {{ Form::label('bhca_board_member','BHCA board member? ') }}
            {{ Form::select('bhca_board_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'True') }}
            
            {{ Form::label('bhca_pool_committee_member','BHCA Pool Committee member? ') }}
            {{ Form::select('bhca_pool_committee_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'False') }}
            <br>
                
            
            {{ Form::label('finance_committee_member','Finance Committee member? ') }}
            {{ Form::select('finance_committee_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'False') }}
            
            {{ Form::label('programs_committee_member','Programs Committee member? ') }}
            {{ Form::select('programs_committee_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'False') }}
            <br>
            
            
            {{ Form::label('property_committee_member','Property Committee member? ') }}
            {{ Form::select('property_committee_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'False') }}
            
            {{ Form::label('membership_committee_member','Membership Committee member? ') }}
            {{ Form::select('membership_committee_member', array( 
                            'True'  => 'True', 
                            'False' => 'False'
                         ), 'False') }}
            <br><br>
            
		</div>

		{{ Form::submit('Edit Committee Member') }}
	{{ Form::close() }}

@stop