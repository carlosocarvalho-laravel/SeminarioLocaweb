Modules.goto = {
    targets: {},

    start: function() {
        $('.goto').on('click', function() {
            target = prompt('Para onde vamos?');

            try {
                slideNumber = Modules.goto.findSlideNumber(target);
                Reveal.slide(slideNumber);
            } catch (e) {
                alert('Não encontramos o slide especificado.');
            }
        });
    },

    findSlideNumber: function(target) {
        if (!Modules.goto.validateTarget(target)) {
            throw {
                name: 'InvalidTarget',
                message: 'Target not found'
            }
        }

        if (isNaN(target)) {
            return Modules.goto.targets[target];
        }

        return target;
    },

    register: function(keys, slide, options) {
        if (!Array.isArray(keys)) {
            keys = [keys];
        }

        keys.forEach(function(key) {
            Modules.goto.targets[key] = slide;
        });
    },

    validateTarget: function(target) {
        if (undefined != Modules.goto.targets[target]) {
            return true;
        }

        if (isNaN(target)) {
            return false;
        }

        slideNumber = target;

        return slideNumber > -1 && slideNumber <= Reveal.getTotalSlides();
    }
};


//register all slides task
setTimeout(function() {
    Modules.goto.register('sorteio', 335);
    Modules.goto.register('painel', 226);
    var i = 1;
    $('div.slides').find('section').each(function(row) {
        var start = $(this).attr('data-on-start');
        if (start !== undefined) {
            var name = $(this).attr('data-slide-name');
            var uid = $(this).attr('data-slide-uid');
            var slide = $(this).index();
            var options = $(this).attr('data-options-slider') || null;
            Modules.goto.register([name, uid], slide, options);
        }
        i += 1;
    });


}, 300);