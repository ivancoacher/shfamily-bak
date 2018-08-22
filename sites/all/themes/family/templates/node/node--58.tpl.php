<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
  $path_family= drupal_get_path('theme', 'family');
  drupal_add_css($path_family . '/css/components/static.css', array('group' => CSS_THEME));

?>
<div class="clearfix"></div>
<div class="map-location hidden">
    <div class="col-sm-6"><img src="<?php print variable_get("path_theme");?>/images/map_contact_1.png" class="img-reponsive" /></div>  
    <div class="col-sm-6"><img src="<?php print variable_get("path_theme");?>/images/map_contact_2.png" class="img-reponsive" /></div>  
</div>     
<div class="container ">
    <div class="contact-content">
        <div class="title-contact col-xs-12"><span>Get in Touch with Us</span></div>
        <div class="subtitle-contact col-xs-12"><span> If you can't find what you're looking for on the site, or need to talk to a real human, provide your name, email address and send us a message. Someone will get back to you as soon as possible. </span></div>
        <div class="col-xs-12 form-contact">
            <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

                <?php print $user_picture; ?>

                <?php print render($title_prefix); ?>
                <?php if (!$page): ?>
                    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
                <?php endif; ?>
                <?php print render($title_suffix); ?>

                <?php if ($display_submitted): ?>
                    <div class="submitted">
                        <?php print $submitted; ?>
                    </div>
                <?php endif; ?>

                <div class="content"<?php print $content_attributes; ?>>
                    <?php
                    // We hide the comments and links now so that we can render them later.
                    hide($content['comments']);
                    hide($content['links']);
                    //contact from
                    print render($contact_form);

                    //print //render($content);
                    ?>
                </div>

                <?php //print render($content['links']); ?>

                <?php //print render($content['comments']); ?>

            </div>

<!--            <form>
                <div class="form-group name">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="&#xf007; Name">
                </div>
                <div class="form-group email">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="&#xf003; Email">
                </div>

                <div class="form-group ">
                    <textarea class="form-control" rows="3"  placeholder="&#xf040; Message" ></textarea>
                </div>          
                <button type="submit" class="btn btn-family-blue"> Send Message </button>
            </form>-->
         
        </div>
     
        
    </div>
    <div class="adress-content">
       <div class="col-xs-12 underline-contact"></div>
         <div class="title-contact col-xs-12"><span>Address</span></div>
          <div class="col-xs-12 adress-list">
         
              <div class="col-sm-4">
                  <div class="adress-item row">
                  <div class="col-xs-12"> Shanghai Office</div>
                  <div class="col-xs-12">Telephone</div>
                  <div class="col-xs-12">(021) 6039-8210 </div>
                  <div class="col-xs-12">Adress</div>
                  <div class="col-xs-12">Rm. 1501, 15/F Yingshi Building, 180 Tianjin Lu  Near Metro Line 2 Nanjing Dong Lu Station </div>
                  <div class="col-xs-12">天津路180号应氏大厦15楼1501室 </div>
                  </div>
              </div>
  
          </div>
    </div>     
       
</div>
