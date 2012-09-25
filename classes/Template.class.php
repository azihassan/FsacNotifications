<?php

class Template
{
	private $_view_path;
	private $_template;

	private $_title = 'FSAC notifications';
	private $_body;

	public function __construct($view_path)
	{
		if(!is_readable($template = $view_path.'template.php'))
		{
			throw new Exception($template.' does not exist or is not readable.');
		}
		$this->_template = $template;
		$this->_view_path = $view_path;
	}

	public function set_title($title)
	{
		$this->_title = $title;
	}

	public function set_view($view, array $data = array())
	{
		$view = $this->_view_path.$view.'.php';

		if(!is_readable($view))
		{
			throw new Exception($view.' does not exist or is not readable.');
		}

		ob_start();

		extract($data);
		include $view;

		$this->_body = ob_get_clean();
	}

	public function render($display = TRUE)
	{
		$title = $this->_title;
		$body = $this->_body;

		if($display)
		{
			include $this->_template;
		}
		else
		{
			ob_start();
			include $this->_template;
			return ob_get_clean();
		}
	}
}
