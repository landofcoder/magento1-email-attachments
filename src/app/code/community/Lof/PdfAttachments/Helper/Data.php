<?php
class Lof_PdfAttachments_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Attaches the specified file contents to the email template.
     *
     * @param Mage_Core_Model_Email_Template $emailTemplate
     * @param Varien_Object $fileContents
     * @param string $filename
     *
     * @return \Zend_Mime_Part
     */
    public function addAttachmentToEmail(Mage_Core_Model_Email_Template $emailTemplate, $fileContents, $filename)
    {
        return $emailTemplate->getMail()->createAttachment($fileContents, 'application/pdf', Zend_Mime::DISPOSITION_ATTACHMENT, Zend_Mime::ENCODING_BASE64, $filename);
    }
}
