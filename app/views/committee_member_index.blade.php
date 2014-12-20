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
                <ul>
                    <li class="webmaster_crud  to_vertical_align"><a href='/committee_member'> Read </a></li>
                </ul>
                <ul>
                    <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                        <a href='/committee_member/create'>Create</a></li>
                </ul>
            </nav>
            <h2 class='webmaster_small_white_text float_right  to_vertical_align'>Webmaster: </h2>
        </div>
        
        <!-- Set this inside the loop so we know to delete the current committee member id, if requested, outside of this loop-->
        <?php $should_delete = 0; ?>
        
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
                                                <!--<li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                                                        <a href='#delete-{{ $committee_member->id }}'>Delete</a>
                                                </li>-->
                                                <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                                                    <!--This macro is found in the global.php file, and it was an answer to prayer -->
                                                    <!--I put it inside the href in order to try to style it similar to others-->
                                                    <a href=''>{{Form::delete('committee_member/'. $committee_member->id, 'Delete')}}
                                                    </a>
                                                   <!-- {{Form::delete('committee_member/'. $committee_member->id, 'Delete')}}-->
                                                </li>
                                            </ul>
                                            <ul>
                                                <li <?php print((Auth::check()) ? 'class="webmaster_crud_enabled"' : 'class="webmaster_crud_disabled"'); ?>>
                                                    <a href='/committee_member/{{ $committee_member->id }}/edit'>Update</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                <p class="clear_right">{{ $committee_member->committee_position }}</p>
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
