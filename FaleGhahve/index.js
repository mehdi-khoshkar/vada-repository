(function() {
    tinymce.create("tinymce.plugins.faleghahve_button_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {

            //add new button     
            ed.addButton("faleghahve", {
                title : "لینک فال قهوه",
                cmd : "faleghahve_command",
                image :"https://asheghnameh.com/wp-content/plugins/FaleGhahve/images/faleghahve.png"
            });

            //button functionality.
            ed.addCommand("faleghahve_command", function() {
                var selected_text = ed.selection.getContent();
                var return_text = " <a class='btn btn-download white-text font-weight-bold wow fadeIn waves-effect waves-light' data-toggle='modal' data-target='#centralModalSuccessNewfaleghahve'>" + selected_text + "</a>";
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

    tinymce.PluginManager.add("faleghahve_button_plugin",tinymce.plugins.faleghahve_button_plugin);
})();
