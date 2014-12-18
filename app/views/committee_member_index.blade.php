@extends('_master') 

@section('title') 
    BHCA Board Members 
@stop 

@section('head') 
@stop 

@section('content')

    

    <div id="board_wrapper">
        <h1 class="white_text">Braddock Heights Community Association Board Members</h1>
        <br>
        <div class="webmaster_cruds">
            <nav>
                <!--<ul>
                    <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                        <a href='/committee_member/delete'>Delete</a></li>
                </ul>
                <ul>
                    <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                        <a href='/committee_member/update'>Update</a></li>
                </ul>-->
                <ul>
                    <li class="webmaster_crud  to_vertical_align"><a href='/committee_member/index'> Read </a></li>
                </ul>
                <ul>
                    <!--<li class="webmaster_crud to_vertical_align"><a href='/committee_member/create'>Create</a></li>-->
                    <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                        <a href='/committee_member/create'>Create</a></li>
                </ul>
            </nav>
            <h2 class='webmaster_small_white_text float_right  to_vertical_align'>Webmaster: </h2>
            
        </div>
        
        <!--<nav>
            <ul>
                @if(Auth::check())
                    <li><a href='/logout'>Webmaster Log out {{ Auth::user()->email; }}</a></li>
                @else
                    <li><a href='/signup'>Webmaster Sign up</a><span class="small_white_text"> or </span><a href='/login'>Webmaster Log in</a></li>
                @endif
            </ul>
	   </nav>-->
        
        <div class="clear_right">
            <table class="members_table">   
                 @foreach($committee_members as $committee_member)
                    <tr>
                        <div class="member_entry sepia">
                            <div class="member_left sepia">
                                <img class="member_pic" src='{{ $committee_member->picture}}' alt="Member's picture." width="100" height="140">
                            </div>
                            <div class="member_right sepia">
                                <p>{{ $committee_member->first_name }} {{ $committee_member->last_name }}</p>
                                    <div class="webmaster_cruds">
                                        <nav>
                                            <ul>
                                                <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                                                    <a href='/committee_member/destroy($committee_member->id)'>Delete</a></li>
                                            </ul>
                                            <ul>
                                                <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                                                    <a href='/committee_member/edit($committee_member->id)'>Update</a></li>
                                            </ul>
                                        </nav>
                                   <!-- <h2 class='webmaster_small_brown_text float_right  to_vertical_align'>Webmaster: </h2>-->
                                        
                                    </div>
                                <p class="float_right">{{ $committee_member->committee_position }}</p>
                                <p>{{ $committee_member->bio }}</p>
                            </div>
                        </div> 
                    </tr>
                @endforeach
                
            </table> 
            
        </div>
    </div>

@stop

@section('footer')        
@stop 
