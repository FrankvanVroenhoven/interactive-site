document.getElementById('showFrontend').addEventListener('click', function() {
    document.getElementById('frontendExample').classList.toggle('hidden');
});

document.getElementById('showBackend').addEventListener('click', function() {
    document.getElementById('backendExample').classList.toggle('hidden');
    if (!document.getElementById('backendExample').classList.contains('hidden')) {
        startCounting();
    }
});

function startCounting() {
    const backendElement = document.querySelector('.backendElement');
    let count = 0;
    const interval = setInterval(function() {
        backendElement.textContent = "Counting: " + count;
        count++;
        if (count > 100) {
            clearInterval(interval);
        }
    }, 500); // Adjust speed of counting here (milliseconds)
}
