<?php
    class Template{
        //path To Template
        protected $template;

        //vars Passed In
        protected $vars = array();

        public function __construct($template){
            $this->template = $template;
        }//end public function __construct()

        public function __get($key){
            return $this->vars[$key];
        }//end public function __get($key)

        public function __set($key, $value){
            $this->vars[$key] = $value;
        }//end public function __set()

        public function __toString(){
            
            extract($this->vars);
            chdir(dirname($this->template));
            ob_start();

            include basename($this->template);

            return ob_get_clean();

        }//end public function __toString()

    }//end class Template

?>