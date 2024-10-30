console.log('init button');

(function() {
    tinymce.create("tinymce.plugins.meisterplayer_plugin", {

        //url argument holds the absolute url of our plugin directory
        init : function(ed, url) {
            console.log(url + '/button-icon.png');
            //add new button
            ed.addButton("add_meisterplayer", {
                title : "Insert Meisterplayer",
                cmd : "insert_meisterplayer",
                image : url + '/button-icon.png',
            });

            //button functionality.
            ed.addCommand("insert_meisterplayer", function() {
                window.mb = window.mb || {};

                window.mb.frame = wp.media({
                    frame: 'post',
                    state: 'insert',
                    library : {
                        type : 'image'
                    },
                    multiple: false
                });

                window.mb.frame.on('insert', function() {
                    var json = window.mb.frame.state().get('selection').first().toJSON();
                    var video_link = json.url;
                    var return_text = video_link ? '[meisterplayer video="' + video_link + '"]' : '[meisterplayer]';

                    ed.execCommand("mceInsertContent", 0, return_text);
                });

                window.mb.frame.open();
            });

        },

        createControl : function(n, cm) {
            return null;
        },

        getInfo : function() {
            return {
                longname : 'Meister Player',
                author : 'Patrick Gerritsen',
                version : '0.0.1'
            };
        }
    });

    tinymce.PluginManager.add('meisterplayer_plugin', tinymce.plugins.meisterplayer_plugin);
})();
