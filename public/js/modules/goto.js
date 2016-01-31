Modules.goto = {
    targets : {},
    start: function () {
        $('.goto').on('click', function () {
            target = prompt('Para onde vamos maninho?');

            try {
                slideNumber = Modules.goto.findSlideNumber(target);
                Reveal.slide(slideNumber);
            } catch (e) {
                alert('Não encontramos o slide especificado.');
            }
        });
    },

    findSlideNumber: function (target) {
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

    register: function (keys, slide) {
        if (!Array.isArray(keys)) {
            keys = [keys];
        }

        keys.forEach(function (key) {
            Modules.goto.targets[key] = slide;
        });
    },

    validateTarget: function (target) {
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