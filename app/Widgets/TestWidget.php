<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 04.05.2019
 * Time: 18:46
 */

namespace App\Widgets;

use Peroln\Widgets\Contract\ContractWidget;

class TestWidget implements ContractWidget
{
    public function execute()
    {
        return view('Widgets::test');
    }
}