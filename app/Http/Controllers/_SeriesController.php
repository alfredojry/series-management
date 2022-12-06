<?php
namespace App\Http\Controllers;

class SeriesController
{
    public function list_series()
    {
        $series = [
            'Loki',
            'Jessica Jones',
            'Daredevil',
        ];

        ob_start();
        ?>
        <ul>
        <?php
        foreach ( $series as $serie ):
        ?>
            <li><?= $serie ?></li>
        <?php
        endforeach;
        ?>
        </ul>
        <?php
        $html = ob_get_clean();
        return $html;
    }
}
