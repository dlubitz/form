<?php
namespace TYPO3\Form\Core\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.Form".                 *
 *                                                                        *
 *                                                                        */

/**
 * A base form element interface, which can be the starting point for creating
 * custom (PHP-based) Form Elements.
 *
 * A *FormElement* is a part of a *Page*, which in turn is part of a FormDefinition.
 * See {@link FormDefinition} for an in-depth explanation.
 *
 * **Often, you should rather subclass {@link AbstractFormElement} instead of
 * implementing this interface.**
 */
interface FormElementInterface extends Renderable\RenderableInterface {

	/**
	 * Get the default value with which the Form Element should be initialized
	 * during display.
	 *
	 * @return mixed the default value for this Form Element
	 * @api
	 */
	public function getDefaultValue();

	/**
	 * Set the default value with which the Form Element should be initialized
	 * during display.
	 *
	 * @param mixed $defaultValue the default value for this Form Element
	 * @api
	 */
	public function setDefaultValue($defaultValue);

	/**
	 * Set an element-specific configuration property.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @api
	 */
	public function setProperty($key, $value);

	/**
	 * Get all element-specific configuration properties
	 *
	 * @return array
	 * @api
	 */
	public function getProperties();

	/**
	 * Set a rendering option
	 *
	 * @param string $key
	 * @param mixed $value
	 * @api
	 */
	public function setRenderingOption($key, $value);

	/**
	 * Returns the ConjunctionValidator that is registered for this element
	 *
	 * @internal
	 * @return \TYPO3\FLOW3\Validation\Validator\ConjunctionValidator
	 */
	public function getValidator();

	/**
	 * Whether or not this element is required
	 *
	 * @internal
	 * @return boolean
	 */
	public function isRequired();
}
?>