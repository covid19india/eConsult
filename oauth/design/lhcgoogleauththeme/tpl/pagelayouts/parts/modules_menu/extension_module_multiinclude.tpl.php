<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhgoogleauth','use_admin_configure')) : ?>
<li class="nav-item"><a class="nav-link" href="<?php echo erLhcoreClassDesign::baseurl('googleauth/index')?>"><i class="material-icons">textsms</i><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('pagelayout/pagelayout','Google Auth');?></a></li>
<?php endif; ?>