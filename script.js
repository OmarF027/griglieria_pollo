const toggle = document.querySelector('.toggle');
const navigation = document.querySelector('.navigation');

toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
});

// Chiudi menu al click esterno
document.addEventListener('click', (e) => {
    if (!navigation.contains(e.target) && !toggle.contains(e.target)) {
        toggle.classList.remove('active');
        navigation.classList.remove('active');
    }
});