<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;


class GamesController extends Controller
{
    public function index(Request $request, $id) {

        $ships = array(
            0=>array('name'=> 'Aircraft carrier', 'size'=>5, 'total'=>1),
            1=>array('name'=>'Battleship', 'size'=>4, 'total'=>1),
            2=>array('name'=>'Submarine', 'size'=>3, 'total'=>1),
            3=>array('name'=>'Destroyer', 'size'=>3, 'total'=>1),
            4=>array('name'=>'Patrol boat', 'size'=>2, 'total'=>1),
        );

        $directions = array(0=>'horizontal', 1=>'vertical');

        $board = array();
        $i = 0;
        foreach ($ships as $ship) {
            $direccion = $directions[rand(0,0)];
            switch ($direccion) {
                case 'vertical':

                    break;
                case 'horizontal':
                    $x = rand(0,9);
                    $verify = false;
                    while (!$verify) {
                        foreach($board as $data) {
                            if ($data['x'] == $x){
                                $x = rand(0,9);
                                break;
                            }
                        }
                        $verify = true;
                    }
                    $z = 0;
                    for($y = rand(0,10-$ship['size']); $y<10; $y++) {
                        if ($z < $ship['size']){
                            $board[$i]['x'] = $x;
                            $board[$i]['y'] = $y;
                            $i++;
                            $z++;
                        }
                    }
                    break;
                default:
                    break;
            }
        }

        if (Session::has('user')) {
            if (Session::get('user')['id'] != $id) {
                return redirect('/games/'.Session::get('user')['id']);
            }
            return view('games/index', ['board'=>$board]);
        }else {
            return redirect('login');
        }
    }
}
