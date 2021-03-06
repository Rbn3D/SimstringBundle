<?php

namespace Mapado\SimstringBundle\DataTransformer;

interface TransformerInterface
{
    /**
     * __construct
     *
     * @param mixed $persistenceService
     * @param string $model
     * @param string $field
     * @param array $options
     * @access public
     * @return void
     */
    public function __construct($persistenceService, $model, $field, array $options = []);

    /**
     * reverseTransform
     *
     * @param \Iterator<SimstringResult> $stringList
     * @access public
     * @return \Iterator<SimstringResult> Object list
     */
    public function reverseTransform(\Iterator $stringList);

    /**
     * transform
     *
     * @param \Iterator $objectList
     * @access public
     * @return void
     */
    public function transform(\Iterator $objectList);

    /**
     * findAll
     *
     * @access public
     * @return array
     */
    public function findAll();
}
