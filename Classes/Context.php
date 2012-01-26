<?php
namespace Eel;

/**
 * Something like a variable container with
 * wrapping of return values for safe access without warnings.
 */
class Context {

	/**
	 * @var mixed
	 */
	protected $value;

	/**
	 * @param mixed $value
	 */
	public function __construct($value = NULL) {
		$this->value = $value;
	}

	public function get($path) {
		if ($path instanceof \Eel\Context) {
			$path = $path->unwrap();
		}
		if ($path === NULL) {
			return NULL;
		} else {
			if (is_array($this->value)) {
				return array_key_exists($path, $this->value) ? $this->value[$path] : NULL;
			} elseif (is_object($this->value)) {
				return \TYPO3\FLOW3\Reflection\ObjectAccess::getProperty($this->value, $path);
			}
		}
	}

	public function getAndWrap($path = NULL) {
		return $this->wrap($this->get($path));
	}

	/**
	 *
	 * @param string $method
	 * @param array $arguments
	 */
	public function call($method, $arguments = array()) {
		if (!method_exists($this->value, $method)) {
			// TODO Better general error handling
			throw new \Exception('Method "' . $method . '" does not exist');
		}
		return call_user_func_array(array($this->value, $method), $arguments);
	}

	public function callAndWrap($method, $arguments = array()) {
		return $this->wrap($this->call($method, $arguments));
	}

	/**
	 * @param mixed $value
	 * @return \Eel\Context
	 */
	public function wrap($value) {
		return new Context($value);
	}

	/**
	 * @return mixed
	 */
	public function unwrap() {
		return $this->value;
	}

}
?>