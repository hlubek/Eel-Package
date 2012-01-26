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
		for ($i = 0; $i < count($arguments); $i++) {
			if ($arguments[$i] instanceof Context) {
				$arguments[$i] = $arguments[$i]->unwrap();
			}
		}
		if (is_object($this->value)) {
			$callback = array($this->value, $method);
		} elseif (is_array($this->value)) {
			if (!array_key_exists($method, $this->value)) {
				// TODO Return NULL or throw Exception?
				return NULL;
			}
			$callback = $this->value[$method];
		} else {
			// TODO Better general error handling (return NULL?)
			throw new \Exception('Needs object or array to call method');
		}
		if (!is_callable($callback)) {
			// TODO Better general error handling (return NULL?)
			throw new \Exception('Method "' . $method . '" does not exist');
		}
		return call_user_func_array($callback, $arguments);
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