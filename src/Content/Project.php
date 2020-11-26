<?php

/**
 * * This file is part of vnkomm/vnk_project.
 *
 * (c) 2020 vn kommunikation.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    vnk_project
 * @author     Anton Spengler
 * @copyright  2020 vnkommunikation
 * @license    LICENSE MIT
 * @filesource
 */


namespace vnkomm\ContaoProjectBundle\Content;

use Contao\Config;
use Contao\ContentElement;
use Contao\FilesModel;
use Contao\StringUtil;

class Project extends ContentElement
{

    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'ce_project';


    /**
     * Generate the content element
     */
    protected function compile(): void
    {
        // Clean the RTE output
        $this->text = StringUtil::toHtml5($this->text);

        // Add the static files URL to images
        if (TL_FILES_URL) {
            $path = Config::get('uploadPath') . '/';

            $this->text = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $this->text);
        }

        $this->Template->text     = StringUtil::encodeEmail($this->text);
        $this->Template->addProjectImage = false;

        // Add an image
        if ($this->addProjectImage && $this->singleSRC) {
            $objModel = FilesModel::findByUuid($this->singleSRC);

            if ($objModel !== null && is_file(TL_ROOT . '/' . $objModel->path)) {
                $this->singleSRC = $objModel->path;
                $this->overwriteMeta = ($this->alt || $this->imageTitle || $this->caption);
                $this->addImageToTemplate($this->Template, $this->arrData, null, null, $objModel);
            }

            $this->Template->addProjectImage = true;
        }

		// Encode project url
		$this->Template->project_url     = $this->project_url;


		// Add project url link
		$this->Template->project_url_link = '&#109;&#97;&#105;&#108;&#116;&#111;&#58;' . $this->project_url;
    }
}
