<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    //
    public function index( Request $request )
    {
        //return response( content: '', status: 302, headers: [ 'Location' => 'https://github.com' ] );
        /*$series = [
            'Loki',
            'Jessica Jones',
            'Daredevil',
        ];*/

        //$series = DB::select( query: 'SELECT name FROM series;' );

        // $series = Serie::all();

        $series = Serie::query()->orderBy( column: 'name' )->get();

        // dd( $series );

        return view( view: 'series.index' )->with( 'series', $series );
        //return view( 'list-series', data: compact( var_name: 'series' ) );
        //return view( view: 'list-series', data: [ 'series' => $series ] );

        /*ob_start();
        ?>
        <ul>
        <?php foreach ( $series as $serie ): ?>
            <li><?= $serie ?></li>
        <?php endforeach; ?>
        </ul>
        <?php
        $html = ob_get_clean();
        return $html;*/
    }

    public function create()
    {
        return view( view: 'series.create' );
    }

    public function save( Request $request )
    {
        $serie_name = $request->input('name');

        $serie = new Serie();
        $serie->name = $serie_name;
        $serie->save();

        return redirect( to: '/series' );

        /* if( DB::insert(
            query: 'INSERT INTO series (name) VALUES (?)',
            bindings: [ $serie_name ]
        ) )
        {
            return redirect( to: '/series' );
        } else
        {
            return 'ERROR';
        } */
    }
}
