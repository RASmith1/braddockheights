@extends('_master')

@section('title')
	Create a new Committee Member
@stop


@section('content')
    
    {{ Form::model($committee_member, ['method' => 'put', 'action' => ['CommitteeMemberController@update', $committee_member->id]]) }}
        <div class="med_edit_text middle_panel">
            <h2 class="small_edit_text">Update: {{ $committee_member->first_name }} {{ $committee_member->middle_name }} {{ $committee_member->last_name }}</h2>

            <div class='form-group'>
                {{ Form::label('Committee Member ID:  ') }} {{ Form::label($committee_member->id) }}
                
            </div>
                
            <div class='form-group'>
                {{ Form::label('BHCA Member ID:  ') }} {{ Form::label($committee_member->bhca_member->id) }}
            </div>

            <div class='form-group'>
                {{ Form::label('picture', 'Picture: ') }}
                {{ Form::file('picture', '') }}
            </div>

            <div class='form-group'>
                {{ Form::label('first_name','First Name: ') }}
                {{ Form::text('first_name') }}
            </div>

            <div class='form-group'>    
                {{ Form::label('middle_name','Middle Name: ') }}
                {{ Form::text('middle_name') }}
            </div>

            <div class='form-group'>
                {{ Form::label('last_name','Last Name: ') }}
                {{ Form::text('last_name') }}
            </div>

            <div class='form-group'>    
                {{ Form::label('email','Email: ') }}
                {{ Form::email('email') }}
            </div>
            
            <div class='form-group'>   
                {{ Form::label('Committee Position: ') }} {{ Form::label('Currently :') }} {{ Form::label($committee_member->committee_position) }}
                {{ Form::select('committee_position', array('Please select' => 'Please select',
                                                            'President' => 'President', 
                                                            'Vice President' => 'Vice President',
                                                            'Vice President' => 'Vice President',
                                                            'Treasurer' => 'Treasurer',
                                                            'Board Member' => 'Board Member'
                                                            ), 'Please select' ) }}
            </div>

            <div class='form-group'>    
                {{ Form::label('bhca_board_member','BHCA board member? ') }} {{ Form::label('Currently '. $committee_member->bhca_board_member.':') }} 
                {{ Form::select('bhca_board_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->bhca_board_member ) }}
            </div>

            <div class='form-group'>    
                {{ Form::label('bhca_pool_committee_member','BHCA Pool Committee member? ') }} {{ Form::label('Currently '. $committee_member->bhca_pool_committee_member.':') }} 
                {{ Form::select('bhca_pool_committee_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->bhca_pool_committee_member ) }}
            </div>

            <div class='form-group'>    
                {{ Form::label('finance_committee_member','Finance Committee member? ') }} {{ Form::label('Currently '. $committee_member->finance_committee_member.':') }} 
                {{ Form::select('finance_committee_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->finance_committee_member ) }}
            </div>

            <div class='form-group'>
                {{ Form::label('programs_committee_member','Programs Committee member? ') }} {{ Form::label('Currently '. $committee_member->programs_committee_member.':') }} 
                {{ Form::select('programs_committee_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->programs_committee_member ) }}
            </div>

            <div class='form-group'>    
                {{ Form::label('property_committee_member','Property Committee member? ') }} {{ Form::label('Currently '. $committee_member->property_committee_member.':') }} 
                {{ Form::select('property_committee_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->property_committee_member ) }}
            </div>

            <div class='form-group'>    
                {{ Form::label('membership_committee_member','Membership Committee member? ') }} {{ Form::label('Currently '. $committee_member->membership_committee_member.':') }} 
                {{ Form::select('membership_committee_member', array( 
                                '0' => 'False',
                                '1' => 'True' 
                             ), $committee_member->membership_committee_member ) }}
            </div>
            <div class='form-group'>      
                {{ Form::label('bio','Committee Member\'s Bio: ') }} 
                {{ Form::textarea('bio') }}
            </div>    
            <br>

            </div>

		{{ Form::submit('Update') }}
        <br><br>

	{{ Form::close() }}

@stop