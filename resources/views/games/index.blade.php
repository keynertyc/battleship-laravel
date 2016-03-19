@extends('layouts.default')

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Battleship
            <small>Play!</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Div Row -->
<div class="row">

    <div class="col-md-6">
        <h1>Player: {{ Session::get('user')['username'] }}</h1>
        <br><br>

        <div class="col-md-12">
            @for($i=0; $i<10; $i++)
                <div class="row">
                    @for($j=0; $j<10; $j++)
                        <?php
                        $found = false;
                        foreach($board as $data) {
                            if ($data['x'] == $i && $data['y'] == $j) {
                                $found = true; break;
                            }
                        } ?>
                        @if ($found)
                            <div class="col-md-1 div-board" style="background-color: yellow;" id="x{{$i}}y{{$j}}"></div>
                        @else
                            <div class="col-md-1 div-board" id="x{{$i}}y{{$j}}"></div>
                        @endif

                    @endfor
                </div>
            @endfor
        </div>

    </div>

    <div class="col-md-6">
        <h1>Enemy: @if (Session::get('user')['username'] == 'user1') {{ 'user2' }} @else {{ 'user1' }} @endif</h1>
        <br><br>

        <div class="col-md-12">
            @for($i=0; $i<10; $i++)
                <div class="row">
                    @for($j=0; $j<10; $j++)
                        <div class="col-md-1 div-board-enemy" id="x{{$i}}y{{$j}}"></div>
                    @endfor
                </div>
            @endfor
        </div>

    </div>

</div>
<!-- /.row -->

@endsection