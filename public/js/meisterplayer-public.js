;(function(global) {
    global.Meister = function(selector, opts) {
        console.group(selector);
        console.log('meister options:', opts);

        return {
            setItem: (opts) => {
                console.log('setitem:', opts);
                console.groupEnd();
            }
        }
    }
})(window);
