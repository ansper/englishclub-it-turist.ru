dropButtons = document.querySelectorAll('.dropbtn');
dropBlocks = document.querySelectorAll('.dropdown-content');

dropButtons.forEach(button => {
    button.addEventListener('click', () => {
        const targetId = button.getAttribute('data-target');

        dropBlocks.forEach(block => {
            if (block.id === targetId) {
                block.classList.add('dropbtn_active');
            } else {
                block.classList.remove('dropbtn_active');
            }
        });
    });
});