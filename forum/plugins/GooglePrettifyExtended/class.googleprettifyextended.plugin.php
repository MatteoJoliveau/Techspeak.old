<?php

// Define the plugin:
$PluginInfo['GooglePrettifyExtended'] = array(
    'Name' => 'Syntax Prettifier Extended',
    'Description' => 'Adds SelectCode and PopupCode to existing Syntax Prettifier',
    'Version' => '1.0',
    'RequiredApplications' => array('Vanilla' => '2.0.18'),
    'RequiredPlugins' => 'GooglePrettify',
    'RequiredTheme' => false,
    'MobileFriendly' => true,
    'Author' => 'Jack Maessen',
    'AuthorEmail' => 'mail@jackmaessen.nl',
    'AuthorUrl' => 'http://www.vanillaforums.org/profile/jackmaessen',
    
);

class GooglePrettifyPluginExtended extends Gdn_Plugin {
    
    public function addPrettyExtended($Sender) {
        
        $Sender->Head->addTag('script', array('type' => 'text/javascript', '_sort' => 100), $this->GetJsExtended());
        
    }
    
    
    public function DiscussionController_Render_Before($Sender) {
        $this->addPrettyExtended($Sender);
        $Sender->AddJsFile($this->GetResource('popupcode.js', FALSE, FALSE));
        $Sender->AddJsFile($this->GetResource('selectcode.js', FALSE, FALSE));
        
     }
    
     public function assetModel_styleCss_handler($Sender) {
        
        $Sender->addCssFile('prettifyextended.css', 'plugins/GooglePrettifyExtended');
     }
    
    
    public function getJsExtended() {
        
      
        $SelectAnchor = '<a class="selectable"><img src="/plugins/GooglePrettifyExtended/design/select.png" /></a>';
        $PopupWindowAnchor = '<a class="popupwindow" href="#" onclick="popup(this)"><img src="/plugins/GooglePrettifyExtended/design/popup.png" /></a>';
        
        //$SelectAnchor = '<a class="selectable">[SelectCode]</a>';  // text only
        //$PopupWindowAnchor = '<a class="popupwindow" href="#" onclick="popup(this)">[PopupCode]</a>'; // text only
        
        //$SelectAnchor = '<a class="selectable"><i class="fa fa-file-code-o"></i>[SelectCode]</a>';  // bootstrap fontawesome icons
        //$PopupWindowAnchor = '<a class="popupwindow" href="#" onclick="popup(this)"><i class="fa fa-external-link"></i>[PopupCode]</a>'; // bootstrap fontawesome icons
       
       
       
        /* wrap a class around the pre tag, so the anchors are only displayed when a pre block is in the comment
         * add 2 anchors via prepend to the class
         * give each pre a unique ID corresponding with the anchor for the selection
         */
        $ResultExtended = "jQuery(document).ready(function($) {
      
        
            $('.Message .CodeBlock', this).wrap('<div class=surroundpre></div>');
           
            $('.surroundpre').prepend('$SelectAnchor' + '$PopupWindowAnchor');
        
            $('.Message').livequery(function () {
           
           
                $('pre').each(function(){
                    var id;
                    if ($(this).attr('id') == undefined){
                      id = 'id'+Math.floor((Math.random() * 99999999) + 1);
                      $(this).attr('id',id);
                  
                      $(this).prevAll('a.selectable').attr('href','javascript:fnSelect(\"' + id + '\")');
                  
                    }
        
                });
           
            });

        });";
         
        return $ResultExtended; 
      
    }

   

    public function postController_render_before($Sender) {
        $this->addPrettyExtended($Sender);
        
    }
    
    
}    