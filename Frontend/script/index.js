document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', () => {
        const filterValue = button.getAttribute('data-filter');
        window.location.href = `products.php?filter=${filterValue}`;
    });
});