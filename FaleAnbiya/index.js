(function() {
    tinymce.create("tinymce.plugins.falAnbiya_button_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //add new button     
            ed.addButton("falAnbiya", {
                title : "لینک فال انبیا",
                cmd : "falAnbiya_command",
                image :"https://asheghnameh.com/wp-content/plugins/FaleAnbiya/images/faleanbiya.png"
            });

            //button functionality.
            ed.addCommand("falAnbiya_command", function() {
                var selected_text = ed.selection.getContent();
                var return_text = " <a class='btn btn-download white-text font-weight-bold wow fadeIn waves-effect waves-light' data-toggle='modal' data-target='#centralModalSuccessNewFalAnbiya'>" + selected_text + "</a>";
                ed.execCommand("mceInsertContent", 0, return_text);
            });

        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : "Extra Buttons",
                author : "Narayan Prusty",
                version : "1"
            };
        }
    });

    tinymce.PluginManager.add("falAnbiya_button_plugin",tinymce.plugins.falAnbiya_button_plugin);
})();
