<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\FindItemResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single FindItem operation request.
 *
 * @package php-ews\Response
 */
class FindItemResponseMessageType extends ResponseMessageType
{
    /**
     * Contains the results from a search of a single root folder during a
     * FindItem operation.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\FindItemParentType
     */
    public $RootFolder;
}
