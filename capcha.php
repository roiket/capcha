namespace capchatoken;
class capcha {
    private $testvar = "default value";
    private $SECRET_KEY = "6Ld9C-QUAAAAAHrYP2YatcgRpKffC0Bj-tDFSZWF";
    private $SITE_KEY = "6Ld9C-QUAAAAAAYsLc2CYVXBahddigKkPlsZxv0S";
    private $action = "validate_captcha";
    private $url = "https://www.google.com/recaptcha/api/siteverify?secret=";

    public function setTestvar($testvar) {
        $this->testvar = $testvar;
    }
    public function setKey($SITE_KEY,$SECRET_KEY) {
        $this->SITE_KEY = $SITE_KEY;
        $this->SECRET_KEY = $SECRET_KEY;
    }
    public function script(){
        return '<script src="https://www.google.com/recaptcha/api.js?render='.$this->SITE_KEY.'"></script>';
    }
    public function data(){
        return array(['site_key'=>$this->SITE_KEY,'action'=>$this->action]);
    }
    public function data(){
        return array(['site_key'=>$this->SITE_KEY,'action'=>$this->action]);
    }
    public function reguest(){
        $response = file_get_contents(
         $this->url. $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );

    }



}
?>
