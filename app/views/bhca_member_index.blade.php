@extends('_master') 

@section('title') 
    BHCA Members 
@stop 

@section('head') 
@stop 

@section('content')

    

    <div id="board_wrapper">
        <h1 class="white_text">BHCA Members</h1>
        <br>
        <div class="webmaster_cruds">
            <nav>
                <ul>
                    <li class="webmaster_crud  to_vertical_align"><a href='/bhca_member/delete'>Delete</a></li>
                </ul>
                <ul>
                    <li class="webmaster_crud  to_vertical_align"><a href='/bhca_member/update'>Update</a></li>
                </ul>
                <ul>
                    <li class="webmaster_crud to_vertical_align"><a href='/bhca_member/create'>Create</a></li>
                </ul>
                
            </nav>
            <h2 class='webmaster_small_white_text float_right  to_vertical_align'>Webmaster: </h2>
        </div>
        
        <!--<div>
             Just for spacing purposes 
            <p> </p>
        </div>-->
        
        <!--<nav>
            <ul>
                @if(Auth::check())
                    <li><a href='/logout'>Webmaster Log out {{ Auth::user()->email; }}</a></li>
                @else
                    <li><a href='/signup'>Webmaster Sign up</a><span class="small_white_text"> or </span><a href='/login'>Webmaster Log in</a></li>
                @endif
            </ul>
	   </nav>-->
        <!--
        $bhca_member->first_name   = 'Amy';
        $bhca_member->middle_name  = 'Ann';
        $bhca_member->last_name    = 'Adams';
        $bhca_member->first_email  = 'AAA@gmail.com';
        $bhca_member->second_email = 'AAA@verizon.net';
        $bhca_member->address      = 'AAA Alberta Ave.\nAlberta, AL 00000';
        $bhca_member->initial_date_of_membership     = '2014-12-15';
        $bhca_member->date_of_last_processed_payment = '2014-12-15';
        $bhca_member->save();-->
        
        <!--<div class="clear_right">
            <table class="members_table">   
                 @foreach($bhca_members as $bhca_member)
                    <tr>
                        <div class="member_entry sepia">
                            <div class="member_right sepia">
                                <p>Name: {{ $bhca_member->first_name }} {{ $bhca_member->middle_name }} {{ $bhca_member->last_name }}</p>
                                <p>First email: {{ $bhca_member->first_email }} </p>
                                <p>Second email: {{ $bhca_member->second_email }} </p>
                                <p>Address: {{ $bhca_member->address }}</p>
                                <p>Initial date of membership: {{ $bhca_member->initial_date_of_membership }}</p>
                                <p>Date of last processed payment: {{ $bhca_member->date_of_last_processed_payment }}</p>
                            </div>
                        </div> 
                    </tr>
                @endforeach
                
            </table> 
            
        </div>
    </div>-->

@stop

@section('footer')        
@stop 
