<?php
App::uses('Component', 'Controller');

class StringComponent extends Component {

    function random($type = 'alpha', $len = 15) {
        switch ($type)
        {
            case 'alpha'   : $pool = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'alnum'   : $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                break;
            case 'numeric' : $pool = '0123456789';
                break;
            case 'nozero'  : $pool = '123456789';
                break;
        }

        $str = '';
        for ($i=0; $i < $len; $i++) {
            $str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
        }
        return $str;
    }

}