(function() {
    tinymce.create("tinymce.plugins.fal_button_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //add new button     
            ed.addButton("fal", {
                title : "لینک فال حافظ",
                cmd : "fal_command",
                image : "https://asheghnameh.com/wp-content/uploads/2019/04/fallehafez.png"
            });

            //button functionality.
            ed.addCommand("fal_command", function() {
                var selected_text = ed.selection.getContent();
                var return_text = " <a class='btn btn-download white-text font-weight-bold wow fadeIn waves-effect waves-light' data-toggle='modal' data-target='#centralModalSuccess'>" + selected_text + "</a>";
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

    tinymce.PluginManager.add("fal_button_plugin", tinymce.plugins.fal_button_plugin);

})();



