<?php
/*
 * This file is part of PHP Selenium Library.
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Selenium;


class Browser extends GeneratedBrowser
{
    /**
     * {@inheritdoc}
     */
    public function getAttribute($attributeLocator)
    {
        try {
            return parent::getAttribute($attributeLocator);
        } catch (Exception $e) {
            if (false !== strpos($e->getMessage(), 'Could not find element attribute')) {
                return null;
            }

            throw $e;
        }
    }




}
