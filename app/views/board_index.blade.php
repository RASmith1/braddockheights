@extends('_master') 

@section('title') 
    BHCA Board 
@stop 

@section('head') 
@stop 

@section('content')

    <div id="board_wrapper">
        
       <!-- <?php $thisPage="BHCA_Board" ; include( "header_and_nav.blade.php"); ?>-->
        <?php $thisPage="BHCA_Board" ; include( "/../app/views/header_and_nav.blade.php"); ?>

        <div id="board_frame_wrapper">

            <iframe id="board_frame" src='/committee_member' width="960" height="615"></iframe>

        </div>
    </div>
@stop

@section('footer')        
    <?php include( '/../app/views/footer.blade.php'); ?>
@stop 
