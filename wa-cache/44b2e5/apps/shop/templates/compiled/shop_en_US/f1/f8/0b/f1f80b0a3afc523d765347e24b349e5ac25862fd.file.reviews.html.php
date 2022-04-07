<?php /* Smarty version Smarty-3.1.14, created on 2022-04-02 15:21:04
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:18476549316248239088d8b3-62516075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f80b0a3afc523d765347e24b349e5ac25862fd' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/reviews.html',
      1 => 1646323515,
      2 => 'file',
    ),
    'cfb4d644b6f8cff4a4ca1cc8a5146fd7db9af23c' => 
    array (
      0 => '/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/review.html',
      1 => 1646323622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18476549316248239088d8b3-62516075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'product' => 0,
    'wa' => 0,
    'reviews' => 0,
    '_product_data' => 0,
    'reviews_count' => 0,
    'current_user_id' => 0,
    'require_authorization' => 0,
    'wa_parent_theme_path' => 0,
    'current_auth_source' => 0,
    'auth_adapters' => 0,
    'adapter' => 0,
    'current_auth' => 0,
    'i' => 0,
    '_images_enabled' => 0,
    '_max_post_size' => 0,
    '_max_file_size' => 0,
    '_file_template' => 0,
    '_error_template' => 0,
    '_max_post_size_mb' => 0,
    '_max_file_size_mb' => 0,
    '_moderate_enabled' => 0,
    'request_captcha' => 0,
    'review_service_agreement' => 0,
    'review_service_agreement_hint' => 0,
    '_review' => 0,
    'reply_allowed' => 0,
    '_comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62482390b15ce4_12548298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62482390b15ce4_12548298')) {function content_62482390b15ce4_12548298($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/reviews.js"></script><?php echo $_smarty_tpl->tpl_vars['wa']->value->title(sprintf('%s reviews',$_smarty_tpl->tpl_vars['product']->value['name']));?>
<?php $_smarty_tpl->tpl_vars['_product_data'] = new Smarty_variable(array("product"=>$_smarty_tpl->tpl_vars['product']->value,"reviews_count"=>count($_smarty_tpl->tpl_vars['reviews']->value),"is_review_page"=>true), null, 0);?><?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("showBottomBanner",true);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("productPageData",$_smarty_tpl->tpl_vars['_product_data']->value);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("globalHeader",htmlspecialchars((_w('%d review for ','%d reviews for ',$_smarty_tpl->tpl_vars['reviews_count']->value)).($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true));?>
<div class="s-reviews-page" id="s-reviews-page"><section class="s-form-section"><header class="s-section-header">Write a review</header><div class="s-section-body"><div class="s-form-wrapper"><form method="post"><?php $_smarty_tpl->tpl_vars['current_user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->userId(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['current_user_id']->value)&&$_smarty_tpl->tpl_vars['require_authorization']->value){?><div class="s-review-field"><?php echo sprintf('To add a review please <a href="%s">sign up</a> or <a href="%s">login</a>',$_smarty_tpl->tpl_vars['wa']->value->signupUrl(),$_smarty_tpl->tpl_vars['wa']->value->loginUrl());?>
</div><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['current_user_id']->value)){?><div class="s-review-field user-name-block"><strong><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(20);?>
" class="userpic" alt=""><?php echo $_smarty_tpl->tpl_vars['wa']->value->user('name');?>
</strong><a class="s-logout-link" href="?logout">(log out)</a></div><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/login.adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="s-provider-fields s-layout fixed" data-provider="<?php echo shopProductReviewsModel::AUTH_GUEST;?>
" <?php if ($_smarty_tpl->tpl_vars['current_auth_source']->value!=shopProductReviewsModel::AUTH_GUEST){?>style="display:none"<?php }?>><div class="s-column"><div class="s-review-field"><div class="s-label">Your name</div><input class="is-wide" type="text" name="name" id="review-name" value=""></div></div><div class="s-column"><div class="s-review-field"><div class="s-label">Email</div><input class="is-wide" type="text" name="email" id="review-email"></div></div><div class="s-column"><div class="s-review-field"><div class="s-label">Website</div><input class="is-wide" type="text" name="site" id="review-site"></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['auth_adapters']->value[$_smarty_tpl->tpl_vars['current_auth_source']->value])){?><?php $_smarty_tpl->tpl_vars['adapter'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth_adapters']->value[$_smarty_tpl->tpl_vars['current_auth_source']->value], null, 0);?><div class="s-provider-fields" data-provider="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getId();?>
"><div class="s-review-field"><div class="header-block">Your name</div><strong><img src="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getIcon();?>
" class="userpic" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_auth']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong><a href="?logout">log out</a></div></div><?php }?><?php }?><div class="s-review-field"><div class="s-label">Title</div><input class="is-wide" type="text" name="title"></div><div class="s-review-field s-rates-field"><div class="s-label">Rate product</div><div class="s-rates-wrapper"><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><i class="s-rate-item svg-icon star-empty" data-rate-count="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></i><?php }} ?><input name="rate" type="hidden" value="0"></div></div><div class="s-review-field"><div class="s-label">Review</div><textarea id="review-text" name="text" rows="10" cols="45"></textarea></div><?php $_smarty_tpl->tpl_vars['_images_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->setting("allow_image_upload",false,"shop"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_images_enabled']->value)){?><div class="s-review-field"><div class="s-label">Images</div><div class="s-review-images-section" id="js-review-images-section"><div class="s-image-form-section"><div class="s-description"><span class="s-icon photo"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19"><path fill="#ddd" d="M18.373 3.586c.773 0 1.432.265 1.979.794.545.53.819 1.167.818 1.915v9.48c0 .747-.273 1.386-.819 1.914a2.74 2.74 0 0 1-1.978.793H2.987a2.74 2.74 0 0 1-1.977-.793c-.547-.528-.82-1.167-.82-1.914v-9.48c0-.748.273-1.386.82-1.915a2.742 2.742 0 0 1 1.977-.794H4.12c.792 0 1.502-.483 1.786-1.214l.086-.224c.14-.346.392-.644.76-.894.368-.251.745-.376 1.132-.376h5.594c.387 0 .763.125 1.131.376.368.25.621.548.76.894l.087.224a1.911 1.911 0 0 0 1.785 1.214h1.132zM10.68 15.774c1.348 0 2.5-.464 3.458-1.391.959-.928 1.438-2.044 1.437-3.349 0-1.304-.478-2.42-1.437-3.348-.957-.927-2.11-1.39-3.458-1.39-1.348 0-2.5.462-3.458 1.39-.958.928-1.437 2.044-1.437 3.348 0 1.305.478 2.422 1.437 3.349.958.927 2.11 1.391 3.458 1.391zM8.456 8.881a3.083 3.083 0 0 1 2.224-.894c.867 0 1.609.298 2.224.894.615.596.923 1.314.923 2.153s-.307 1.557-.923 2.152a3.08 3.08 0 0 1-2.224.894 3.083 3.083 0 0 1-2.224-.894c-.615-.595-.923-1.313-.923-2.152 0-.839.308-1.557.923-2.153z"></svg></span><a href="javascript:void(0);">Upload photos</a> or drag &amp; drop here (max. 10 photos)</div>
                                        <input class="s-file-field js-file-field" type="file" multiple>
                                    </div>

                                    <div class="s-attached-files-section js-attached-files-section"></div>

                                    <div class="s-errors-section js-errors-section"></div>

                                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_file_template", null); ob_start(); ?><div class="s-file-wrapper"><div class="s-image-wrapper"></div><div class="s-description-wrapper"><div class="s-visible"><a class="js-show-textarea" href="javascript:void(0);">Add a description</a></div><div class="s-hidden"><textarea class="s-textarea js-textarea" placeholder="Enter a description here"></textarea></div></div><div class="s-actions"><div class="s-action js-delete-file" title="<?php echo htmlspecialchars(_w("Delete"), ENT_QUOTES, 'UTF-8', true);?>
"><span class="s-icon delete"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 10 10" xml:space="preserve"><style type="text/css">.st0 { fill:none;stroke:rgba(0,0,0,0.5);stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10; } </style><line class="st0" x1="0.5" y1="0.5" x2="9.5" y2="9.5"/><line class="st0" x1="9.5" y1="0.5" x2="0.5" y2="9.5"/></svg></span></div></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_error_template", null); ob_start(); ?><div class="s-error">%text%</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                                    <script>
                                        ( function($) {
                                            <?php $_smarty_tpl->tpl_vars['_max_post_size'] = new Smarty_variable(waRequest::getPostMaxSize(), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['_max_file_size'] = new Smarty_variable(waRequest::getUploadMaxFilesize(), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['_max_post_size_mb'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['_max_post_size']->value*10/(1024))/10, null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['_max_file_size_mb'] = new Smarty_variable(floor($_smarty_tpl->tpl_vars['_max_file_size']->value*10/(1024))/10, null, 0);?>

                                            new window.waTheme.init.shop.ReviewImagesSection({
                                                $wrapper: $("#js-review-images-section"),
                                                max_post_size: <?php echo json_encode($_smarty_tpl->tpl_vars['_max_post_size']->value);?>
,
                                                max_file_size: <?php echo json_encode($_smarty_tpl->tpl_vars['_max_file_size']->value);?>
,
                                                max_files: 10,
                                                templates: {
                                                    "file": <?php echo json_encode($_smarty_tpl->tpl_vars['_file_template']->value);?>
,
                                                    "error": <?php echo json_encode($_smarty_tpl->tpl_vars['_error_template']->value);?>

                                                },
                                                patterns: {
                                                    "file": "images[%index%]",
                                                    "desc": "images_data[%index%][description]"
                                                },
                                                locales: {
                                                    "files_limit": <?php echo json_encode(_w("You can upload a maximum of 10 photos."));?>
,
                                                    "file_type": <?php echo json_encode(_w("Unsupported image type. Use PNG, GIF and JPEG image files only."));?>
,
                                                    "post_size": <?php echo json_encode(_w("Total size of selected files cannot be greater than"));?>
 + " " + <?php echo json_encode($_smarty_tpl->tpl_vars['_max_post_size_mb']->value);?>
 + <?php echo json_encode(_w("KB"));?>
 + ".",
                                                    "file_size": <?php echo json_encode(_w("Each file’s size cannot be greater than"));?>
 + " " + <?php echo json_encode($_smarty_tpl->tpl_vars['_max_file_size_mb']->value);?>
 + <?php echo json_encode(_w("KB"));?>
 + "."
                                                }
                                            });

                                        })(jQuery);
                                    </script>
                                </div>
                            </div>
                        <?php }?>

                        <?php $_smarty_tpl->tpl_vars['_moderate_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->setting('moderation_reviews',0,'shop'), null, 0);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['_moderate_enabled']->value)){?>
                            <div class="s-review-field">
                                <div class="s-review-notice-section">
                                    Your review will be published after moderation.
                                </div>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['request_captcha']->value&&empty($_smarty_tpl->tpl_vars['current_user_id']->value)){?>
                            <div class="s-review-field review-submit">
                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->captcha();?>

                            </div>
                        <?php }?>

                        <?php if (empty($_smarty_tpl->tpl_vars['current_user_id']->value)&&!empty($_smarty_tpl->tpl_vars['review_service_agreement']->value)&&!empty($_smarty_tpl->tpl_vars['review_service_agreement_hint']->value)){?>
                            <div class="s-review-field service-agreement-wrapper">
                                <label>
                                    <?php if ($_smarty_tpl->tpl_vars['review_service_agreement']->value=='checkbox'){?>
                                        <input type="hidden" name="service_agreement" value="">
                                        <input type="checkbox" name="service_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['wa']->value->post('service_agreement')||$_smarty_tpl->tpl_vars['wa']->value->storage('shop_review_agreement')){?> checked<?php }?>>
                                    <?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['review_service_agreement_hint']->value;?>

                                </label>
                            </div>
                        <?php }?>

                        <div class="s-review-field reply-notification">
                            <span class="reply-number"></span>
                            <a href="javascript:void(0);" class="unset-reply-parent">cancel</a>
                        </div>

                        <div class="s-errors-wrapper"></div>

                        <?php if (empty($_smarty_tpl->tpl_vars['current_user_id']->value)&&!empty($_smarty_tpl->tpl_vars['review_service_agreement']->value)&&!empty($_smarty_tpl->tpl_vars['review_service_agreement_hint']->value)){?>
                            <div class="s-review-field">
                                <label class="service-agreement-wrapper">
                                    <?php if ($_smarty_tpl->tpl_vars['review_service_agreement']->value=='checkbox'){?>
                                        <input type="hidden" name="service_agreement" value="">
                                        <input type="checkbox" name="service_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['wa']->value->post('service_agreement')||$_smarty_tpl->tpl_vars['wa']->value->storage('shop_review_agreement')){?> checked<?php }?>>
                                    <?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['review_service_agreement_hint']->value;?>

                                </label>
                            </div>
                        <?php }?>

                        <div class="s-review-field comment-submit">
                            <input type="submit" class="save js-submit-button" value="Add review" data-active="Adding" data-inactive="Add review">
                            <button type="button" class="s-cancel-button js-unset-reply-parent">cancel</button>
                        </div>

                        <input type="hidden" name="parent_id" value="0">
                        <input type="hidden" name="product_id" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php }else{ ?>0<?php }?>">
                        <input type="hidden" name="auth_provider" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['current_auth_source']->value)===null||$tmp==='' ? shopProductReviewsModel::AUTH_GUEST : $tmp);?>
">
                        <input type="hidden" name="count" value="<?php echo $_smarty_tpl->tpl_vars['reviews_count']->value;?>
">
                    <?php }?>
                </form>
            </div>
        </div>
    </section>

    <div class="s-reviews-section">
        <a name="reviewheader"></a>

        <?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)){?>
            <ul class="s-reviews-list">
                <?php  $_smarty_tpl->tpl_vars['_review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_review']->key => $_smarty_tpl->tpl_vars['_review']->value){
$_smarty_tpl->tpl_vars['_review']->_loop = true;
?>
                    <li class="s-review-wrapper">
                        <?php /*  Call merged included template "./review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('review'=>$_smarty_tpl->tpl_vars['_review']->value,'reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value), 0, '18476549316248239088d8b3-62516075');
content_62482390a89152_74659040($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./review.html" */?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['_review']->value['comments'])){?>
                            <ul class="s-reviews-list">
                                <?php  $_smarty_tpl->tpl_vars['_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_review']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_comment']->key => $_smarty_tpl->tpl_vars['_comment']->value){
$_smarty_tpl->tpl_vars['_comment']->_loop = true;
?>
                                    <li class="s-review-wrapper">
                                        <?php /*  Call merged included template "./review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('review'=>$_smarty_tpl->tpl_vars['_comment']->value,'reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value), 0, '18476549316248239088d8b3-62516075');
content_62482390a89152_74659040($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./review.html" */?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    </div>

    <script>
        ( function($) {
            new window.waTheme.init.shop.Reviews({
                $wrapper: $("#s-reviews-page")
            });
        })(jQuery);
    </script>
</div>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-04-02 15:21:04
         compiled from "/home/miricouz/xx.uz/wa-data/public/shop/themes/hypermarket/review.html" */ ?>
<?php if ($_valid && !is_callable('content_62482390a89152_74659040')) {function content_62482390a89152_74659040($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/miricouz/xx.uz/wa-system/vendors/smarty3/plugins/modifier.date_format.php';
?><div class="s-review review" data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
" itemscope itemprop="review" itemtype="http://schema.org/Review"><?php if ($_smarty_tpl->tpl_vars['review']->value['title']){?><h4 class="s-title" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</h4><?php }?><?php if ($_smarty_tpl->tpl_vars['review']->value['text']){?><div class="s-description" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['review']->value['text'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['review']->value['images'])){?><div class="s-images-list"><?php  $_smarty_tpl->tpl_vars['_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['review']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_image']->key => $_smarty_tpl->tpl_vars['_image']->value){
$_smarty_tpl->tpl_vars['_image']->_loop = true;
?><a class="s-image-wrapper js-show-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['url_0'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><img class="s-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['url_2'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"></a><?php } ?><script>( function($) {var $document = $(document),$review = $(".s-review[data-id=\"" + <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 + "\"]");$review.on("click", ".js-show-image", function(event) {event.preventDefault();var $image = $(this),images = [];$review.find(".js-show-image").each(function () {var $_image = $(this);images.push({href: $_image.attr("href"),title: escape($_image.attr("title"))});});var k = $image.prevAll('.js-show-image').length;if (k) { images = images.slice(k).concat(images.slice(0, k)); }$.swipebox(images, {useSVG : false,hideBarsDelay: false,afterOpen: function() {$document.on("scroll", closeSwipe);function closeSwipe() {var $closeButton = $("#swipebox-close");if ($closeButton.length) {$closeButton.trigger("click");}$document.off("scroll", closeSwipe);}}});function escape(string) {return $("<div />").text(string).html();}});})(jQuery);</script></div><?php }?>

    <div class="s-layout">
        <div class="s-column">
            
            <?php if ($_smarty_tpl->tpl_vars['reply_allowed']->value){?>
                <div class="s-actions-wrapper">
                    <a class="js-comment-review" href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reply_link']->value)===null||$tmp==='' ? "javascript:void(0);" : $tmp);?>
">reply</a>
                </div>
            <?php }?>
        </div>

        <div class="s-column right">

            
            <?php if (!$_smarty_tpl->tpl_vars['review']->value['parent_id']&&!empty($_smarty_tpl->tpl_vars['review']->value['rate'])){?>
                <div class="s-rates-wrapper" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                    <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['review']->value['rate']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable("star", null, 0);?>
                        <?php if (($_smarty_tpl->tpl_vars['rate']->value<$_smarty_tpl->tpl_vars['i']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['icon_class'] = new Smarty_variable("star-empty", null, 0);?>
                        <?php }?>
                        <i class="s-rate-item svg-icon size-11 <?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
" data-rate-count="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></i>
                    <?php }} ?>

                    <meta itemprop="worstRating" content = "1">
                    <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
">
                    <meta itemprop="bestRating" content = "5">
                </div>
            <?php }?>

            
            <div class="s-author-name" itemprop="author">
                <?php if (empty($_smarty_tpl->tpl_vars['review']->value['site'])){?><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
<?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['site'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</a><?php }?>
                
                    
                
            </div>

            
            <div class="s-date-wrapper" title="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime']);?>
"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>
</div>

        </div>
    </div>

    <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
    <meta itemprop="datePublished" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['datetime'],'Y-m-d');?>
">
</div>

<?php }} ?>