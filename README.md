Landofcoder PDF Attachments Extension
=====================

Facts
-----
- version: 1.0.1

Description
-----------
This extension provides methods to attach documents to Magento emails, i.e. it does not have any configuration or
does anything out of the box. You can use it to base your own Magento extensions on it.

Additionally the extensions introduces the following new events to hook into the email sending process:
- lof_pdfattachments_email_template_init
- lof_pdfattachments_email_send_before
- lof_pdfattachments_email_send_after

You can use the following helper method to attach any document to an email, e.g. in the _email\_send\_before_ event:
```php
Mage::helper('lof/pdfattachments')->addAttachmentToEmail(Mage_Core_Model_Email_Template $emailTemplate, $fileContents, $filename);
```

Requirements
------------
- PHP >= 5.3.6
- Magento >= 1.6.x

Frequently Asked Questions
--------------------------
Please find the Frequently Asked Questions on our website landofcoder.com/contacts.

Support
-------


Developer
---------


Licence
-------
[GNU General Public License v3.0](https://www.gnu.org/licenses/gpl-3.0.html)

See also LICENSE file.

Copyright
---------
(c) since 2023 landofcoder

This Library uses Semantic Versioning - please find more information at http://semver.org.
