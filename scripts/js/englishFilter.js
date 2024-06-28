buttons = document.querySelectorAll('.filter__button');
blocks = document.querySelectorAll('.whom__center__container');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        var targetId = button.getAttribute('data-target');

        blocks.forEach(block => {
            if (block.id === targetId) {
                block.classList.add('whom__active');
                setTimeout(() => {
                    block.classList.add('fade-in');
                }, 200);
            } else {
                block.classList.remove('whom__active', 'fade-in');
            }
        });

        buttons.forEach(btn => btn.classList.remove('filter__button__active'));
        button.classList.add('filter__button__active');
    });
});