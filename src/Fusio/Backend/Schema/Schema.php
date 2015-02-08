<?php

namespace Fusio\Backend\Schema;

use PSX\Data\SchemaAbstract;

/**
 * Schema
 *
 * @see http://phpsx.org/doc/concept/schema.html
 */
class Schema extends SchemaAbstract
{
	public function getDefinition()
	{
		$sb = $this->getSchemaBuilder('schema');
		$sb->integer('id');
		$sb->string('name');
		$sb->arrayType('fields')
			->setPrototype($this->getSchema('Fusio\Backend\Schema\Field'));

		return $sb->getProperty();
	}
}