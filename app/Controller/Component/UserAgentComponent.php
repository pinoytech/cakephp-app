<?php
App::uses('Component', 'Controller');

class UserAgentComponent extends Component {

    public $agent      = NULL;

    public $is_browser = FALSE;
    public $is_robot   = FALSE;
    public $is_mobile  = FALSE;
    public $platform   = '';

    public $mobile     = '';

    public $browser    = '';
    public $browsers   = array(
        'Flock'             => 'Flock',
        'Chrome'            => 'Chrome',
        'Opera'             => 'Opera',
        'MSIE'              => 'Internet Explorer',
        'Internet Explorer' => 'Internet Explorer',
        'Shiira'            => 'Shiira',
        'Firefox'           => 'Firefox',
        'Chimera'           => 'Chimera',
        'Phoenix'           => 'Phoenix',
        'Firebird'          => 'Firebird',
        'Camino'            => 'Camino',
        'Netscape'          => 'Netscape',
        'OmniWeb'           => 'OmniWeb',
        'Safari'            => 'Safari',
        'Mozilla'           => 'Mozilla',
        'Konqueror'         => 'Konqueror',
        'icab'              => 'iCab',
        'Lynx'              => 'Lynx',
        'Links'             => 'Links',
        'hotjava'           => 'HotJava',
        'amaya'             => 'Amaya',
        'IBrowse'           => 'IBrowse'
    );

    public $platforms = array (
        'windows nt 6.0'    => 'Windows Longhorn',
        'windows nt 5.2'    => 'Windows 2003',
        'windows nt 5.0'    => 'Windows 2000',
        'windows nt 5.1'    => 'Windows XP',
        'windows nt 4.0'    => 'Windows NT 4.0',
        'winnt4.0'          => 'Windows NT 4.0',
        'winnt 4.0'         => 'Windows NT',
        'winnt'             => 'Windows NT',
        'windows 98'        => 'Windows 98',
        'win98'             => 'Windows 98',
        'windows 95'        => 'Windows 95',
        'win95'             => 'Windows 95',
        'windows'           => 'Unknown Windows OS',
        'os x'              => 'Mac OS X',
        'ppc mac'           => 'Power PC Mac',
        'freebsd'           => 'FreeBSD',
        'ppc'               => 'Macintosh',
        'linux'             => 'Linux',
        'debian'            => 'Debian',
        'sunos'             => 'Sun Solaris',
        'beos'              => 'BeOS',
        'apachebench'       => 'ApacheBench',
        'aix'               => 'AIX',
        'irix'              => 'Irix',
        'osf'               => 'DEC OSF',
        'hp-ux'             => 'HP-UX',
        'netbsd'            => 'NetBSD',
        'bsdi'              => 'BSDi',
        'openbsd'           => 'OpenBSD',
        'gnu'               => 'GNU/Linux',
        'unix'              => 'Unknown Unix OS'
    );

    public $mobiles = array(
        // legacy array, old values commented out
           'mobileexplorer' => 'Mobile Explorer',
        // 'openwave'       => 'Open Wave',
        // 'opera mini'     => 'Opera Mini',
        // 'operamini'      => 'Opera Mini',
        // 'elaine'         => 'Palm',
           'palmsource'     => 'Palm',
        // 'digital paths'  => 'Palm',
        // 'avantgo'        => 'Avantgo',
        // 'xiino'          => 'Xiino',
           'palmscape'      => 'Palmscape',
        // 'nokia'          => 'Nokia',
        // 'ericsson'       => 'Ericsson',
        // 'blackberry'     => 'BlackBerry',
        // 'motorola'       => 'Motorola'

        // Phones and Manufacturers
        'motorola'          => "Motorola",
        'nokia'             => "Nokia",
        'palm'              => "Palm",
        'iphone'            => "Apple iPhone",
        'ipad'              => "iPad",
        'ipod'              => "Apple iPod Touch",
        'sony'              => "Sony Ericsson",
        'ericsson'          => "Sony Ericsson",
        'blackberry'        => "BlackBerry",
        'cocoon'            => "O2 Cocoon",
        'blazer'            => "Treo",
        'lg'                => "LG",
        'amoi'              => "Amoi",
        'xda'               => "XDA",
        'mda'               => "MDA",
        'vario'             => "Vario",
        'htc'               => "HTC",
        'samsung'           => "Samsung",
        'sharp'             => "Sharp",
        'sie-'              => "Siemens",
        'alcatel'           => "Alcatel",
        'benq'              => "BenQ",
        'ipaq'              => "HP iPaq",
        'mot-'              => "Motorola",
        'playstation portable'  => "PlayStation Portable",
        'hiptop'            => "Danger Hiptop",
        'nec-'              => "NEC",
        'panasonic'         => "Panasonic",
        'philips'           => "Philips",
        'sagem'             => "Sagem",
        'sanyo'             => "Sanyo",
        'spv'               => "SPV",
        'zte'               => "ZTE",
        'sendo'             => "Sendo",

        // Operating Systems
        'symbian'           => "Symbian",
        'SymbianOS'         => "SymbianOS",
        'elaine'            => "Palm",
        'palm'              => "Palm",
        'series60'          => "Symbian S60",
        'windows ce'        => "Windows CE",

        // Browsers
        'obigo'             => "Obigo",
        'netfront'          => "Netfront Browser",
        'openwave'          => "Openwave Browser",
        'mobilexplorer'     => "Mobile Explorer",
        'operamini'         => "Opera Mini",
        'opera mini'        => "Opera Mini",

        // Other
        'digital paths'     => "Digital Paths",
        'avantgo'           => "AvantGo",
        'xiino'             => "Xiino",
        'novarra'           => "Novarra Transcoder",
        'vodafone'          => "Vodafone",
        'docomo'            => "NTT DoCoMo",
        'o2'                => "O2",

        // Fallback
        'mobile'            => "Generic Mobile",
        'wireless'          => "Generic Mobile",
        'j2me'              => "Generic Mobile",
        'midp'              => "Generic Mobile",
        'cldc'              => "Generic Mobile",
        'up.link'           => "Generic Mobile",
        'up.browser'        => "Generic Mobile",
        'smartphone'        => "Generic Mobile",
        'cellphone'         => "Generic Mobile"
    );

    public $robots = array(
        'googlebot'         => 'Googlebot',
        'msnbot'            => 'MSNBot',
        'slurp'             => 'Inktomi Slurp',
        'yahoo'             => 'Yahoo',
        'askjeeves'         => 'AskJeeves',
        'fastcrawler'       => 'FastCrawler',
        'infoseek'          => 'InfoSeek Robot 1.0',
        'lycos'             => 'Lycos'
    );

    public function __construct() {
        $this->agent = env('HTTP_USER_AGENT');
        $this->_compile_data();
    }

    private function _compile_data()
    {
        $this->_set_platform();

        foreach (array('_set_robot', '_set_browser', '_set_mobile') as $function)
        {
            if ($this->$function() === TRUE)
            {
                break;
            }
        }
    }

    private function _set_platform()
    {
        if (is_array($this->platforms) AND count($this->platforms) > 0)
        {
            foreach ($this->platforms as $key => $val)
            {
                if (preg_match("|".preg_quote($key)."|i", $this->agent))
                {
                    $this->platform = $val;
                    return TRUE;
                }
            }
        }
        $this->platform = 'Unknown Platform';
    }

    private function _set_browser()
    {
        if (is_array($this->browsers) AND count($this->browsers) > 0)
        {
            foreach ($this->browsers as $key => $val)
            {
                if (preg_match("|".preg_quote($key).".*?([0-9\.]+)|i", $this->agent, $match))
                {
                    $this->is_browser = TRUE;
                    $this->version = $match[1];
                    $this->browser = $val;
                    $this->_set_mobile();
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    private function _set_mobile()
    {
        if (is_array($this->mobiles) AND count($this->mobiles) > 0)
        {
            foreach ($this->mobiles as $key => $val)
            {
                if (FALSE !== (strpos(strtolower($this->agent), $key)))
                {
                    $this->is_mobile = TRUE;
                    $this->mobile = $val;
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    private function _set_robot()
    {
        if (is_array($this->robots) AND count($this->robots) > 0)
        {
            foreach ($this->robots as $key => $val)
            {
                if (preg_match("|".preg_quote($key)."|i", $this->agent))
                {
                    $this->is_robot = TRUE;
                    $this->robot = $val;
                    return TRUE;
                }
            }
        }
        return FALSE;
    }
}