<?php
/* Smarty version 3.1.32, created on 2018-09-04 12:37:07
  from 'C:\xampp\htdocs\prestashop\admin680ywwcwx\themes\new-theme\template\components\layout\nav_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8ea6a3ce2909_84401911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60d478f63756e8069494ef3fc762d609f6050126' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin680ywwcwx\\themes\\new-theme\\template\\components\\layout\\nav_bar.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8ea6a3ce2909_84401911 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav-bar d-none d-md-block">
  <span class="menu-collapse">
    <i class="material-icons">chevron_left</i>
    <i class="material-icons">chevron_left</i>
  </span>

  <ul class="main-menu">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'level1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level1']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['level1']->value['active']) {?>

        <?php $_smarty_tpl->_assignInScope('level1Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['href'],'html','UTF-8' )));?>
        <?php if (count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs']) && isset($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'])) {?>
          <?php $_smarty_tpl->_assignInScope('level1Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'],'html','UTF-8' )));?>
        <?php }?>

        <?php $_smarty_tpl->_assignInScope('level1Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['name'],'html','UTF-8' )));?>
        <?php if ($_smarty_tpl->tpl_vars['level1']->value['name'] == '') {?>
          <?php $_smarty_tpl->_assignInScope('level1Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['class_name'],'html','UTF-8' )));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['level1']->value['icon'] != '') {?>

          <li class="link-levelone <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
" id="tab-<?php echo $_smarty_tpl->tpl_vars['level1']->value['class_name'];?>
">
            <a href="<?php echo $_smarty_tpl->tpl_vars['level1Href']->value;?>
" class="link" >
              <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level1']->value['icon'];?>
</i> <span><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
            </a>
          </li>

        <?php } else { ?>

          <li class="category-title <?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
" id="tab-<?php echo $_smarty_tpl->tpl_vars['level1']->value['class_name'];?>
">
              <span class="title"><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
          </li>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level1']->value['sub_tabs'], 'level2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level2']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['level2']->value['active']) {?>

                <?php $_smarty_tpl->_assignInScope('level2Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['href'],'html','UTF-8' )));?>

                <?php $_smarty_tpl->_assignInScope('level2Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['name'],'html','UTF-8' )));?>
                <?php if ($_smarty_tpl->tpl_vars['level2']->value['name'] == '') {?>
                  <?php $_smarty_tpl->_assignInScope('level2Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['class_name'],'html','UTF-8' )));?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('levelOneClass', '');?>

                <?php if ($_smarty_tpl->tpl_vars['level2']->value['current'] && !$_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('levelOneClass', " -active open ul-open");?>
                <?php } elseif ($_smarty_tpl->tpl_vars['level2']->value['current'] && $_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('levelOneClass', " -active");?>
                <?php }?>

                <li class="link-levelone<?php if (count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?> has_submenu<?php }
echo $_smarty_tpl->tpl_vars['levelOneClass']->value;?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
" id="subtab-<?php echo $_smarty_tpl->tpl_vars['level2']->value['class_name'];?>
">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['level2Href']->value;?>
" class="link">
                    <i class="material-icons mi-<?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
"><?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
</i>
                    <span>
                    <?php echo $_smarty_tpl->tpl_vars['level2Name']->value;?>

                    </span>
                      <?php if (count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'])) {?>
                          <i class="material-icons sub-tabs-arrow">
                              <?php if ($_smarty_tpl->tpl_vars['level2']->value['current']) {?>
                                  keyboard_arrow_up
                              <?php } else { ?>
                                  keyboard_arrow_down
                              <?php }?>
                          </i>
                      <?php }?>
                  </a>
                    <?php if (count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?>
                      <ul id="collapse-<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
" class="submenu panel-collapse">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level2']->value['sub_tabs'], 'level3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['level3']->value) {
?>
                          <?php if ($_smarty_tpl->tpl_vars['level3']->value['active']) {?>

                            <?php $_smarty_tpl->_assignInScope('level3Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['href'],'html','UTF-8' )));?>

                            <?php $_smarty_tpl->_assignInScope('level3Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['name'],'html','UTF-8' )));?>
                            <?php if ($_smarty_tpl->tpl_vars['level3']->value['name'] == '') {?>
                              <?php $_smarty_tpl->_assignInScope('level3Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['class_name'],'html','UTF-8' )));?>
                            <?php }?>

                            <li class="link-leveltwo <?php if ($_smarty_tpl->tpl_vars['level3']->value['current']) {?>-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level3']->value['id_tab'];?>
" id="subtab-<?php echo $_smarty_tpl->tpl_vars['level3']->value['class_name'];?>
">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['level3Href']->value;?>
" class="link"> <?php echo $_smarty_tpl->tpl_vars['level3Name']->value;?>

                              </a>
                            </li>

                          <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>
                    <?php }?>
                </li>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php }?>

      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl ) );?>

</nav>
<?php }
}