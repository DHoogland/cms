<?php
namespace Blocks;

/**
 * Validates the required User attributes for the installer.
 */
class InstallUserForm extends BaseForm
{
	protected function getProperties()
	{
		return array(
			'username' => array(PropertyType::Varchar, 'maxLength' => 100, 'required' => true),
			'email'    => array(PropertyType::Email, 'required' => true),
			'password' => array(PropertyType::Varchar, 'minLength' => 6, 'required' => true)
		);
	}
}
