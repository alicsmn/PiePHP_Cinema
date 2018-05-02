<?php
namespace Core;

class Request
{

	public function __construct()
	{
		$clean = [];
		foreach ($_REQUEST as $key => $value) {
			
			$this->{$key} = trim(stripslashes(htmlspecialchars($value)));
			$clean[$key] = $this->{$key};
		}
		$this->request = $clean;
	}
	public function getQueryParams()
	{
        if (is_array($this->request)) {
            return $this->request;
        }
    }
}
?>