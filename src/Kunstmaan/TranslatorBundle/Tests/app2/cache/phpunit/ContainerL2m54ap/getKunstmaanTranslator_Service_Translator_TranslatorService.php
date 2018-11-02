<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'kunstmaan_translator.service.translator.translator' shared service.

$this->services['kunstmaan_translator.service.translator.translator'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.yml' => array(0 => 'yml'), 'kunstmaan_translator.service.translator.loader' => array(0 => 'database')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true), array(0 => ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'}));

$instance->setTranslationRepository(${($_ = isset($this->services['kunstmaan_translator.repository.translation']) ? $this->services['kunstmaan_translator.repository.translation'] : $this->load(__DIR__.'/getKunstmaanTranslator_Repository_TranslationService.php')) && false ?: '_'});
$instance->setResourceCacher(${($_ = isset($this->services['kunstmaan_translator.service.translator.resource_cacher']) ? $this->services['kunstmaan_translator.service.translator.resource_cacher'] : $this->load(__DIR__.'/getKunstmaanTranslator_Service_Translator_ResourceCacherService.php')) && false ?: '_'});
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf', 'az', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf', 'th', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 'zh_TW', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf', 'lv', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf', 'nn', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 'vi', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf', 'az', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 'uk', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
$instance->addResource('xlf', '/home/projects/bundles-cms/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf', 'no', 'validators');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.it.yml'), 'it', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.de.yml'), 'de', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.hu.yml'), 'hu', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.es.yml'), 'es', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.nl.yml'), 'nl', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.fr.yml'), 'fr', 'messages');
$instance->addResource('yml', ($this->targetDirs[4].'/Resources/translations/messages.en.yml'), 'en', 'messages');
$instance->addResource('yml', ($this->targetDirs[2].'/Resources/translations/newdomain.de.yml'), 'de', 'newdomain');
$instance->addResource('yml', ($this->targetDirs[2].'/Resources/translations/messages.nl.yml'), 'nl', 'messages');
$instance->addResource('yml', ($this->targetDirs[2].'/Resources/translations/messages.en.yml'), 'en', 'messages');
$instance->addDatabaseResources();
$instance->setFallbackLocales(array(0 => 'en'));

return $instance;